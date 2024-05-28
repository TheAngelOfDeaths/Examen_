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
        $op = isset($_GET['op']) ? $_GET['op'] : '';

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

    public function collectCreateDish(){
        if (isset($_REQUEST['submit'])) {
            $menuitemcode = isset($_REQUEST['menuitemcode']) ? $_REQUEST['menuitemcode'] : null;
            $menuitemnaam = isset($_REQUEST['menuitemnaam']) ? $_REQUEST['menuitemnaam'] : null;
            $prijs = isset($_REQUEST['prijs']) ? $_REQUEST['prijs'] : null;
            $subgerecht = isset($_REQUEST['subgerecht']) ? $_REQUEST['subgerecht'] : null;

            if (empty($menuitemcode) or empty($menuitemnaam) or empty($prijs) or empty($subgerecht)) {
                return "Alle velden zijn vereist";
            }

            try {
                $this->DishesLogic->createDish($menuitemcode, $menuitemnaam, $prijs, $subgerecht);
            } catch (Exception $e){
                throw $e;
            }
        }
        include 'view/dishes/create.php';
    }


    public function collectReadAllDishes(){
        $data = $this->DishesLogic->readAllDishes();
        $html = $this->Display->createTableDish("dishes", $data);
        include 'view/dishes.php';
    }
}

?>