<?php

class Pages extends Controller {
    public function __construct(){
        // echo 'Pages loaded';
    }

    public function index()
    {
        // $this->view('Hello');
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);
    }

   
    public function about()
    {
        $this->view('pages/about');
    }
}