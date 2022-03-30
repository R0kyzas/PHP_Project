<?php 

class AboutController extends Controller
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function index()
    {
        echo 'Load ' . $this->name .' index method';
    }
}