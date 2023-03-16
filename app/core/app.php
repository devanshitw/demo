<?php

class App{
    protected $controller="home";
    protected $method="index";
    protected $params;
    public function __construct(){
        $url=$this->parseURL();
        // show($url);
        if(file_exists("../app/controllers/".strtolower($url[0]).".php")){
            $this->controller=strtolower($url[0]);
            unset ($url[0]);
        }
        require "../app/controllers/". $this->controller.".php";
        $this->controller = new $this->controller;
        if(isset($url[1])){
            $url[1]=strtolower($url[1]);
            if(method_exists($this->controller,$url[1]) && is_callable([$this->controller, $url[1]])){
            $this->method=$url[1];
            unset($url[1]);
        }
        }
        $this->params = (count($url) > 0) ? $url : ["home"];
        //  show($this->params);
        //  show(array_values($url));
        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    public function parseURL(){
        $url=isset($_GET['url'])?$_GET['url']:"home";
        return explode('/',trim($url,'/'));
    }
}
?>
