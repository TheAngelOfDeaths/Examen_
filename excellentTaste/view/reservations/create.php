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


    <a href="index.php?con=reservations&op=createKlant">
        <button>Klant aanmaken</button>
    </a>

    <h1> Reservering aanmaken </h1>

    <form action="index.php?con=reservations&op=create" method="POST">
        <div class="flex-column"> 
            <tr>
                <td>datum:</td>
                <td><input type="date" id="datum" name="datum"></td>
            </tr>
            <tr>
                <td>tijd: uur/minuten/seconden</td>
                <td><input type="number" id="tijd" name="tijd"></td>
            </tr>
            <tr>
                <td>aantal:</td>
                <td><input type="number" id="aantal" name="aantal"></td>
            </tr>
            <tr>
                <td>aantal kinderen:</td>
                <td><input type="number" id="aantal_k" name="aantal_k"></td>
            </tr>
            <tr>
                <td>klant:</td>
                <?php echo $html; ?>
            </tr>
            <tr>
                <td>tafel:</td>
                <td>
                    <select name="tafel" id="tafel">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>allergieen:</td>
                <td><input type="textarea" id="allergieen" name="allergieen"></td>
            </tr>
            <tr>
                <td>opmerkingen:</td>
                <td><input type="textarea" id="opmerkingen" name="opmerkingen"></td>
            </tr>
            <tr>
                <td> <input type="submit" id="submit" name="submit" value="submit"></td>
            </tr>
        </div>
    </form>

    
</body>
</html>