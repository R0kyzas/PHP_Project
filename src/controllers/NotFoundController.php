<?php 

class NotFoundController extends Controller
{
    public function __construct($name)
    {
        echo 'Controller ', $name .' not exists';
    }

    public function index()
    {
        
    }
}