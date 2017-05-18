<?php 
define('MY_OS', 'Linux'); 

switch(MY_OS) {
    case 'Windows':
        echo 'Edge';
        break;
    case 'Linux':
        echo 'Firefox:';
        break;
    case 'Safari':
        echo 'OS X';
        break;
    default:
        echo 'Just use Chrome...';
        break;
}
?>


<?php
    $age=35;
    $gender='male';
    $employed=true;


    if($age < 35) {
        echo 'if the age is greater than 35';
    } 
    if($employed == true)
        echo 'if employed';
    
    if($age < 18) 
    {
        echo 'the age is not greater than 18';

    }
    if($age<12 && $gender == female)
    {
        echo 'if the age is lower than 12 and gender is female';
    }
    if($age <= 12 && $gender != male )
    {
        echo 'if age is greater or equal to 18 and is not employed';
    }    
    if($age >= 60 && $employed=true && $gender == female)
    {
        echo 'if age is greater or equal to 60, is employed and is a female';
    }
    if(($gender == 'male' && $age > 20) || ($employed && gender != 'male' && $age < 25))    {
        echo 'if (someone) is a male above 20 or is an unemployed female above 25';
    }



?>


<?php 

$i=0;

for($i=0; $i >= 10; $i--) {
    echo 'This is loop number ' . (10-$i) . ' ';
}

?>