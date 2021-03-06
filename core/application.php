<?php 

namespace app;

class application 

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
        echo $this->router->resolve();
    }
}