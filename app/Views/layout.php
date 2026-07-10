
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
        document.addEventListener('keydown', e => {
            const key = e.key.toLowerCase();
            const isModifier = e.ctrlKey || e.metaKey || e.altKey;

            if (isModifier && (key === 's' || key === 'u' || key === 'p' || key === 'a' || key === 'c' || key === 'x')) {
                e.preventDefault();
                showSecurityNotice();
            }
        });

        document.addEventListener('contextmenu', e => {
            e.preventDefault();
            showSecurityNotice();
        });

        function showSecurityNotice() {
            console.warn('This content is protected. Downloading or copying is not allowed.');
        }

    </script>
</body>
</html>