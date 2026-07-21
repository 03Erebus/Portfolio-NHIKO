

        <button onclick="showProject('<?= htmlspecialchars($id); ?>')" 
                class="group relative w-full aspect-[4/3] sm:aspect-square md:aspect-[4/3] hover-breathe
                        rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 
                        text-left border border-gray-200 dark:border-slate-800">

            <!-- Background Image -->
            <img src="/assets/projects/<?= htmlspecialchars($thumbnail); ?>" alt="<?= htmlspecialchars($title); ?>" 
                    class="absolute inset-0 w-full h-full object-cover transition-transform 
                    duration-700 group-hover:scale-100">

            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 via-blue-900/10 
            to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Category Badge (Blue for Software) -->
            <div class="absolute top-4 left-4 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] 
                        sm:text-xs font-bold tracking-wider uppercase bg-blue-600/80 text-blue-50 border 
                        border-white/20 z-1">
                <?= htmlspecialchars($category); ?>
            </div>

            <!-- Project Details -->
            <div class="absolute bottom-0 right-0 w-auto p-5 md:p-6 translate-y-2 group-hover:translate-y-0 
                        transition-transform duration-500 z-10">

                <div class="flex items-center text-gray-500 text-xs sm:text-sm">
                    <span class="font-medium text-blue-400"><?= htmlspecialchars($year); ?></span>
                    <span class="mx-2">•</span>
                    <span class="truncate"><?= htmlspecialchars($platforms); ?></span>
                </div>

            </div>

        </button>