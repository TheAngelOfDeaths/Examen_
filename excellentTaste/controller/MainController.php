<?php

require_once 'controller/DishesController.php';

class MainController{
    public function __construct(){
        $this->DishesController = new DishesController();
    }

    public function __destruct(){

    }

    public function handleRequest(){
        $con = isset($_GET['con']) ? $_GET['con'] : '';

        switch ($con){
            case "dishes":
                $this->DishesController->handleRequest();
                break;
            case "":
                $this->DishesController->handleRequest();
                break;    
            default:
                $this->DishesController->handleRequest();
                break;
        }
    }
}

?>