<?php
session_start();

$pdo= new PDO('mysql:host=127.0.0.1;dbname=notes;charset=utf8', 'root', 'rootroot');

if ($_POST)
{
    
    $stmt = $pdo->prepare('SELECT * FROM registration WHERE username = ?');
    $stmt->execute(array($_POST['username']));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $row = $stmt->fetch();
    if (password_verify($_POST['password'], $row['password'])) {
        session_regenerate_id();
        $_SESSION['user'] = $row['email'];
        header('Location: notes_forms.php');

        
    } else {
        echo 'Password incorrect';
    }

}

?>


<form action="" method="post">
    <h1>LOGIN PHP</h1>

    Username: <input type="text" name="username" value="">

    <!--Email: <input type="text" name="email" value="">-->

    Password: <input type="text" name="password" value="">
    <input type="submit">

</form>