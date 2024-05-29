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

    <h1> Klant aanmaken </h1>

    <form action="index.php?con=reservations&op=createKlant" method="POST">
        <div class="flex-column"> 
            <tr>
                <td>klanten naam:</td>
                <td><input type="text" id="klantnaam" name="klantnaam"></td>
            </tr>
            <tr>
                <td>telefoon nummer:</td>
                <td><input type="text" id="telefoon" name="telefoon"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td> <input type="submit" id="create_klant" name="create_klant" value="submit"></td>
            </tr>
        </div>
    </form>
    
</body>
</html>