<div class="container mx-auto flex grow flex-col justify-center w-full">
    <!-- Top Content -->
    <div class="flex flex-row items-center justify-evenly w-full max-h-screen-sm space-x-50 bg-gray-50 
                    dark:bg-gray-900 transition-colors duration-300 max-lg:flex-col">
        
            <!-- Left Content -->
            <div class="flex flex-col w-full mx-auto p-6 space-y-6 items-center">

                <!-- Home Section -->
                <section id="home" class="transition-all duration-500">
                    <h1 class="typewriter text-6xl font-bold text-gray-800 mb-4
                            dark:text-gray-200 ">
                        NHIKO BRAGAIS
                    </h1>
                    <div class="text-xl text-gray-600 dark:text-gray-400 ">
                        <p class="typewriter">I Am into Software Development.</p>
                    </div>
                    <div class="mt-6 flex space-x-4">
                        <button class="content-toggle-btn btn-ghost">
                            About Me
                        </button>
                    </div>
                </section>

                <!-- About Section -->
                <section id="about" class="hidden transition-all duration-500">
                    <!-- About Me Content -->
                    <div class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
                        <h2 class="typewriter text-3xl font-semibold text-gray-800 mb-2
                                dark:text-gray-200">
                            About Me
                        </h2>
                        <p class="typewriter text-xl text-gray-600 dark:text-gray-400">
                            I am a software developer specializing in crafting or coding frontend designs.
                            My portfolio showcases a variety of styles and techniques, reflecting my passion for user interface and experience.
                        </p>
                    </div>
                    <!-- Social Links -->
                    <div class="mt-10 bg-gray-50 dark:bg-gray-900 transition-colors duration-500">
                        <p class="typewriter text-xl font-semibold text-gray-800 mb-4
                                dark:text-gray-200 hover:transform-stroke  duration-150">
                            Connect with me on:
                        </p>
                        <div class="flex space-x-4">
                            <!-- GitHub Link -->
                            <a href="https://github.com/03Erebus"
                                    class="p-2 text-gray-700 hover:text-blue-500 transition-colors rounded-full hover:bg-gray-100
                                    dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-blue-500"
                                    aria-label="GitHub Profile">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 inline-block">
                                    <use href="/assets/icons/fontawesome/brands/github.svg"></use>
                                </svg>
                            </a>
                            <!-- LinkedIn Link -->
                            <a href="https://www.linkedin.com/in/nhiko-bragais-657b68330/"
                                    class="p-2 text-gray-700 hover:text-blue-500 transition-colors rounded-full hover:bg-gray-100
                                    dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-blue-500"
                                    aria-label="LinkedIn Profile">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 inline-block">
                                    <use href="/assets/icons/fontawesome/brands/linkedin-in.svg"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="mt-6 flex space-x-4">
                        
                        <!-- Go Back Button -->
                        <button class="content-toggle-btn btn-ghost">
                            Go Back
                        </button>

                        <!-- Download Resume Button -->
                        <a href="/assets/files/Nhiko_Bragais_Resume.pdf" download
                            class="btn-primary flex items-center">
                            Download Resume
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 inline-block ml-2">
                                <use href="/assets/icons/24/outline/document-arrow-down.svg"></use>
                            </svg>
                        </a>

                    </div>
                </section>
            </div>

            <!-- Right Content -->
            <div class="flex flex-col w-full items-center content-center mx-auto max-md:hidden p-6">
                
                <section id="home-right" class="flex transition-all duration-500 w-full justify-center">

                    <!-- Light Mode Logo (Visible by default, hidden in dark mode) -->
                    <img id="profile-img" src="/assets/images/My_New_Logo-black.png" alt="NHIKO Logo"
                        class="w-120 object-fill object-center resize-both
                            hover:scale-105 transition-transform duration-300 block dark:hidden">
                    <!-- Dark Mode Logo (Visible in dark mode, hidden by default) -->
                    <img id="profile-img" src="/assets/images/My_New_Logo-white.png" alt="NHIKO Logo"
                        class="w-120 object-cover object-center resize-both
                                hover:scale-105 transition-transform duration-300 hidden dark:block">
                </section>

                <!-- About Right Section -->
                <section id="about-right" class="hidden transition-all duration-500 w-full">
                    <img id="profile-img" src="/assets/images/image.png" alt="Hexagon"
                        class="w-120 object-cover object-center resize-both
                                hover:scale-105 transition-transform duration-300">

                </section>

            </div>

    </div>
</div>


<!-- JavaScript for toggling content -->
<script>
    const toggleBtns       = document.querySelectorAll('.content-toggle-btn');
    const homeSection      = document.getElementById('home');
    const aboutSection     = document.getElementById('about');
    const homeRightSection  = document.getElementById('home-right');
    const aboutRightSection = document.getElementById('about-right');

    let showingAbout = false;

    // ── Typewriter ──────────────────────────────────────
    function typeWriter(element, speed = 50, callback) {
        const text = element.dataset.text || element.textContent.trim();
        let i = 0;
        element.textContent = '';
        element.classList.add('typewriter');

        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else {
                element.classList.remove('typewriter');
                if (callback) callback();
            }
        }
        type();
    }

    // ── Image Reveal ────────────────────────────────────
    function revealImage(img) {
        if (!img) return;
        img.classList.remove('animate-draw-reveal');
        void img.offsetWidth; // force reflow
        img.classList.add('animate-draw-reveal');
    }

    // ── Animate Home ────────────────────────────────────
    function animateHome() {
        const title    = homeSection.querySelector('h1');
        const subtitle = homeSection.querySelector('p');
        const img      = homeRightSection.querySelector('img');

        if (title)    typeWriter(title, 60, () => {
        if (subtitle) typeWriter(subtitle, 30);
        });
        revealImage(img);
    }

    // ── Animate About ────────────────────────────────────
    function animateAbout() {
        const title    = aboutSection.querySelector('h2');
        const subtitle = aboutSection.querySelector('p');
        const img      = aboutRightSection.querySelector('img');

        if (title)    typeWriter(title, 60, () => {
        if (subtitle) typeWriter(subtitle, 20);
        });
        revealImage(img);
    }

    // ── Toggle ───────────────────────────────────────────
    toggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            showingAbout = !showingAbout;

            if (showingAbout) {
                homeSection.classList.add('hidden');
                aboutSection.classList.remove('hidden');
                homeRightSection.classList.add('hidden');
                aboutRightSection.classList.remove('hidden');
                aboutRightSection.classList.add('flex', 'justify-center', 'items-center');
                animateAbout(); // ← trigger about animations
            } else {
                aboutSection.classList.add('hidden');
                homeSection.classList.remove('hidden');
                aboutRightSection.classList.add('hidden');
                homeRightSection.classList.remove('hidden');
                animateHome(); // ← trigger home animations
            }
        });
    });

    // ── Run on first load ────────────────────────────────
    animateHome();
</script>