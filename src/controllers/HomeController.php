<?php

class HomeController extends Controller
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->name = $name;
    }

    public function index() 
    {
        $this->view->render();
    }

    public function get()
    {
        echo 'Load get method';
    }
}