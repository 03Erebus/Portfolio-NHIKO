<!-- Loader -->
<div id="skeleton-loader-1" class="container flex flex-col space-y-4 mx-auto">
    <!-- Title and Description Section -->
    <div class="h-4 w-32 bg-gray-300 dark:bg-gray-700 rounded-md py-6 animate-pulse">
    </div>

    <div class="flex flex-col space-y-4">

        <div class="flex flex-row items-center w-full h-auto bg-gray-100 border border-gray-300
                    dark:bg-gray-700 dark:border-gray-600 rounded-lg py-4 px-6 animate-pulse">
            <div class="h-16 w-16 bg-gray-300 dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
            <div class="h-8 w-32 bg-gray-300 dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
        </div>

        <div class="flex flex-row items-center w-full h-auto bg-gray-100 border border-gray-300
                    dark:bg-gray-700 dark:border-gray-600 rounded-lg py-4 px-6 animate-pulse">
            <div class="h-16 w-16 bg-gray-300 dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
            <div class="h-8 w-32 bg-gray-300 dark:bg-gray-600 rounded-md m-2 animate-pulse"></div>
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
    <div id="projects-list" class="flex flex-col space-y-4">

        <!-- Project Card 1 -->
        <button onclick="showProject('project-1')" 
                class="flex items-center justify-between p-2 hover-breathe
                bg-white dark:bg-gray-800 border border-gray-200 
                dark:border-gray-700 rounded-xl hover:shadow-md transition-shadow w-full text-left">

            <!-- Left Content -->
            <div class="flex py-2 px-4 space-x-4 items-center">
                <svg fill="none" viewBox="0 0 24 24" 
                    stroke-width="1.5" stroke="currentColor" 
                    class="size-12 inline-block text-blue-800 dark:text-blue-200 transition-colors duration-300">
                    <use href="/assets/icons/fontawesome/regular/folder.svg"></use>
                </svg>
            
                <h2 class="text-2xl font-bold text-gray-800 
                            dark:text-gray-200 transition-colors duration-300">
                    Helio<span class="text-orange-500">Cam</span>
                </h2>
            </div>


            <!-- Right Content -->
            <div class="flex flex-row p-4 space-x-4 items-center">
                <h2 class="text-lg font-semibold text-gray-800 
                            dark:text-gray-200 transition-colors duration-300">
                    MOBILE | WEBSITE
                </h2>
                <h4 class="text-gray-600 dark:text-gray-400 transition-colors duration-300
                            italic mr-2">
                    2025
                </h4>
            </div>

        </button>

        <!-- Project Card 2 -->
        <button onclick="showProject('project-2')" 
                class="flex items-center justify-between p-2 hover-breathe
                bg-white dark:bg-gray-800 border border-gray-200 
                dark:border-gray-700 rounded-xl hover:shadow-md transition-shadow w-full text-left">

            <!-- Left Content -->
            <div class="flex py-2 px-4 space-x-4 items-center">
                <svg fill="none" viewBox="0 0 24 24" 
                    stroke-width="1.5" stroke="currentColor" 
                    class="size-12 inline-block text-blue-800 dark:text-blue-200 transition-colors duration-300">
                    <use href="/assets/icons/fontawesome/regular/folder.svg"></use>
                </svg>
            
                <h2 class="text-2xl font-bold bg-gradient-to-r from-green-500 to-blue-500 
                            bg-clip-text text-transparent transition-colors duration-300">
                        ITRF
                </h2>
            </div>


            <!-- Right Content -->
            <div class="flex p-4 space-x-4 items-center">

                <h2 class="text-lg font-semibold text-gray-800 
                            dark:text-gray-200 transition-colors duration-300">
                    MOBILE | WEBSITE
                </h2>

                <h4 class="text-gray-600 dark:text-gray-400 transition-colors duration-300
                            italic mr-2">
                    2026
                </h4>
            </div>

        </button>

    </div>

    <!-- Skeleton Loader Section -->
    <div id="skeleton-loader" class="hidden flex-col space-y-4">
        
        <div class="h-6 w-32 bg-gray-300 dark:bg-gray-700 rounded animate-pulse"></div>

        <div class="bg-white dark:bg-slate-900 rounded-2xl border border-gray-100 dark:border-slate-800 p-6 shadow-sm">
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