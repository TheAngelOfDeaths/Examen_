<?php

require_once "model/OrdersLogic.php";
require_once 'model/Display.php';

class OrdersController{
    public function __construct(){
        $this->OrdersLogic = new OrdersLogic();
        $this->Display = new Display();
    }

    public function __destruct(){

    }

    public function handleRequest(){
        //getting from the url which action to do
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        //switch to find out which action to do
        switch($op){
            case 'create':
                $this->collectCreateOrder();
                break;
            case 'read':
                $this->collectReadOrder($_REQUEST['id']);
                break;
            case 'update':
                $this->collectUpdateOrder($_REQUEST['id']);
                break;
            case 'delete':
                $this->collectDeleteOrder($_REQUEST['id']);
                break;
            case 'readall':
                $this->collectReadAllOrders();
                break;
            default:
                $this->collectReadAllDishes();
                break;
        }
    }

    // create orders
    public function collectCreateOrder()
    {
        // get the tabel that was selected send the rest op the post to the logic
        $tafel = isset($_REQUEST['tafel']) ? $_REQUEST['tafel'] : null;
        $items = $this->OrdersLogic->createOrder($_POST, $tafel);
        include 'view/orders.php';
    }

    //get all the menuitems to show on the order page,
    public function collectReadAllDishes(){
        $data = $this->OrdersLogic->readAllDishes();
        $html = $this->Display->createTableAllDishes($data);
        include 'view/orders.php';
    }
}

?>