<?php 

abstract class Controller 
{
    protected View $view;

    public function __construct($controllerIndex)
    {
        $pathToView = 'src/view/'. $controllerIndex .'/index.php';

        if(file_exists($pathToView)){
            $this->view = new View($controllerIndex, $pathToView);
        }
    }
    public abstract function index();
}