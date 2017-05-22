
<?php

    $pdo= new PDO('mysql:host=127.0.0.1;dbname=notes;charset=utf8', 'root', 'rootroot');
    var_dump($pdo);

if($_POST) {
    var_dump($_POST);
    $stmt = $pdo->prepare('INSERT INTO registration (username, email, password) VALUES (?, ?, ?)');
    $stmt->execute(array($_POST['username'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT))); 

    
    
    }
    // header('Location: form.php');
    
            
?>
    
<form action="" method="post">
    <label for="title"><h2>Username</h2></label>
    <input type="text" name="username" id="username">
    <br>
    <label for="email"><h2>Your email</h2></label>
    <input type="email" name="email" id="email"> 
    <br>
    <label for="password"><h2>Password</h2></label>
    <input type="text" name="password" id="password">
    <br>
    <input type="submit" value="Save">
</form>




</body>
</html>