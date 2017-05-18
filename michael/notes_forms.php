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

$pdo= new PDO('mysql:host=127.0.0.1;dbname=notes;charset=utf8', 'root', 'rootroot');
var_dump($pdo);



if($_POST)
{
    var_dump($_POST);
    $stmt = $pdo->prepare('INSERT INTO notes (title,note,created,email) VALUES(?,?,NOW(),?)'); // Values ? ? NOW() are placeholders, you always have to use them to prevent a hack/ WE ARE PREPARING QUERY
    $stmt->execute(array($_POST['title'], $_POST['note'],$_POST['email'])); //executing the statement / 
    // header('Location:notes_forms.php');
    $stmt = $pdo->prepare('INSERT INTO notes_have_tags (id_notes, id_tags) VALUES (?, ?)');
    foreach ($_POST['tags'] as $tag) {
        $stmt->execute(array($pdo->lastInsertId(), $tag));
    
    }



    // var_dump($_POST);   //INSERT INTO notes (title,note,created) VALUES(?,?,NOW()) je sqlcommand
}
   $stmt = $pdo->prepare('SELECT  id, tags FROM tag');
   $stmt ->execute(); // stmt = stands for statement
   $result = $stmt->fetchAll();

?>

<form action="" method="post">
<label for="title"><h2>Title</h2></label>
<br>
<input type="text" name="title" id="title" required> <!--$_POST['title'] refers to name="title"-->
<br>
<label for="email"><h2>Your email</h2></label>
<br>
<input type="email" name="email" id="email" required> 
<br>
<label for="note"><h2>Note</h2></label> 
<br>    
<textarea name="note" rows="5" cols="23" id="note"> 
</textarea> <!--$_POST['note'] refers to name="note"-->
<br>
    <select name="tags[]" multiple>
        <?php
            foreach($result as $tag) { // tag is the line, so for each line we get code
                var_dump($tag);
                echo '<option value=' . $tag['id'] . '>' . $tag['tags'] . '</option>';
            }
        ?>        
        <option value="foo">foo</option>
        <option value="blue">blue</option>
        <option value="yellow">yellow</option>
    </select>
    
<br>
<input type="submit" value="Save"> <!--type='button' neodosiela informacie, pouzi type='submit'-->
</form>


</body>
</html>


