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
$pdo = new PDO('mysql:host=localhost;dbname=actors;charset=utf8', 'root', 'rootroot');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO actors (firstname, lastname, gender, dateofbirth, biography) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['dateofbirth'], $_POST['biography']));
    var_dump($_POST);
}
?>


    <h2>Actors' Database</h2>

    <form action="" method="POST">
            
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname">
            <br>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname">
            <br>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="m" checked>M
            <input type="radio" name="gender" value="f">F
            <br>
            <label for="dateofbirth">Date of Birth</label>
            <input type="text" name="dateofbirth" value="dd/mm/year">
            <br>
            <textarea name="biography" id="biography" cols="30" rows="10"></textarea><br>
            <button type="submit" name="submit" value="submit">Go</button>

        </form>


</body>
</html>