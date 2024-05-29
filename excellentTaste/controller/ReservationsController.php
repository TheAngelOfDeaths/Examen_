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
        $op = isset($_GET['op']) ? $_GET['op'] : '';

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

    public function collectCreateCustomer(){
        if (isset($_REQUEST['create_klant'])) {
            $klantnaam = isset($_REQUEST['klantnaam']) ? $_REQUEST['klantnaam'] : null;
            $telefoon = isset($_REQUEST['telefoon']) ? $_REQUEST['telefoon'] : null;
            $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;

            if (empty($klantnaam) or empty($telefoon) or empty($email)) {
                return "Alle velden zijn vereist";
            }

            try {
                $this->ReservationsLogic->createCustomer($klantnaam, $telefoon, $email);
                header("Location: index.php?con=reservations&op=create");
            } catch (Exception $e){
                throw $e;
            }
        }
        include 'view/reservations/klanten.php';
    }

    public function collectCreateReservation(){

        $Customer_data = $this->ReservationsLogic->readAllCustomers();
        $html = $this->Display->createSelectCutomer($Customer_data); 

        if (isset($_REQUEST['submit'])) {
            $datum = isset($_REQUEST['datum']) ? $_REQUEST['datum'] : null;
            $tijd = isset($_REQUEST['tijd']) ? $_REQUEST['tijd'] : null;
            $aantal = isset($_REQUEST['aantal']) ? $_REQUEST['aantal'] : null;
            $aantal_k = isset($_REQUEST['aantal_k']) ? $_REQUEST['aantal_k'] : '0';
            $tafel = isset($_REQUEST['tafel']) ? $_REQUEST['tafel'] : null;
            $allergieen = isset($_REQUEST['allergieen']) ? $_REQUEST['allergieen'] : 'geen';
            $opmerkingen = isset($_REQUEST['opmerkingen']) ? $_REQUEST['opmerkingen'] : 'geen';
            $klant_id = isset($_REQUEST['klant_id']) ? $_REQUEST['klant_id'] : null;

            if (empty($datum) or empty($tijd) or empty($aantal) or empty($tafel)) {
                return "Alle velden zijn vereist";
            }

            try {
                $this->ReservationsLogic->createReservation($tafel, $datum, $tijd, $klant_id, $aantal, $aantal_k, $allergieen, $opmerkingen);
            } catch (Exception $e){
                throw $e;
            }
        }


        include 'view/reservations/create.php';
    }

    public function collectReadAllReservations(){
        $data = $this->ReservationsLogic->readAllReservations();
        $html = $this->Display->createTableReservations("reservations", $data);
        include 'view/reservations.php';
    }
}

?>