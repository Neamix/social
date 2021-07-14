<?php 

namespace app;

class Request {
    public function path() {
        $fullPath = $_SERVER['REQUEST_URI'];
        $position = strpos($fullPath,'?');
        if(!$position) {
            return $fullPath;
        } else {
            return substr($fullPath,$position); 
        }
    }
    public function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}


