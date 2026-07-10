<!-- Project 2 -->
<div id="project-2-content" class="container flex grow flex-col">

    <?php
    // 1. ISOLATE THE MOCKUPS: Find only the mockups for HelioCam
    $projectMockups = [];
    foreach ($projects as $p) {
        if ($p['id'] === 'project-2') {
            // Grab the nested mockups array we defined earlier
            $projectMockups = $p['mockups'] ?? [];
            break;
        }
    }
    ?>

    <!-- Carousel -->
     <div class="relative w-full max-w-6xl mx-auto group pb-10">

        <div class="overflow-hidden w-full px-6 py-4 border shrink
                    border-gray-200 dark:border-gray-800 rounded-2xl">
            
            <div id="carousel-track-2" class="flex rotate-0 hover:-rotate-6 hover:scale-95
                    transition-transform duration-500 ease-in-out">
                
                <?php foreach ($projectMockups as $mockup): ?>
                    <div class="w-full shrink-0 flex justify-center items-center px-4">
                        
                        <?php
                        // Set image path and load correct component based on nested data
                        $imagePath = 'assets/projects/' . $mockup['image'];

                        if ($mockup['type'] === 'desktop') {
                            include __DIR__ . '/../components/mockup-desktop.php';
                        } elseif ($mockup['type'] === 'mobile') {
                            include __DIR__ . '/../components/mockup-mobile.php';
                        }
                        ?>

                    </div>
                <?php endforeach; ?>

            </div>

            <div class="absolute bottom-10 z-20 p-6">

                <h1 class="text-2xl font-bold transition-colors duration-300
                            md:text-4xl lg:text-6xl bg-gradient-to-r from-green-500 to-blue-500 
                            bg-clip-text text-transparent">
                        ITRF
                </h1>

            </div>


        </div>

        


        <!-- Side buttons / Next & Previous -->
        <button id="btn-prev-2" 
                class="absolute left-0 top-1/2 -translate-y-1/2 p-3 mx-4
                rounded-full bg-white/80 dark:bg-slate-800/80 shadow-xl 
                border border-slate-200 dark:border-slate-700 text-gray-400 dark:text-white 
                opacity-100 group-hover:opacity-100 transition-all hover:scale-110 z-10
                lg:opacity-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="btn-next-2" 
                class="absolute right-0 top-1/2 -translate-y-1/2 p-3 mx-4
                rounded-full bg-white/80 dark:bg-slate-800/80 shadow-xl 
                border border-slate-200 dark:border-slate-700 text-gray-400 dark:text-white 
                opacity-100 group-hover:opacity-100 transition-all hover:scale-110 z-10
                lg:opacity-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

    </div>

    <!-- Quick project details -->
    <div class="flex flex-row">

            <div>
                <svg>
                    <use></use>
                </svg>
                <p>
                    
                </p>
            </div>

    </div>

</div>


<!-- Javascript -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carousel-track-2');
    const btnPrev = document.getElementById('btn-prev-2');
    const btnNext = document.getElementById('btn-next-2');
    
    // Safety check: only run if these elements exist
    if (!track || !btnPrev || !btnNext) return;

    const slides = track.children;
    const totalSlides = slides.length;
    let currentIndex = 0;

    function updateCarousel() {
        const offset = currentIndex * -100;
        track.style.transform = `translateX(${offset}%)`;
    }

    btnNext.addEventListener('click', () => {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; 
        }
        updateCarousel();
    });

    btnPrev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1; 
        }
        updateCarousel();
    });
});
</script>