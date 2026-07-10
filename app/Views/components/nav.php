<nav class="text-gray-500 flex flex-col max-w-screen px-12 pt-6 z-10
                 dark:text-gray-200 transition-colors duration-300">
    <div class= "relative flex flex-wrap items-center justify-between px-6 py-2 shadow-md rounded-full
                border border-gray-300 dark:border-gray-600">
        
        <!-- Logo and Title -->
        <div class="flex items-center space-x-4">

            <a href="/" id="secret-logo" style="cursor: pointer;"
                class="text-lg font-bold font-baybayin
                        hover:text-blue-500 transition-colors duration-300
                        dark:hover:text-blue-500">
                NHIKS
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4 text-md font-semibold items-center">   

                <!-- Home Link -->
                <a href="/" class="pb-1 border-b-2 border-transparent transition-colors duration-300
                        nav-link py-1 px-3 hover:text-blue-500 
                        hover:bg-gray-100 hover:rounded-md
                        dark:hover:bg-gray-700 dark:hover:text-blue-500">
                    Home
                </a>

                <!-- Artworks Link -->
                <a href="/gallery" class="pb-1 border-b-2 border-transparent transition-colors duration-300
                                nav-link py-1 px-3 hover:text-blue-500 
                                hover:bg-gray-100 hover:rounded-md
                                dark:hover:bg-gray-700 dark:hover:text-blue-500">
                    Artworks
                </a>

                <!-- Development Link -->
                <a href="/software" class="pb-1 border-b-2 border-transparent transition-colors duration-300
                                nav-link py-1 px-3 hover:text-blue-500 
                                hover:bg-gray-100 hover:rounded-md
                                dark:hover:bg-gray-700 dark:hover:text-blue-500">
                    Projects
                </a>
               
        </div>

        <!-- Other buttons -->
        <div class="flex flex-row items-center space-x-2">

            <!-- Email Dropdown -->
            <?php $email = 'nhiko.bragais@gmail.com'; ?>
            <?php include __DIR__ . '/email-dropdown.php'; ?>

            <!-- Theme Toggle -->
            <?php include __DIR__ . '/theme-toggle.php'; ?>

        </div>

        <!-- Mobile menu -->
        <?php include __DIR__ . '/mobile-menu-btn.php'; ?>

    
    </div>
</nav>

<!-- Animation and script for the theme toggle -->
<script>
   document.addEventListener('DOMContentLoaded', () => {

        // ==========================================
        // 1. ACTIVE NAVIGATION INDICATOR
        // ==========================================
        // Get the current URL path (e.g., '/gallery')
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            // Check if the link's href matches the current URL
            if (link.getAttribute('href') === currentPath || (currentPath === '' && link.getAttribute('href') === '/')) {
                // Apply Tailwind classes for the active state (Underline + Color)
                link.classList.add('border-blue-500', 'text-blue-500', 'dark:text-blue-500', 'dark:border-blue-500');
                // Remove the default unfocused styling
                link.classList.remove('border-transparent', 'text-gray-100');
            }
        });

        // ==========================================
        // 2. DARK MODE TOGGLE LOGIC
        // ==========================================
        const themeToggleBtn = document.getElementById('theme-toggle');
        const iconMoon = document.getElementById('icon-moon');
        const iconSun = document.getElementById('icon-sun');
        const htmlElement = document.documentElement; // Targets the <html> tag

        // Function to swap the Moon and Sun icons
        function updateThemeIcons(isDark) {
            if (isDark) {
                iconMoon.classList.add('hidden');
                iconMoon.classList.remove('inline-block');
                iconSun.classList.remove('hidden');
                iconSun.classList.add('inline-block');
            } else {
                iconSun.classList.add('hidden');
                iconSun.classList.remove('inline-block');
                iconMoon.classList.remove('hidden');
                iconMoon.classList.add('inline-block');
            }
        }

        // Check if they previously enabled dark mode in a past visit
        if (localStorage.getItem('theme') === 'dark') {
            htmlElement.classList.add('dark');
            updateThemeIcons(true);
        }

        // Listen for the button click
        themeToggleBtn.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');
            const isDarkNow = htmlElement.classList.contains('dark');
            
            // Save their preference to their browser storage
            localStorage.setItem('theme', isDarkNow ? 'dark' : 'light');
            updateThemeIcons(isDarkNow);
        });



        // ==========================================
        // 3. SECRET VAULT AUTHENTICATION
        // ==========================================
        let clickCount = 0;
        let clickTimer;
        const secretLogo = document.getElementById('secret-logo');

        if (secretLogo) {
            secretLogo.addEventListener('click', function(e) {
                e.preventDefault(); // Stop the link from redirecting immediately
                clickCount++;

                // Reset the count if they stop clicking for 400ms
                clearTimeout(clickTimer);
                clickTimer = setTimeout(() => { 
                    
                    // If they only clicked once, treat it like a normal Home button
                    if (clickCount === 1) {
                        window.location.href = '/';
                    }
                    clickCount = 0; 
                    
                }, 400);

                // If they hit the magic number 5, teleport to the Vault!
                if (clickCount === 5) {
                    clickCount = 0;
                    window.location.href = '/nhiko-secure-vault'; 
                }
            });
        }


        // ==========================================
        // 4. MOBILE MENU TOGGLE LOGIC
        // ==========================================
        
        // ✅ Move this INSIDE DOMContentLoaded
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }


        // ==========================================
        // 5. EMAIL DROPDOWN
        // ==========================================
        const emailBtn      = document.getElementById('email-btn');
        const emailDropdown = document.getElementById('email-dropdown');
        const copyEmailBtn  = document.getElementById('copy-email-btn');
        const copyLabel     = document.getElementById('copy-label');

        emailBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            emailDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!emailBtn.contains(e.target) && !emailDropdown.contains(e.target)) {
                emailDropdown.classList.add('hidden');
            }
        });

        copyEmailBtn.addEventListener('click', () => {
            navigator.clipboard.writeText('<?= $email ?>').then(() => {
                copyLabel.textContent = 'Copied!';
                copyLabel.classList.add('text-green-500');
                setTimeout(() => {
                    copyLabel.textContent = 'Click to copy';
                    copyLabel.classList.remove('text-green-500');
                }, 2000);
            });
        });

    });

</script>