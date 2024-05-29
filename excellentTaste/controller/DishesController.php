<?php

require_once 'model/DishesLogic.php';
require_once 'model/Display.php';

class DishesController{

    public function __construct(){
        $this->DishesLogic = new DishesLogic();
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
                $this->collectCreateDish();
                break;
            case 'read':
                $this->collectReadDish($_REQUEST['id']);
                break;
            case 'update':
                $this->collectUpdateDish($_REQUEST['id']);
                break;
            case 'delete':
                $this->collectDeleteDish($_REQUEST['id']);
                break;
            case 'readall':
                $this->collectReadAllDishes();
                break;
            default:
                $this->collectReadAllDishes();
                break;
        }

    }

    // create function for menuitems,
    public function collectCreateDish(){
        if (isset($_REQUEST['submit'])) {
            // get everything from the form
            $menuitemcode = isset($_REQUEST['menuitemcode']) ? $_REQUEST['menuitemcode'] : null;
            $menuitemnaam = isset($_REQUEST['menuitemnaam']) ? $_REQUEST['menuitemnaam'] : null;
            $prijs = isset($_REQUEST['prijs']) ? $_REQUEST['prijs'] : null;
            $subgerecht = isset($_REQUEST['subgerecht']) ? $_REQUEST['subgerecht'] : null;

            // check if data is empty
            if (empty($menuitemcode) or empty($menuitemnaam) or empty($prijs) or empty($subgerecht)) {
                return "Alle velden zijn vereist";
            }
            // send data to the logic
            try {
                $this->DishesLogic->createDish($menuitemcode, $menuitemnaam, $prijs, $subgerecht);
            } catch (Exception $e){
                throw $e;
            }
        }
        include 'view/dishes/create.php';
    }


    public function collectReadAllDishes(){
        // get all the menu items
        $data = $this->DishesLogic->readAllDishes();
        // go to the display and put the data in a table
        $html = $this->Display->createTableDish("dishes", $data);
        include 'view/dishes.php';
    }
}

?>