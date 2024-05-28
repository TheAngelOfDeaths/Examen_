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

    <a href="index.php?con=dishes&op=create">
        <button>Menu item aanmaken</button>
    </a>

    <?php
        echo $html;
    ?>


    <a href="index.php?con=dishes&op=create">
        <button>Click me</button>
    </a>
    
    
</body>
</html>