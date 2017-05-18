
  <!--  // logic & code to retrieve and prepare the data //
    // calculations, operations that can produce errors //
    // also handle form submission, saving data to database etc. //
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>

    <style>
        .board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .black {
    background-color: #000000;
}
    </style>
</head>
<body>
    
    <?php include "navigation.php"; ?>

    <?php echo "Hello"; // output prepared data ?>


    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
    </ul>

    <?php
    // is the current user administrator?
    $user_is_admin = false;

    if(!$user_is_admin) : ?>
        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
?>
    
    <?php endif; ?>

<!-- end exercise 1 -->

    <?php for($i = 0; $i < 10; $i++) : ?>

        <div class="item">
            This is item <?php echo $i+1; ?> of 10.
        </div>

    <?php endfor; ?>

    <?php $names = ['Bruce Wayne', 'Clark Kent', 'Tony Stark', 'Peter Parker']; ?>

    <?php foreach($names as $nr => $name) : ?>

        <div class="name">
            <?php echo $nr .$name; ?>
        </div>

    <?php endforeach; ?>

<br>

    <?php 

    $vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
    ];
    ?>

    

    <!--<table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>
        <tr>
            <td>Bicycle</td>
            <td>50</td>
        </tr>
    </table>
?>

 
-->

<?php
$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];
?>

<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
    <?php foreach($messages as $nr => $message) :  ?>
         
    
<li><?php echo $message; ?></li>
   
   <?php  endforeach; ?>
  <br>  
    <!-- exercise -->


    




    <?php for($i=0; $i<8; $i++) : ?>
        
    <div class="board">
        
        <div class="row" style="height:3em; width:3em; border:1px solid black">
            <?php for($j=0; $j<8; $j++) : ?>
            
                <?php if($j%2; == 0 && %2 ==0) || ($j%2 == 1) : ?>
                <div class="black"></div>
                <?php else() : ?>
                <div class="white"></div> 
                <?php endif; ?>
            <?php endfor; ?>
        </div>

    </div>  
    <?php endfor; ?>

    


</body>
</html>