<?php

class Core{
    
    //App Core class
    //Creates URL & loads core controller
    //URL Format /controller/method/params
    
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    
    public function __construct(){
//        $this->getUrl();
//        print_r($this->getUrl());
        $url = $this->getUrl();
        //Look in controllers for first index
        if (isset($url[0])){
            if(file_exists('../app/controllers/'.ucfirst($url[0]).'.php')){
                $this->currentController = ucfirst($url[0]);
                
                //unset 0 index
                unst($url[0]);
        }
        }
        // Require the controller
        require_once '../app/controllers/'.$this->currentController.'.php';
        //Instantiate the controller
        $this->currentController = new $this->currentController;
        
        //Check for second part of url
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // Get params
        $this->params = $url ? array_values($url) : [];
        
        //Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/'); // removing the last / eg. /posts/extra/
            $url = filter_var($url, FILTER_SANITIZE_URL); //sanitizing the url removing characters should not be in the url
            $url = explode('/', $url); // putting everything in the array eg. /posts/edit/1 
            return $url;
        }
    }
}