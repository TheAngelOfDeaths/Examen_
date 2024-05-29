<?php

require_once 'model/DataHandler.php';

class OrdersLogic {
    public function __construct(){
        $this->DataHandler = new DataHandler("localhost", "mysql", "excellenttaste", "root", "");
    }

    public function __destruct(){

    }

    public function createOrder($formData, $tafel)
    {
        $sql = "SELECT * from reservering WHERE datum = CURDATE() AND tafel = '" . $tafel . "'";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result_reservering = $data->fetchAll();

        

        $total = $formData['total'];
        foreach ($result_reservering as $row){
            
            var_dump($row);
            foreach ($formData['items'] as $itemName => $itemPrice) {
                try {
                    var_dump($row['reservering_id']);
                    $sql_create = "INSERT INTO bestelling (reservering_id, tafel, datum, tijd, menuitemcode, aantal, prijs) VALUES ('" . $row['reservering_id'] . "', '"  . $tafel . "', '" . $row['datum'] . "', '" . $row['tijd'] . "',  '" . $itemName . "', '1', '0.00' )";
                    $result = $this->DataHandler->createData($sql_create);
                } catch (Exception $e) {
                    return $e;
                }
            }
        }
    }

    public function readAllDishes(){
        $sql = "SELECT * from menuitem";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();

        foreach ($result as $row) {
            $subgerechtcode = $row['subgerechtcode'];
            
            $sql_gerecht = "SELECT gerechtcode from subgerecht WHERE subgerechtcode = '" . $subgerechtcode . "'";
            $data_gerecht = $this->DataHandler->readAllData($sql_gerecht);
            $data_gerecht->setFetchMode(PDO::FETCH_ASSOC);
            $result_gerecht = $data_gerecht->fetchAll();

            foreach ($result_gerecht as $row){
                $gerecht = [];
                foreach ($row as $key => $value) {
                    $gerecht = $value;
                }
            } 
        }
        return array($result, $gerecht);
    }
    
    public function readReservation($tafel){
        $sql = "SELECT * from reservering WHERE datum = CURDATE() AND tafel = '" . $tafel . "'";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }
}
?>