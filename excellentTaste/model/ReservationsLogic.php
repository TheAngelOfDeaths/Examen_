<?php

require_once 'model/DataHandler.php';

class ReservationsLogic {
    // make connection with database
    public function __construct(){
        $this->DataHandler = new DataHandler("localhost", "mysql", "excellenttaste", "root", "");
    }

    public function __destruct(){

    }

    // Put data from the customer form in the klant database
    public function createCustomer($klantnaam, $telefoon, $email){
        $sql = "INSERT INTO klant (klantnaam, telefoon, email, status) VALUES ('" . $klantnaam . "', '"  . $telefoon . "', '"  . $email . "', '1')";
        $data = $this->DataHandler->createData($sql);
    }

    // Put data from the reservation form in the reservering database
    public function createReservation($tafel, $datum, $tijd, $klant_id, $aantal, $aantal_k, $allergieen, $opmerkingen){
        $sql = "INSERT INTO reservering (tafel, datum, tijd, klant_id, aantal, aantal_k, allergieen, opmerkingen, status) VALUES ('" . $tafel . "', '"  . $datum . "', '"  . $tijd . "', '"  . $klant_id . "', '" . $aantal . "', '"  . $aantal_k . "', '"  . $allergieen . "', '"  . $opmerkingen . "', '1')";
        $data = $this->DataHandler->createData($sql);
        return $sql;
    }

    // get all the reservations with the date of today from the reservering database
    public function readAllReservations(){
        $sql = "SELECT * from reservering WHERE datum = CURDATE()";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }

    // get all the customers from the klant database
    public function readAllCustomers(){
        $sql = "SELECT * from klant";
        $data = $this->DataHandler->readAllData($sql);
        $data->setFetchMode(PDO::FETCH_ASSOC);
        $result = $data->fetchAll();
        return $result;
    }
}


?>