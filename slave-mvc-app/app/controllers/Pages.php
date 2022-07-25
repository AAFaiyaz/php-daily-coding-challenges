<?php

class Pages {
    public function __construct(){
        echo 'Hello from Pages';
    }
    
    public function about($id){
        echo "This is from about";
        echo $id;
    }
}