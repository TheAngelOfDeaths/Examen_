<?php

class Display{
    // table for the dishes
    public function createTableDish($con, $res){
        $tableheader = false;
        // create table
        $html = '<div style="overflow-x:auto;">';
        $html .= '<table>';
        // loop through the data
        foreach ($res as $row) {
            if ($tableheader == false) {
                $html .= "<tr>";

                // get all the headers
                foreach ($row as $key => $value) {
                    $html .= "<th>{$key}</th>";
                }
                $html .= "<th> actions </th>";
                $html .= "</tr>";
                $tableheader = true;
            }


            $html .= '<tr>';

            // show all the data
            foreach ($row as $key => $value) {
                $html .= "<td>" . $value . "</td>";
            }

            // the actions
            $html .= "<td style='display: flex; justify-content: space-between;'>";
            $html .= "<a href='index.php?con=" . $con . "&op=read&id=" . $row['menuitemcode'] . "'> <i class='fa fa-eye' style='font-size:30px; margin:1px'></i></a>";
            $html .= "<a href='index.php?con=" . $con . "&op=update&id=" . $row['menuitemcode'] . "'><i class='fa fa-edit' style='font-size:30px; margin:1px'></i></a>";
            $html .= "<a href='index.php?con=" . $con . "&op=delete&id=" . $row['menuitemcode'] . "'><i class='fa fa-trash' style='font-size:30px; margin:1px'></i></a>";
            $html .= "</td>";


            $html .= '</tr>';
        }
        $html .= "</table></div>";
        $html .= "</form";
        return $html;
    }

    // the table to show the reservations
    public function createTableReservations($con, $res){
        $tableheader = false;
        $html = '<div style="overflow-x:auto;">';
        $html .= '<table>';
        // loop through th data
        foreach ($res as $row) {
            if ($tableheader == false) {
                $html .= "<tr>";


                foreach ($row as $key => $value) {
                    $html .= "<th>{$key}</th>";
                }
                $html .= "<th> actions </th>";
                $html .= "</tr>";
                $tableheader = true;
            }


            $html .= '<tr>';

            // show all the data
            foreach ($row as $key => $value) {
                $html .= "<td>" . $value . "</td>";
            }

            // the actions
            $html .= "<td style='display: flex; justify-content: space-between;'>";
            $html .= "<a href='index.php?con=" . $con . "&op=read&id=" . $row['reservering_id'] . "'> <i class='fa fa-eye' style='font-size:30px; margin:1px'></i></a>";
            $html .= "<a href='index.php?con=" . $con . "&op=update&id=" . $row['reservering_id'] . "'><i class='fa fa-edit' style='font-size:30px; margin:1px'></i></a>";
            $html .= "<a href='index.php?con=" . $con . "&op=delete&id=" . $row['reservering_id'] . "'><i class='fa fa-trash' style='font-size:30px; margin:1px'></i></a>";
            $html .= "</td>";


            $html .= '</tr>';
        }
        $html .= "</table></div>";
        $html .= "</form";
        return $html;
    }

    // the select input field for choosing the customers for the reservation
    public function createSelectCutomer($Customer_data){
        $html = "";
        // make select
        $html .= "<select name='klant_id' id='klant_id' style='overflow-y:auto'>";
        // loop through all the customers that are in the database
        foreach ($Customer_data as $row){
            $html .= "<option value=" . $row['klant_id'] . ">" . $row['klantnaam'] . "</option>";
        }
        $html .= "</select>";
        return $html;
    }

    // table for all the menu items on the order page
    public function createTableAllDishes($data){

        $result = $data[0];
        $dishType = $data[1];

        $appetizers = '';
        $main = '';
        $desserts = '';
        $drinks = '';
        $snack = '';

        // loop all the menu items
        foreach ($result as $row) {     
            // show it on the page    
            $item = '<div class="item flex-row">';
            $item .= '<div class="item flex-column">';
            $item .= '<p class="name" id="' . $row['prijs'] . '">' . $row['menuitemnaam'] . '</p>';
            $item .= '<p class="cost"> €' . $row['prijs'] . '</p>';
            $item .= '</div>';
            $item .= '<button class="small_button" onclick="order(this)">+</button>';
            $item .= '</div>';

            //Check w
            switch ($dishType) {
                case "vog":
                    $appetizers .= $item;
                    break;
            }
        }


        $html = "<h3> MenuItems </h3>";
        $html .= $appetizers;

        return $html;
    }
}



?>