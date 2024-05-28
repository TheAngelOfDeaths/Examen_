<?php
    require 'view/components/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1> Menu item aanmaken </h1>


    <form action="index.php?con=dishes&op=create" method="POST">
        <tr>
            <td>Menu item code:</td>
            <td><input type="text" id="menuitemcode" name="menuitemcode"></td>
        </tr>
        <tr>
            <td>Menu item naam:</td>
            <td><input type="text" id="menuitemnaam" name="menuitemnaam"></td>
        </tr>
        <tr>
            <td>prijs:</td>
            <td><input type="number" id="prijs" name="prijs" min="0.00" max="10000.00" step="0.01"></td>
        </tr>
        <tr>
            <td>subgerecht:</td>
            <td>
                <select name="subgerecht" id="subgerecht">
                    <option value="ijn">Ijs</option>
                    <option value="kdk">Koude dranken</option>
                    <option value="koh">Koude hapjes</option>
                    <option value="kov">Koude voorgerechten</option>
                    <option value="mon">Mousse</option>
                    <option value="veh">Vegetarische gerechten</option>
                    <option value="vih">Vis gerechten</option>
                    <option value="vlh">Vlees gerechten</option>
                    <option value="wah">Warme hapjes</option>
                    <option value="wav">Warme voorgerechten</option>
                    <option value="wdk">Warme dranken</option>
                    <option value="wik">Wijnen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <input type="submit" id="submit" name="submit" value="submit"></td>
        </tr>
    </form>

    
</body>
</html>