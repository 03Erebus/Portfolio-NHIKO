<!-- Project 1 -->
<div id="project-1-content" class="container flex grow flex-col">

    <?php
        // 1. ISOLATE THE MOCKUPS: Find only the mockups for HelioCam
        $projectMockups = [];
        foreach ($projects as $p) {
            if ($p['id'] === 'project-1') {
                // Grab the nested mockups array we defined earlier
                $projectMockups = $p['mockups'] ?? [];
                break;
            }
        }
    ?>

    <!-- Short Details -->
    <div class="flex flex-col items-start justify-between divide-y divide-gray-200 dark:divide-gray-800">

        <!-- Project Title -->
        <div class="flex flex-row items-center max-w-6xl w-full mx-auto">

            <div class="p-2 lg:p-4 w-auto">
                <img alt="HelioCam Logo" src="/assets/projects/HC-Nobg.png"
                        class="size-14 md:size-18 lg:size-20 rounded-full shadow-lg resize">
            </div>

            <div class="p-2 md:p-4 lg:p-6 w-auto">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-4xl lg:text-6xl drop-shadow-lg">
                    Helio<span class="text-orange-500">Cam</span>
                </h1>
            </div>

        </div>

        <!-- Description -->
        <div class="flex flex-row items-start max-w-6xl w-full mx-auto">

            <div class="p-2 md:p-4 lg:p-6 w-2xl">
                <p class="text-md sm:text-lg md:text-xl lg:text-2xl text-gray-800 dark:text-gray-200">
                    Designed the UX/UI for HelioCam, an app that turns an old smartphone into a home security camera — 
                    giving people an easy way to check in on their loved ones or secure their property remotely.
                </p>
            </div>

        </div>

        <!-- Quick Details -->
        <div class="flex flex-row items-start justify-between
                    mx-auto max-w-6xl w-full divide-x divide-gray-200 dark:divide-gray-800">
            <!-- Status -->
            <div class="px-2 sm:px-4 py-4 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1">
                    Status
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    Done
                </p>
            </div>
            <!-- Year -->
            <div class="px-2 sm:px-4 py-4 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1">
                    Year
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    2024-2025
                </p>
            </div>
            <!-- Role -->
            <div class="px-2 sm:px-4 py-4 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1">
                    Role
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    UI/UX Designer | Frontend Developer
                </p>
            </div>
            <!-- Platform -->
            <div class="px-2 sm:px-4 py-4 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1">
                    Platform
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    Web, Android
                </p>
            </div>
        </div>

    </div>

    <!-- Mockups -->
    <div id="responsiveness-section-1" 
            class="relative w-full max-w-6xl mx-auto py-12 overflow-hidden 
            flex flex-col items-center justify-center border-y border-gray-200 dark:border-gray-800">


        <div class="relative flex flex-wrap items-center w-[60%] md:w-[70%] h-[200px] md:h-[400px]">

            <div id="slide-laptop-1" 
                    class="absolute right-2 md:right-12 bottom-0 w-[80%] md:w-[70%]
                        translate-x-[100vw] opacity-0 transition-all duration-1000 ease-out z-10">
                <img src="/assets/projects/laptop-mockup-Helio.png" 
                        alt="Desktop View" class="w-full h-full inset-0 object-contain drop-shadow-2xl">
            </div>

            <div id="slide-mobile-1" 
                    class="absolute left-4 md:left-24 bottom-0 w-[25%] md:w-[20%]
                    -translate-x-[100vw] opacity-0 transition-all duration-1000 ease-out delay-200 z-20">
                <img src="/assets/projects/mobile-mockup-helio.png" 
                        alt="Mobile View" class="w-full h-full inset-0 object-contain drop-shadow-2xl">
            </div>

        </div>

    </div>

    <!-- Project Details -->
    <div class="flex flex-col items-start justify-between divide-y divide-gray-200 dark:divide-gray-800">


        <!-- Project Context -->
        <div class="flex flex-col items-start max-w-6xl w-full mx-auto">

            <div class="p-2 md:p-4 lg:p-6 w-full space-y-2.5">
                <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase">
                    Project Context
                </h1>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="HelioCam turns any smartphone into a live surveillance camera, letting users view feeds, 
                    record footage, and get real-time alerts from a mobile or web app — no expensive equipment needed, 
                    and accessible from anywhere.">
                </p>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="Powered by AI, HelioCam automatically tells routine movement apart from genuine threats, 
                    triggering alerts and a 30-second replay only when something suspicious happens. 
                    By repurposing old phones instead of buying new cameras, it offers homeowners, small businesses, 
                    and families an affordable, sustainable security solution.">
                </p>
            </div>

        </div>

        <!-- The Challenge | The Solutions -->
        <div class="flex flex-row items-start justify-between py-4
                    mx-auto max-w-6xl w-full divide-x divide-gray-200 dark:divide-gray-800">

            <!-- The Challenge -->
            <div class="p-2 md:p-4 lg:p-6 w-4xl space-y-3">
                <h1 class="scroll-typewriter text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase"
                    data-text="The Challenge">
                </h1>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="HelioCam was developed by our team, Summersoft, alongside our academic workload — 
                    including major and minor subjects and other requirements. This left limited time and budget for the project, 
                    making it difficult to conduct extensive user research beyond an initial pre-survey.">
                </p>

            </div>

            <!-- The Solution -->
            <div class="p-2 md:p-4 lg:p-6 w-4xl space-y-3">
                <h1 class="scroll-typewriter text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase"
                    data-text="The Solution">
                </h1>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="To work within these constraints, I combined our pre-survey data with benchmarking of existing surveillance apps, 
                    using both to guide design decisions efficiently despite the limited time.">
                </p>

            </div>


        </div>

    </div>

    <!-- Carousel -->
    <div class="relative w-full max-w-6xl mx-auto group">

        <div class="overflow-hidden w-full px-6 py-4 border shrink
                    border-gray-200 dark:border-gray-800 rounded-2xl">

            <div class="absolute top-0 z-50 right-0 p-6 pointer-events-none">
                <img alt="HelioCam Logo" src="/assets/projects/HC-Nobg.png"
                        class="size-10 md:size-16 lg:size-20 rounded-full shadow-lg resize">
            </div>

            
            <div id="carousel-track-1" class="flex rotate-0 hover:-rotate-6 hover:scale-95
                    transition-transform duration-500 ease-in-out">
                
                <?php 
                
                
                foreach ($projectMockups as $mockup){ ?>
                    <div class="w-full shrink-0 flex justify-center items-center px-4">
                        
                        <?php
                        // Set image path and load correct component based on nested data
                        $imagePath = '/assets/projects/' . $mockup['image'];
                        $title = $mockup['title'] ?? '';
                        $angle = $mockup['angle'] ?? '';
                        $type = $mockup['type'] ?? '';

                        if ($type === 'desktop') {
                            include __DIR__ . '/../components/mockup-desktop.php';
                        } elseif ($mockup['type'] === 'mobile') {
                            include __DIR__ . '/../components/mockup-mobile.php';
                        }
                        ?>

                    </div>
                <?php } ?>

            </div>

            <div class="absolute bottom-10 z-20 p-6 pointer-events-none">
                <h1 class="text-xl font-bold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-2xl lg:text-4xl drop-shadow-lg">
                    Helio<span class="text-orange-500">Cam</span>
                </h1>
            </div>

        </div>
        
        <!-- Side buttons / Next & Previous -->
        <button id="btn-prev-1" 
                class="absolute left-0 top-1/2 -translate-y-1/2 p-3 mx-4
                rounded-full bg-white/80 dark:bg-slate-800/80 shadow-xl 
                border border-slate-200 dark:border-slate-700 text-gray-400 dark:text-white 
                opacity-100 group-hover:opacity-100 transition-all hover:scale-110 z-10
                lg:opacity-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="btn-next-1" 
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

    <!-- Process Details -->
    <div class="flex flex-col items-start justify-between divide-y divide-gray-200 dark:divide-gray-800
            space-y-2">

        <!-- My Approach -->
        <div class="w-full max-w-6xl flex flex-row mx-auto items-center">

            <!-- The Left -->
            <div class="p-2 md:p-4 lg:p-6 w-full space-y-2.5">
                    <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                                md:text-xl lg:text-2xl drop-shadow-lg uppercase">
                        My Approach
                    </h1>

                    <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                        data-text="I based design decisions on our pre-survey findings alongside patterns from existing surveillance apps, 
                        while following current UI/UX trends and the team's branding and theme to keep the design consistent and on-brand.">
                    </p>

            </div>
        
            <!-- Screenshot Right -->
            <div class="w-full max-w-2xl">
                <img alt="Feature" src="/assets/projects/mockups-mb-helio.png"
                        class="w-full h-auto">
            </div>
 
        </div>

        <!-- My Role & Process -->
        <div class="flex flex-col items-start max-w-6xl w-full mx-auto">

            <div class="p-2 md:p-4 lg:p-6 w-full space-y-2.5">
                <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase">
                    My Role & Process
                </h1>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="As Lead UI/UX Designer and Frontend Programmer, I handled both design and development — 
                    moving from research to wireframes to high-fidelity design, then directly into frontend coding, page by page.">
                </p>

            </div>

        </div>

        <!-- Screenshot of Wireframes -->
        <div class="w-full h-[300px] md:h-[600px] max-w-6xl bg-contain bg-center bg-no-repeat
                    mx-auto py-4 bg-[url('/assets/projects/web-mockups-HC.png')]">
        </div>

        <!-- Outcome -->
        <div class="flex flex-col items-start max-w-6xl w-full mx-auto">

            <div class="p-2 md:p-4 lg:p-6 w-full space-y-2.5">
                <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase">
                    Outcome
                </h1>

                <p class="scroll-typewriter text-[12px] sm:text-sm md:text-md lg:text-lg text-gray-600 dark:text-gray-200"
                    data-text="We successfully developed both the web and mobile app, passing the project requirement. 
                    Beyond the deliverable, it gave us hands-on experience with the full software development lifecycle as a team, 
                    and helped us understand each other's roles, strengths, and weaknesses along the way.">
                </p>

            </div>

        </div>

        <!-- Developer -->
        <div class="flex flex-row items-center justify-between max-w-6xl w-full mx-auto pt-12">

            <div class="px-0 sm:px-2 py-12 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1 uppercase">
                    developed by
                </p>
                <p class="text-sm sm:text-md md:text-lg lg:text-xl font-semibold text-blue-800">
                    Summersoft
                </p>
            </div>

            <div class="p-4">
                <img src="/assets/projects/summersoft.png" 
                            alt="Summersoft Logo" 
                            class="size-18 md:size-24 lg:size-32 rounded-full shadow-lg resize">
            </div>

        </div>

    </div>

</div>

    <!-- Contact Details -->
    <div class="flex flex-col items-start justify-between divide-y divide-gray-200 dark:divide-gray-800">

        <!-- Title -->
        <div class="flex flex-row pt-12 items-start w-full mx-auto">

            <div class="p-0 md:p-2 lg:p-4 w-2xl">
                <h1 class="text-lg font-bold text-gray-800 dark:text-gray-200 transition-colors duration-300
                            md:text-xl lg:text-2xl drop-shadow-lg uppercase">
                    Get in Touch
                </h1>
            </div>

        </div>

        <!-- Contact Details -->
        <div class="flex flex-row items-start justify-evenly
                    mx-auto w-full divide-x divide-gray-200 dark:divide-gray-800">
            <!-- Email -->
            <div class="px-0 sm:px-2 py-12 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1 uppercase">
                    Email
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    nhiko.bragais@gmail.com
                </p>
            </div>
            <!-- Mobile -->
            <div class="px-0 sm:px-2 py-12 flex-1">
                <p class="text-[10px] sm:text-xs md:text-sm text-gray-500 mb-1 uppercase">
                    Mobile
                </p>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-gray-800 truncate dark:text-gray-200">
                    +63 966-627-1294
                </p>
            </div>
        </div>

    </div>

<!-- Java Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // ==========================================
        // 1. CAROUSEL LOGIC
        // ==========================================
        const track = document.getElementById('carousel-track-1');
        const btnPrev = document.getElementById('btn-prev-1');
        const btnNext = document.getElementById('btn-next-1');
        
        if (track && btnPrev && btnNext) {
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
        }

        // ==========================================
        // 2. SCROLL-TRIGGERED PARAGRAPH TYPEWRITER
        // ==========================================
        const typewriters = document.querySelectorAll('.scroll-typewriter');

        if (typewriters.length > 0) {
            const typeObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        
                        // Safety check 1: Don't re-type if it's already finished
                        if (target.getAttribute('data-typed') === 'true') return;

                        const fullText = target.getAttribute('data-text');
                        
                        // SAFETY CHECK 2 (THE FIX): If there is no data-text attribute, stop here!
                        if (!fullText) return; 

                        let i = 0;
                        target.innerHTML = ''; 
                        
                        // Mark it as typed immediately so we don't trigger it twice
                        target.setAttribute('data-typed', 'true'); 

                        const typeInterval = setInterval(() => {
                            if (i < fullText.length) {
                                target.innerHTML += fullText.charAt(i);
                                i++;
                            } else {
                                clearInterval(typeInterval);
                            }
                        }, 10); // 10ms typing speed
                        
                        // Stop observing this paragraph once it types
                        observer.unobserve(target);
                    }
                });
            }, {
                threshold: 0.2 // Triggers when 20% of the paragraph enters the screen
            });

            typewriters.forEach(tw => {
                typeObserver.observe(tw);
            });
        }

        // ==========================================
        // 3. RESPONSIVENESS SHOWCASE (MOCKUP SLIDE ONLY)
        // ==========================================
        const showcaseSection = document.getElementById('responsiveness-section-1');
        const laptop = document.getElementById('slide-laptop-1');
        const mobile = document.getElementById('slide-mobile-1');

        if (showcaseSection && laptop && mobile) {
            const showcaseObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Slide Mockups IN
                        laptop.classList.remove('translate-x-[100vw]', 'opacity-0');
                        laptop.classList.add('translate-x-0', 'opacity-100');

                        mobile.classList.remove('-translate-x-[100vw]', 'opacity-0');
                        mobile.classList.add('translate-x-0', 'opacity-100');
                    } else {
                        // Slide Mockups OUT
                        laptop.classList.remove('translate-x-0', 'opacity-100');
                        laptop.classList.add('translate-x-[100vw]', 'opacity-0');

                        mobile.classList.remove('translate-x-0', 'opacity-100');
                        mobile.classList.add('-translate-x-[100vw]', 'opacity-0');
                    }
                });
            }, {
                threshold: 0.3 
            });

            showcaseObserver.observe(showcaseSection);
        }
    });
</script>