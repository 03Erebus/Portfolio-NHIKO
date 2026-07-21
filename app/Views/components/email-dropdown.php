<!-- Email Dropdown Component -->
<div class="relative mx-auto">

    <!-- Trigger Button -->
    <button id="email-btn"
        class="btn-round"
        aria-label="Contact Me">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5.5 inline-block">
            <use href="/assets/icons/24/outline/envelope.svg"></use>
        </svg>
    </button>

    <!-- Dropdown -->
    <div id="email-dropdown"
        class="hidden absolute right-0 top-full mt-2 w-auto z-50
               bg-gray-100 dark:bg-gray-900 border 
               border-gray-200 dark:border-gray-800
               rounded-xl shadow-lg overflow-hidden">

        <div class="flex flex-col w-full max-w-xs md:max-w-md p-2">
            <!-- Header -->
            <div class="px-4 py-3 border-b border-gray-100 dark:border-gray-700 w-full">
                <p class="text-xs text-gray-400 dark:text-gray-500">Contact me via</p>
            </div>

            <!-- Gmail -->
            <a href="https://mail.google.com/mail/?view=cm&to=<?= $email ?>"
                target="_blank"
                class="flex items-center space-x-3 px-4 py-3
                    text-gray-700 dark:text-gray-200
                    hover:bg-gray-100 dark:hover:bg-gray-700
                    transition-colors duration-200 w-full">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                    stroke="currentColor" class="size-6 text-blue-500">
                    <use href="/assets/icons/brands/google.svg"></use>
                </svg>
                <div class="w-full">
                    <p class="text-xs md:text-sm font-semibold">Gmail</p>
                    <p class="text-[10px] md:text-xs text-gray-400 truncate"><?= $email ?></p>
                </div>
            </a>

            <!-- Default mail client -->
            <a href="mailto:<?= $email ?>"
                class="flex items-center space-x-3 px-4 py-3
                    text-gray-700 dark:text-gray-200
                    hover:bg-gray-100 dark:hover:bg-gray-700
                    transition-colors duration-200 w-full">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                    stroke="currentColor" class="size-6 text-blue-500">
                    <use href="/assets/icons/24/outline/envelope.svg"></use>
                </svg>
                <div class="w-full">
                    <p class="text-xs md:text-sm font-semibold">Mail App</p>
                    <p class="text-[10px] md:text-xs text-gray-400">Open default mail client</p>
                </div>
            </a>

            <!-- Copy email -->
            <button id="copy-email-btn"
                class="flex items-center space-x-3 px-4 py-3
                    text-gray-700 dark:text-gray-200
                    hover:bg-gray-100 dark:hover:bg-gray-700
                    transition-colors duration-200 w-full">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                    stroke="currentColor" class="size-6 text-blue-500">
                    <use href="/assets/icons/24/outline/clipboard.svg"></use>
                </svg>
                <div class="w-full text-left">
                    <p class="text-xs md:text-sm font-semibold">Taguig, Philippines</p>
                    <p id="copy-label" class="text-[10px] md:text-xs text-gray-400">Click to copy</p>
                </div>
            </button>
        </div>
    </div>
</div>