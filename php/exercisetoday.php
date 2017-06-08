<?php 

$time_of_my_birth = strtime('1992-06-05 12:30:00');

$time_to_celebrate = $time_of_my_birth + 123456789;

$date_to_celebrate = date('Y-m-d H:m:s', $time_to_celebrate);

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
    <form action="">
    <input type="date">
    <input type="text">
    <button>Calculate</button>
    </form>


<?php




?>
</body>
</html>