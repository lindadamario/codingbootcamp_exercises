<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Playground</title>
</head>
<body>
    
    <?php 
    
        $first_name = 'Linda';
        $second_name = 'Damario';
        $year_of_birth = 1992;
        $height = 164;
        


    ?>

    First name: <?php echo $first_name; ?><br>
    Second name: <?php echo $second_name; ?><br>
    Year of Birth: <?php echo $year_of_birth; ?><br>
    Height: <?php echo $height; ?><br>

    <?php define('MY_LAPTOP', 'Mac'); ?>
    What is the best thing I have ever had? My <?php echo MY_LAPTOP; ?><br>


<?php 
$basic = '123';
$numb = 123;
$num =12.3;
$truth = true;
$false = 'true';
$array = [1, 2, 3]; 
?>

    
    The type of <?php echo $basic; ?> is <?php echo gettype($basic); ?>.<br>
    The type of <?php echo $numb; ?> is <?php echo gettype($numb);?><br>
    The type of <?php echo $num; ?> is <?php echo gettype($num);?><br>
    The type of <?php echo $truth; ?> is <?php echo gettype($truth);?><br>
    The type of <?php echo $false; ?> is <?php echo gettype($false);?><br>
    The type of <?php echo $array; ?> is <?php echo gettype($array);?><br>



<?php 

    $first_name_as_integer = (integer)$first_name;
    var_dump($first_name_as_integer);
?>

<?php
    

function celsius_to_fahrenheit($celsius) {
    $fahrenheit = (9/5) * $celsius + 32;
    return $fahrenheit;
}
 
?>
<?php echo $celsius_to_fahrenheit; ?>

<hr>

if() {
    
}




</body>
</html>