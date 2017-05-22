<?php


$pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', 'rootroot');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($_POST) {
    $stmt = $pdo->prepare('UPDATE notes SET title = ?, note = ?, WHERE id = ?');
    $stmt->execute(array($_POST['title'], $_POST['note'], $_GET['id']));
    header('Location:notes_forms.php');
}

$stmt = $pdo->prepare('SELECT title, note FROM notes WHERE id = ?');
$stmt -> execute(array($_GET['id']));
$note = $stmt->fetch();

?>

<form action="" method="post">
    Title: <input type="text" name="title" value="<?php echo htmlspecialchars($note['title']);?>
    "><br>
    Note: <input type="text" name="note" value="<?php echo htmlspecialchars($note['note']); ?>"><br>
    <input type="submit">
</form>