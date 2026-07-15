<!-- Loader -->
<div id="skeleton-loader-1" class="container flex flex-col space-y-4 mx-auto">
    <!-- Title and Description Section -->
    <div class="h-4 w-32 bg-gray-300 dark:bg-gray-700 rounded-md py-6 animate-pulse">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <div class=" relative flex flex-row items-center w-full 
                    aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                    bg-gray-100 border border-gray-300
                    dark:bg-gray-700 dark:border-gray-600 
                    rounded-lg py-4 px-6 animate-pulse">
            <div class="absolute h-8 w-32 bg-gray-300 left-4 top-4
                        dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
            <div class="absolute h-8 w-42 bg-gray-300 bottom-0 right-0
                        dark:bg-gray-600 rounded-md mx-4 animate-pulse my-4"></div>
        </div>

        <div class=" relative flex flex-row items-center w-full 
                    aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                    bg-gray-100 border border-gray-300
                    dark:bg-gray-700 dark:border-gray-600 
                    rounded-lg py-4 px-6 animate-pulse">
            <div class="absolute h-8 w-32 bg-gray-300 left-4 top-4
                        dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
            <div class="absolute h-8 w-42 bg-gray-300 bottom-0 right-0
                        dark:bg-gray-600 rounded-md mx-4 animate-pulse my-4"></div>
        </div>

        <div class=" relative flex flex-row items-center w-full 
                    aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                    bg-gray-100 border border-gray-300
                    dark:bg-gray-700 dark:border-gray-600 
                    rounded-lg py-4 px-6 animate-pulse">
            <div class="absolute h-8 w-32 bg-gray-300 left-4 top-4
                        dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
            <div class="absolute h-8 w-42 bg-gray-300 bottom-0 right-0
                        dark:bg-gray-600 rounded-md mx-4 animate-pulse my-4"></div>
        </div>
    
    </div>
</div>


<!-- Main Content -->
<div id="project-content" class="hidden flex-col container mx-auto">
    <!-- Title and Description Section -->
    <div id="title-page" class="flex flex-col justify-center items-start space-y-4 py-6">
            <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300">
                Projects
            </h1>
    </div>

    <!-- Projects List Grid -->
    <div id="projects-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6
                                    transition-all duration-500">

        <!-- Project Card 1 -->
        <button onclick="showProject('project-1')" 
                class="group relative w-full aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                        rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 
                        text-left border border-gray-200 dark:border-slate-800">

            <!-- Background Image -->
            <img src="/assets/projects/Project-Thumbnail1-v2.png" alt="HelioCam" 
                    class="absolute inset-0 w-full h-full object-cover transition-transform 
                    duration-700 group-hover:scale-100">

            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 via-blue-900/10 
            to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Category Badge (Blue for Software) -->
            <div class="absolute top-4 left-4 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] 
                        sm:text-xs font-bold tracking-wider uppercase bg-blue-600/80 text-blue-50 border 
                        border-white/20 z-10">
                Software
            </div>

            <!-- Project Details -->
            <div class="absolute bottom-0 right-0 w-auto p-5 md:p-6 translate-y-2 group-hover:translate-y-0 
                        transition-transform duration-500 z-10">

                <div class="flex items-center text-gray-500 text-xs sm:text-sm">
                    <span class="font-medium text-blue-400">2024-2025</span>
                    <span class="mx-2">•</span>
                    <span class="truncate">MOBILE | WEB</span>
                </div>

            </div>

        </button>

        <!-- Project Card 2 -->
        <button onclick="showProject('project-2')" 
                class="group relative w-full aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                        rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 
                        text-left border border-gray-200 dark:border-slate-800">

            <!-- Background Image -->
            <img src="/assets/projects/Project-Thumbnail2.png" alt="Restaurant Banner" 
                    class="absolute inset-0 w-full h-full object-cover transition-transform 
                            duration-700 group-hover:scale-100">

            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 via-blue-900/10 
                        to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Category Badge (Blue for Software) -->
            <div class="absolute top-4 left-4 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] 
                        sm:text-xs font-bold tracking-wider uppercase bg-blue-600/80 text-blue-50 border 
                        border-white/20 z-10">
                Software
            </div>

            <!-- Project Details -->
            <div class="absolute bottom-0 right-0 w-auto p-5 md:p-6 translate-y-2 group-hover:translate-y-0 
                        transition-transform duration-500 z-10">

                <div class="flex items-center text-gray-500 text-xs sm:text-sm">
                    <span class="font-medium text-blue-400">2026</span>
                    <span class="mx-2">•</span>
                    <span class="truncate">MOBILE | WEB</span>
                </div>

            </div>

        </button>

        <!-- Project Card 3 -->
        <button onclick="showProject('project-3')" 
                class="group relative w-full aspect-[4/3] sm:aspect-square md:aspect-[4/3] 
                        rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 
                        text-left border border-gray-200 dark:border-slate-800">

            <!-- Background Image -->
            <img src="/assets/projects/Project-Thumbnail3.png" alt="Restaurant Banner" 
                    class="absolute inset-0 w-full h-full object-cover transition-transform 
                            duration-700 group-hover:scale-100">

            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 via-blue-900/10 
                        to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Category Badge (Blue for Software) -->
            <div class="absolute top-4 left-4 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] 
                        sm:text-xs font-bold tracking-wider uppercase bg-blue-600/80 text-blue-50 border 
                        border-white/20 z-10">
                Software
            </div>

            <!-- Project Details -->
            <div class="absolute bottom-0 right-0 w-auto p-5 md:p-6 translate-y-2 group-hover:translate-y-0 
                        transition-transform duration-500 z-10">

                <div class="flex items-center text-gray-500 text-xs sm:text-sm">
                    <span class="font-medium text-blue-400">2026</span>
                    <span class="mx-2">•</span>
                    <span class="truncate">MOBILE</span>
                </div>

            </div>

        </button>

    </div>

    <!-- Skeleton Loader Section -->
    <div id="skeleton-loader" class="hidden flex-col space-y-4">
        
        <div class="h-6 w-32 bg-gray-300 dark:bg-gray-700 rounded animate-pulse"></div>

        <div>
            <div class="flex flex-col space-y-6">
                <div class="h-8 w-1/3 bg-gray-300 dark:bg-gray-700 rounded-md animate-pulse"></div>
                
                <div class="w-full aspect-video bg-gray-300 dark:bg-gray-700 rounded-xl animate-pulse"></div>
                
                <div class="space-y-3">
                    <div class="h-4 w-full bg-gray-300 dark:bg-gray-700 rounded animate-pulse"></div>
                    <div class="h-4 w-5/6 bg-gray-300 dark:bg-gray-700 rounded animate-pulse"></div>
                    <div class="h-4 w-4/6 bg-gray-300 dark:bg-gray-700 rounded animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Details Viewing Section -->
    <div id="project-details" class="hidden flex-col space-y-4">

        <button onclick="hideProject()" 
                class="text-gray-500 hover:text-blue-700 py-4
                flex items-center w-fit transition-colors group">
            <svg class="size-5 mr-2 transform group-hover:-translate-x-1 transition-transform" 
                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            Back
        </button>

        <div id="project-1" class="dynamic-project hidden">
            <?php include __DIR__ . '/../projects/project-1.php'; ?>
        </div>

        <div id="project-2" class="dynamic-project hidden">
            <?php include __DIR__ . '/../projects/project-2.php'; ?>
        </div>

        <div id="project-3" class="dynamic-project hidden">
            <?php include __DIR__ . '/../projects/project-3.php'; ?>
        </div>

    </div>

</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", () => {

        const projectsList = document.getElementById('projects-list');
        const projectDetailsView = document.getElementById('project-details');
        const skeletonLoader = document.getElementById('skeleton-loader');
        const skeletonLoader1 = document.getElementById('skeleton-loader-1');
        const titlePage = document.getElementById('title-page');
        const projectContent = document.getElementById('project-content')

        window.showProject = function(projectId) {
            // 1. Hide the grid of folders
            projectsList.classList.add('hidden');
            projectsList.classList.remove('flex');
            titlePage.classList.add('hidden');
            titlePage.classList.remove('flex');

            // 2. Hide ALL project files first (Reset step)
            document.querySelectorAll('.dynamic-project').forEach(project => {
                project.classList.add('hidden');
            });

            // 3. Show the breathing skeleton loader
            skeletonLoader.classList.remove('hidden');
            skeletonLoader.classList.add('flex');

            // 3. Simulate a loading time (e.g., fetching from database)
            // We use setTimeout to force a brief 800-millisecond delay so the user actually sees the cool animation!
            setTimeout(() => {
                // Hide the skeleton
                skeletonLoader.classList.add('hidden');
                skeletonLoader.classList.remove('flex');

                // Reveal the actual details wrapper
                projectDetailsView.classList.remove('hidden');
                projectDetailsView.classList.add('flex');

                // Reveal the SPECIFIC project that was clicked!
                const targetProject = document.getElementById(projectId);
                if(targetProject) {
                    targetProject.classList.remove('hidden');
                }
            }, 800); // 800ms delay. You can adjust this!
        }

        window.hideProject = function() {
            // Hide the details wrapper
            projectDetailsView.classList.add('hidden');
            projectDetailsView.classList.remove('flex');

            // Reveal the grid of folders immediately (no loading needed to go back)
            projectsList.classList.remove('hidden');
            projectsList.classList.add('flex');
            titlePage.classList.remove('hidden');
            titlePage.classList.add('flex');
        }

        setTimeout(() => {

        skeletonLoader1.classList.add('hidden');
        skeletonLoader1.classList.remove('flex');

        projectContent.classList.remove('hidden');
        projectContent.classList.add('flex');

        }, 800);


    });

</script>