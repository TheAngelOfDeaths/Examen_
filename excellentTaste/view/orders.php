<?php
    require 'components/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="gridcontainer">
        <div class="flex">
            <div>
                <?php
                    echo $html;
                ?>
            </div>

            <div>
                <h1> besteld </h1>
                <form id="orderForm" action="index.php?con=orders&op=create" method="post">
                    <button type="submit">Bestellen</button>
                    <tr>
                        <td>Welke tafel?</td>
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
                    <input type="hidden" name="total">
                </form>
                <hr>
                <p class="total">€0.00</p>
            </div>
        </div>
    </div>

    
    <script src="view/assets/index.js"></script>
    
</body>
</html>