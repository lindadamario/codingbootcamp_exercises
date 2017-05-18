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
$pdo = new PDO('mysql:host=localhost;dbname=tag;charset=utf8', 'root', 'rootroot');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO actors (tag) VALUES (?,)');
    $stmt->execute(array($_POST['tag']));
    var_dump($_POST);
}
?>



    <h2>Create new tag</h2>

    <form action="" method="POST">
    
    <label for="tag">tag</label>
    <input type="text" value="tag">tag
    <br>
    <button value="submit">Submit</button>
    
    </form>
</body>
</html>