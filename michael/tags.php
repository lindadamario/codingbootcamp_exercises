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
$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', 'rootroot');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST) {
    $stmt = $pdo->prepare('INSERT INTO tag (tags) VALUES (?)');
    $stmt->execute(array($_POST['tag1']));
    var_dump($_POST);
}
?>



    <h2>Create new tag</h2>

    <form action="" method="POST">
    
    <label for="tag">Tag</label>
    <input type="text" name="tag1">
    
    <br>
    <button value="submit">Submit</button>
    
    </form>
</body>
</html>