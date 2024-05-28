<?php

class Display{
    public function createTableDish($con, $res){
        $tableheader = false;
        $html = '<div class="flex" style="overflow-x:auto table">';
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
}



?>