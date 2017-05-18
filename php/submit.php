
<?php

if(empty($_POST)) {
    echo 'not a POST';
    exit();
}


if(empty($_POST['username'])) {
    $errors[] = 'missing username';
}


if(!filter_var($_POST['firstname'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'not a valid email';
}

if(!ctype_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'not a number';
}

if(empty($errors)) {
    $foo = $_POST['username'];
    echo htmlspecialchars($foo);
 //verify password or something
}
else{
    foreach($errors as $error) { 
        echo '<p>' . htmlspecialchars($error) .'</p>';
    }
}




//   if(empty($_POST['username'])) {
//    echo 'missing username';
//   }

var_dump($_POST);

//$foo = $_POST['username'];
//echo htmlspecialchars($error);

// $foo = $_POST['username'];
// echo htmlspecialchars($foo);

// htmlspecialchars is a special function that will be explained in the future. it prevent any user to go to the html.$_COOKIE
// it is very important.

?>
