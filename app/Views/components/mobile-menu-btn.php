    <!-- Hamburger Button -->
    <button id="mobile-menu-btn"
        class="flex md:hidden btn-round"
        aria-label="Toggle Mobile Menu">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5.5 inline-block">
            <use href="/assets/icons/24/outline/bars-3.svg"></use>
        </svg>
    </button>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu"
        class="hidden absolute top-full right-0 w-1/2 z-50 rounded-xl
            bg-gray-100 dark:bg-gray-900 border border-gray-200
            dark:border-gray-800 shadow-lg">
        <div class="flex flex-col p-4 space-y-4">
            <a href="/" 
                class="nav-link font-medium text-slate-500 hover:text-slate-900 
                        dark:hover:text-slate-100 transition-colors">
                Home
            </a>
            <a href="/gallery" 
                class="nav-link font-medium text-slate-500 hover:text-slate-900 
                        dark:hover:text-slate-100 transition-colors">
                Artworks
            </a>
            <a href="/software" 
                class="nav-link font-medium text-slate-500 hover:text-slate-900 
                    dark:hover:text-slate-100 transition-colors">
                Projects
            </a>
        </div>
    </div>
