<?php

require_once 'model/DataHandler.php';

class OrdersLogic {
    // make connection with database
    public function __construct(){
        $this->DataHandler = new DataHandler("localhost", "mysql", "excellenttaste", "root", "");
    }

    public function __destruct(){

    }

    // create for making a order
    public function createOrder($formData, $tafel)
    {
        // get data from the reservation linked to the tabel and the date of today
        $sql = "SELECT * from reservering WHERE datum = CURDATE() AND tafel = '" . $tafel . "'";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result_reservering = $data->fetchAll();

        $total = $formData['total'];
        // loop through data
        foreach ($result_reservering as $row){
            
            var_dump($row);
            foreach ($formData['items'] as $itemName => $itemPrice) {
                // insert the data in the database
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

    // get all the menu items and check which gerecht it is
    public function readAllDishes(){
        // get all the menu items
        $sql = "SELECT * from menuitem";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();

        // loop through the data
        foreach ($result as $row) {
            $subgerechtcode = $row['subgerechtcode'];
            
            // get the gerechtcode throught the subgerecht
            $sql_gerecht = "SELECT gerechtcode from subgerecht WHERE subgerechtcode = '" . $subgerechtcode . "'";
            $data_gerecht = $this->DataHandler->readAllData($sql_gerecht);
            $data_gerecht->setFetchMode(PDO::FETCH_ASSOC);
            $result_gerecht = $data_gerecht->fetchAll();

            // loop through the data
            foreach ($result_gerecht as $row){
                $gerecht = [];
                foreach ($row as $key => $value) {
                    $gerecht = $value;
                }
            } 
        }
        return array($result, $gerecht);
    }
    
    // Get all the reservations
    public function readReservation($tafel){
        // get all the reservations where the date is today and the table is the table selected in the order form.
        $sql = "SELECT * from reservering WHERE datum = CURDATE() AND tafel = '" . $tafel . "'";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }
}
?>