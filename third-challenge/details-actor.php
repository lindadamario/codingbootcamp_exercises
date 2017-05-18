<?php

$pdo = new PDO('mysql:host=localhost;dbname=actors;charset=utf8', 'root', 'rootroot');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT actorid, firstname, lastname, gender, biography, dateofbirth FROM actors');
    $stmt ->execute(); // stmt = stands for statement
    $result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($result as $item) 
        {
            echo '<h2>'. $item['firstname']. ' ' .$item['lastname'] .'</h2>';

            echo '<p>'. $item['gender'].'</p>';

            echo '<p>'. $item['biography'].'</p>';

            echo '<p>'. $item['dateofbirth'].'</p>';        
        }


    ?>



    <h2>List of actors</h2>

    <ul>
        <?php
            foreach($result as $item) 
            {
                echo '<li>'. $item['firstname']. ' ' .$item['lastname'] .'</li>';
            }
        ?>
    </ul>

</body>
</html>