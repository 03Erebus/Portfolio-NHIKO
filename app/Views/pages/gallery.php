
<!-- Loader -->
<div id="skeleton-loader" class="container flex flex-col space-y-1 mx-auto">
    <!-- Title and Description Section -->
    <div class="h-6 w-32 bg-gray-300 dark:bg-gray-700 rounded py-6 animate-pulse">
    </div>

    <!-- Gallery Grid  Portraits Section -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 border border-gray-200">    
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
    </div>

    <!-- For Landscape Mode -->
    <div class="grid grid-cols-1 border border-gray-200">
        <div class="h-120 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
    </div>

    <!-- Gallery Grid  Series Section -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 border border-gray-200"> 
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
        <div class="h-60 w-full bg-gray-300 dark:bg-gray-700 rounded-sm animate-pulse">
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="gallery" class="hidden container flex-col mx-auto">
    <!-- Title and Description Section -->
    <div class="flex flex-col justify-center items-start space-y-4 py-6">
            <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300">
                Gallery
            </h1>
    </div>

    <!-- Gallery Grid -->
    <div id="gallery-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 h-auto resize 
                grid-flow-dense gap-0.5">

        <?php 
        if (!empty($artworks)) {
            foreach ($artworks as $art) {
                $title = $art['title'] ?? '';
                $category = $art['category'] ?? '';
                $year = $art['year'] ?? '';
                $image = $art['image'] ?? '';
                $size = $art['size'] ?? 'square';
                
                include __DIR__ . '/../components/artwork.php';
            }
        }
        ?>
 
    </div>

 

</div>

<!-- Javascript -->
<script>

    function fillEmptyGridSlots() {
        const grid = document.getElementById('gallery-grid');
        if (!grid) return;

        document.querySelectorAll('.filler-frame').forEach(el => el.remove());

        const columnCount = window.getComputedStyle(grid)
            .getPropertyValue('grid-template-columns')
            .split(' ')
            .filter(v => v.trim() !== '').length;

        const items = Array.from(grid.children).filter(child => {
            return !child.classList.contains('filler-frame') &&
                window.getComputedStyle(child).display !== 'none';
        });

        if (items.length === 0) return;

        // Find how far right the last row actually extends
        const gridRect = grid.getBoundingClientRect();
        const lastRowTop = Math.max(...items.map(el => el.getBoundingClientRect().top));
        const lastRowItems = items.filter(el =>
            Math.abs(el.getBoundingClientRect().top - lastRowTop) < 1
        );
        const lastRowRight = Math.max(...lastRowItems.map(el => el.getBoundingClientRect().right));

        const colWidth = gridRect.width / columnCount;
        const columnsUsedInLastRow = Math.round((lastRowRight - gridRect.left) / colWidth);
        const slotsToFill = columnCount - columnsUsedInLastRow;

        console.log(`Columns: ${columnCount} | Last row uses: ${columnsUsedInLastRow} | Filling: ${slotsToFill}`);

        if (slotsToFill <= 0 || slotsToFill >= columnCount) return;

        for (let i = 0; i < slotsToFill; i++) {
            const filler = document.createElement('div');
            filler.className = 'filler-frame w-full h-auto bg-gray-100/50 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-lg hover:bg-gray-500/50 hover:dark:bg-gray-800/50 cursor-pointer';
            grid.appendChild(filler);
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        const skeletonLoader = document.getElementById('skeleton-loader');
        const mainContent = document.getElementById('gallery');

        setTimeout(() => {
            skeletonLoader.classList.add('hidden');
            skeletonLoader.classList.remove('flex');
            mainContent.classList.remove('hidden');
            mainContent.classList.add('flex');

            // Wait for images to load before measuring layout
            const images = mainContent.querySelectorAll('img');
            Promise.all(Array.from(images).map(img =>
                img.complete ? Promise.resolve() : new Promise(res => img.onload = img.onerror = res)
            )).then(() => {
                window.requestAnimationFrame(fillEmptyGridSlots);
            });
        }, 800);
    });

    let resizeTimeout;
    window.addEventListener('resize', () => {
        const mainContent = document.getElementById('gallery');
        if (mainContent && !mainContent.classList.contains('hidden')) {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                window.requestAnimationFrame(fillEmptyGridSlots);
            }, 150);
        }
    });

</script>