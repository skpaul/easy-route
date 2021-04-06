<?php

class EasyRoute{
    private $url = "";
    private $routes = [];
    public function __construct($requestURI){
        $url = strtok($requestURI, '?');
		$this->url = trim($url);
	}

    public function addRoute(string $route, string $file){
        $this->routes[$route] = $file;
    }

    public function run(){
        foreach ($this->routes as $key => $value) {
            if($this->url == $key){
                require __DIR__ . $value . '.php';
                exit;
            }
           
        }

        require __DIR__ . '/app/404.php';
    }
}
?>