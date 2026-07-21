
<?php
// Determine explicit grid span classes based on the size type
$spanClasses = match($size ?? 'square') {
    'portrait'  => 'col-span-1 row-span-2',
    'landscape' => 'col-span-2 row-span-1',
    default     => 'col-span-1 row-span-1',
};
?>


<div class="group relative hover:z-10 hover-breathe border border-gray-200 dark:border-gray-700 
                    w-full overflow-hidden aspect-auto shadow-lg <?= $spanClasses; ?>">
            
            <img src="/assets/arts/<?=  htmlspecialchars($image); ?>" 
                    alt="<?=  htmlspecialchars($title); ?>" 
                    class="w-full h-full transition-transform duration-500 group-hover:scale-110">

            <div class="absolute w-full h-full inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 
                        to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

            <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 
                        translate-y-4 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                <h3 class="text-xl font-semibold text-white mb-1 tracking-tight">
                    <?=  htmlspecialchars($title); ?>
                </h3>
                <p class="text-gray-400 text-md">
                    <?=  htmlspecialchars($category); ?>
                </p>
                <p class="text-gray-400 text-sm">
                    <?=  htmlspecialchars($year); ?>
                </p>
            </div>

</div>