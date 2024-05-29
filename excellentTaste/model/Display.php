<?php

class Display{
    public function createTableDish($con, $res){
        $tableheader = false;
        $html = '<div style="overflow-x:auto;">';
        $html .= '<table>';
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


            foreach ($row as $key => $value) {
                $html .= "<td>" . $value . "</td>";
            }


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

    public function createTableReservations($con, $res){
        $tableheader = false;
        $html = '<div style="overflow-x:auto;">';
        $html .= '<table>';
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


            foreach ($row as $key => $value) {
                $html .= "<td>" . $value . "</td>";
            }


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

    public function createSelectCutomer($Customer_data){
        $html = "";
        $html .= "<select name='klant_id' id='klant_id' style='overflow-y:auto'>";
        foreach ($Customer_data as $row){
            $html .= "<option value=" . $row['klant_id'] . ">" . $row['klantnaam'] . "</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public function createTableAllDishes($data){

        $result = $data[0];
        $dishType = $data[1];

        

        $appetizers = '';
        $main = '';
        $desserts = '';
        $drinks = '';
        $snack = '';

        foreach ($result as $row) {         


            $item = '<div class="item flex-row">';
            $item .= '<div class="item flex-column">';
            $item .= '<p class="name" id="' . $row['prijs'] . '">' . $row['menuitemnaam'] . '</p>';
            $item .= '<p class="cost"> €' . $row['prijs'] . '</p>';
            $item .= '</div>';
            $item .= '<button class="small_button" onclick="order(this)">+</button>';
            $item .= '</div>';


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