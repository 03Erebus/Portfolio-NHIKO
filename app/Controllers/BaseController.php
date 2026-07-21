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
            http_response_code(404);
            
            $errorFile = __DIR__ . "/../Views/errors/404.php";
            
            if (file_exists($errorFile)) {
                // Directly require it and STOP execution so layout.php doesn't wrap it!
                require $errorFile;
                exit; 
            } else {
                echo "<h1>404 - Page Not Found</h1><p>The resource you requested is missing from the server.</p>";
                exit;
            }
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