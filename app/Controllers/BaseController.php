<?php
namespace App\Controllers;

class BaseController 
{
    protected string $layout = 'layout'; 

    public function renderView(string $view, array $data = []) 
    {
        // 1. Unpack the variables (Makes $title and $artworks work!)
        extract($data);
        
        $viewPath = __DIR__ . "/../Views/pages/" . $view . ".php";

        // 2. Try to trap the requested page
        if (file_exists($viewPath)) {
            
            ob_start();
            require $viewPath; 
            $content = ob_get_clean(); 
            
        } else {
            
            // 3. THE 404 LOGIC
            // Set the official "Not Found" network status
            http_response_code(404);
            
            ob_start();
            $errorFile = __DIR__ . "/../Views/errors/404.php";
            
            if (file_exists($errorFile)) {
                require $errorFile; // Load your custom 404.php file
            } else {
                // Fallback just in case you delete the 404.php file by accident
                echo "<h1>404 - Page Not Found</h1><p>We couldn't find the page you were looking for.</p>";
            }
            
            $content = ob_get_clean();
        }

        // 4. Load the master layout
        $layoutPath = __DIR__ . "/../Views/" . $this->layout . ".php";
        
        if (file_exists($layoutPath)) {
            require $layoutPath; 
        } else {
            echo "Error: Layout missing.";
        }
    }
}