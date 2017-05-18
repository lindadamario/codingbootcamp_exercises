if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo '<p>OK COOL!</p>';
}


<form action="submit.php" method="post">
Username <input name="username" value="username">
<br>
Lastname <input name="firstname" placeholder="i.e. Boole">
<br>
<input type="submit" value="submit this">


</form>