<?php 

namespace app;

class Router {
    protected $routes = [];
    public function __construct(\app\Request $request) 
    {
        $this->request = $request;
    }
    public function get($path,$responce) {
        $this->routes['get'][$path] = $responce;
    }
    public function resolve() {
       $path = $this->request->path();
       $method = strtolower($this->request->method());
       $callback = $this->routes[$method][$path] ?? false;
       if($callback) {
        echo call_user_func($callback);
       } else {
           include_once realpath('view/404.php');
       }
       print_r($this->routes);
    }
}