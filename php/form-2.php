
<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=notes;charset=utf8', 'root', 'rootroot');
    var_dump($pdo);
        if($_POST) {

            $stmt = $pdo->prepare('INSERT INTO notes(title, note, email, created) VALUES (?, ?, ?, NOW())');
            $stmt->execute(array($_POST['title'], $_POST['note'], $_POST['email']));
            header('Location: form-2.php');
        }   else{
            echo'invalid email';
        }
            var_dump($_POST);
        
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

    


    <form action="" method="post">
       
        <label for="title">Title</label>
        <input name="title" type="text" required><br>
        <br>
            
        <textarea name="note" id="note" cols="30" rows="10">Insert your notes here</textarea>
        <!--<br>
        <label for="reminder">Remind Me</label>
        <select name="reminder" form="reminder">
            <option value="reminder" checked>30 minutes before</option>
            <option value="reminder">1 hour before</option>
            <option value="reminder">6 hours before</option>
            <option value="reminder">1 day before</option>
        </select><br>-->
        <br>
        <label for="email">Email</label>
        <input name="email" id="email" type="email">
       <label for="submit"></label>
       <input method="post" type="submit">
    </form>

    


</body>
</html>