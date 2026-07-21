
<!DOCTYPE html>
<html lang="en"
        class="scroll-smooth w-auto h-auto overflow-x-hidden overflow-y-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | NHIKO BRAGAIS</title>
    <link rel="stylesheet" href="/assets/css/output.css">
    <link rel="icon" type="image/png" href="/assets/images/fav-icon-2.png">
</head>
<body oncontextmenu="return false;"
        class="bg-gray-50 text-gray-700 flex flex-col 
                min-h-screen w-auto mx-auto
                dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300"> 

    <!-- For Live tags background -->
    <div id="tag-field" class="fixed inset-0 -z-1 overflow-hidden pointer-events-none"></div>

    <!-- Navigation Bar -->
    <?php include __DIR__ . '/components/nav.php'; ?>

    <!-- Main Content Page -->
    <main id="main-content" class="grow flex flex-wrap w-auto p-4">
        <?php echo $content ?? '<h2>Error: No content loaded.</h2>'; ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // Shared by both listeners below — must live outside them
        function showSecurityNotice() {
            console.warn('This content is protected. Downloading or copying is not allowed.');
        }

        // For Disabling Key Commands
        document.addEventListener('keydown', e => {
            const key = e.key.toLowerCase();
            const isModifier = e.ctrlKey || e.metaKey || e.altKey;

            if (isModifier && (key === 's' || key === 'u' || key === 'p' || key === 'a' || key === 'c' || key === 'x')) {
                e.preventDefault();
                showSecurityNotice();
            }
        });

        // For warning
        document.addEventListener('contextmenu', e => {
            e.preventDefault();
            showSecurityNotice();
        });

        // Privacy blur/dim — activates when tab/app loses focus
        document.addEventListener('visibilitychange', () => {
            const blurClasses = ['blur-lg', 'transition-[filter]', 'duration-200'];

            if (document.hidden) {
                document.body.classList.add(...blurClasses);
            } else {
                document.body.classList.remove(...blurClasses);
            }
        });


        document.addEventListener('DOMContentLoaded', () => {

        const TAGS = ['<' + '?php', '->', '$data', 'echo', '</div>', 'class=', 'grid-cols-3', '->render()'];
        const field = document.getElementById('tag-field');
        if (!field) return;

        const W = () => window.innerWidth;
        const H = () => window.innerHeight;

        const sprites = TAGS.map(text => {
            const el = document.createElement('span');
            el.textContent = text;
            el.className = 'absolute top-0 left-0 font-mono text-sm font-medium ' +
                            'text-gray-500 dark:text-gray-300 ' +
                            'opacity-50 dark:opacity-40 whitespace-nowrap select-none will-change-transform';
            field.appendChild(el);

            return {
                el,
                x: Math.random() * W(),
                y: Math.random() * H(),
                dx: (Math.random() - 0.5) * 1.2 || 0.6,
                dy: (Math.random() - 0.5) * 1.2 || 0.6,
            };
        });

        function tick() {
            for (const s of sprites) {
                s.x += s.dx;
                s.y += s.dy;

                const w = s.el.offsetWidth;
                const h = s.el.offsetHeight;

                if (s.x <= 0 || s.x + w >= W()) s.dx *= -1;
                if (s.y <= 0 || s.y + h >= H()) s.dy *= -1;

                s.x = Math.max(0, Math.min(s.x, W() - w));
                s.y = Math.max(0, Math.min(s.y, H() - h));

                s.el.style.transform = `translate(${s.x}px, ${s.y}px)`;
            }
            requestAnimationFrame(tick);
        }

        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            requestAnimationFrame(tick);
        }
    });
</script>

</body>
</html>