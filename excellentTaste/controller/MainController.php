<?php

require_once 'controller/DishesController.php';
require_once 'controller/ReservationsController.php';
require_once 'controller/OrdersController.php';

class MainController{
    public function __construct(){
        $this->DishesController = new DishesController();
        $this->ReservationsController = new ReservationsController();
        $this->OrdersController = new OrdersController();
    }

    public function __destruct(){

    }

    public function handleRequest(){
        //getting from the url which controller to go to
        $con = isset($_GET['con']) ? $_GET['con'] : '';

        //switch for which controller to got to
        switch ($con){
            case "dishes":
                $this->DishesController->handleRequest();
                break;
            case "reservations":
                $this->ReservationsController->handleRequest();
                break;    
            case "orders":
                $this->OrdersController->handleRequest();
                break;  
            default:
                $this->DishesController->handleRequest();
                break;
        }
    }
}

?>