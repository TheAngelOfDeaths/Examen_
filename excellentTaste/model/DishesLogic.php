<?php

require_once 'model/DataHandler.php';

class DishesLogic {
    public function __construct(){
        $this->DataHandler = new DataHandler("localhost", "mysql", "excellenttaste", "root", "");
    }

    public function __destruct(){

    }

    public function createDish($menuitemcode, $menuitemnaam, $prijs, $subgerecht){
        $sql = "INSERT INTO menuitem (subgerechtcode, menuitemcode, menuitemnaam, prijs) VALUES ('" . $subgerecht . "', '"  . $menuitemcode . "', '"  . $menuitemnaam . "', '"  . $prijs . "')";
        $data = $this->DataHandler->createData($sql);
    }

    public function readAllDishes(){
        $sql = "SELECT * from menuitem";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }
}



?>