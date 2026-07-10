<?php
namespace Cores;

class Router 
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request) 
    {
        $this->request = $request;
    }

    public function get($path, $callback) 
    {
        $this->routes['get'][$path] = $callback;
    }

    // For submitting forms!
    public function post($path, $callback) 
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() 
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            http_response_code(404);
            $errorFile = __DIR__ . "/app/Views/errors/404.php";
            exit;
        }

        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback, $this->request);
    }
}