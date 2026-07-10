<?php

namespace Cores;

class Application 
{
    public Router $router;
    public Request $request;
    public function __construct() 
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() 
    {
        // This method tells the router to resolve the current URL
        $this->router->resolve();
    }
}


