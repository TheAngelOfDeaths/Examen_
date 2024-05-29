<?php

require_once "model/ReservationsLogic.php";
require_once 'model/Display.php';

class ReservationsController{
    public function __construct(){
        $this->ReservationsLogic = new ReservationsLogic();
        $this->Display = new Display();
    }

    public function __destruct(){

    }

    public function handleRequest(){
        //getting from the url which action to do
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        //switch to find out which action to do
        switch($op){
            case 'createKlant':
                $this->collectCreateCustomer();
                break;
            case 'create':
                $this->collectCreateReservation();
                break;
            case 'read':
                $this->collectReadReservation($_REQUEST['id']);
                break;
            case 'update':
                $this->collectUpdateReservation($_REQUEST['id']);
                break;
            case 'delete':
                $this->collectDeleteReservation($_REQUEST['id']);
                break;
            case 'readall':
                $this->collectReadAllReservations();
                break;
            default:
                $this->collectReadAllReservations();
                break;
        }
    }

    // create a customer when a new customer want to make a reservation
    public function collectCreateCustomer(){
        if (isset($_REQUEST['create_klant'])) {
            $klantnaam = isset($_REQUEST['klantnaam']) ? $_REQUEST['klantnaam'] : null;
            $telefoon = isset($_REQUEST['telefoon']) ? $_REQUEST['telefoon'] : null;
            $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;

            // check if everything is filled in
            if (empty($klantnaam) or empty($telefoon) or empty($email)) {
                return "Alle velden zijn vereist";
            }

            try {
                $this->ReservationsLogic->createCustomer($klantnaam, $telefoon, $email);
                // get send back to the reservaions page
                header("Location: index.php?con=reservations&op=create");
            } catch (Exception $e){
                throw $e;
            }
        }
        include 'view/reservations/klanten.php';
    }

    // create function for creating reservations
    public function collectCreateReservation(){

        // get all the customers from the database
        $Customer_data = $this->ReservationsLogic->readAllCustomers();
        // send them to the display to make a select input for the form
        $html = $this->Display->createSelectCutomer($Customer_data); 

        if (isset($_REQUEST['submit'])) {
            // get everything from the form
            $datum = isset($_REQUEST['datum']) ? $_REQUEST['datum'] : null;
            $tijd = isset($_REQUEST['tijd']) ? $_REQUEST['tijd'] : null;
            $aantal = isset($_REQUEST['aantal']) ? $_REQUEST['aantal'] : null;
            $aantal_k = isset($_REQUEST['aantal_k']) ? $_REQUEST['aantal_k'] : '0';
            $tafel = isset($_REQUEST['tafel']) ? $_REQUEST['tafel'] : null;
            $allergieen = isset($_REQUEST['allergieen']) ? $_REQUEST['allergieen'] : 'geen';
            $opmerkingen = isset($_REQUEST['opmerkingen']) ? $_REQUEST['opmerkingen'] : 'geen';
            $klant_id = isset($_REQUEST['klant_id']) ? $_REQUEST['klant_id'] : null;

            // check if a field is empty
            if (empty($datum) or empty($tijd) or empty($aantal) or empty($tafel)) {
                return "Alle velden zijn vereist";
            }

            // send data to the logic
            try {
                $this->ReservationsLogic->createReservation($tafel, $datum, $tijd, $klant_id, $aantal, $aantal_k, $allergieen, $opmerkingen);
            } catch (Exception $e){
                throw $e;
            }
        }


        include 'view/reservations/create.php';
    }

    // get all the reservations that are made
    public function collectReadAllReservations(){
        $data = $this->ReservationsLogic->readAllReservations();
        // send data to the display to make a table with the data
        $html = $this->Display->createTableReservations("reservations", $data);
        include 'view/reservations.php';
    }
}

?>