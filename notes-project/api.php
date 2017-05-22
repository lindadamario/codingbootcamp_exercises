<?php

// "boostrap" the application
require 'bootstrap.php';

// class for retrieving data from database (extends class db)
require_once 'api-db.php';

// retrieve all notes from database
// skip 0, select 10, order by `created_at` in ascending order
$notes = api_db::getNotes();

// var_dump($notes);


// var_dump($notes);

$order_by = $_POST['order_by'];
$order_way = $_POST['order'];

// skip 1, select 1, ordere by `title` in ascending order
$notes = api_db::getNotes(1000, 0, $order_by, $order_way);
?>

<?php foreach($notes as $note) : ?>

    <li>
        <?php echo $note->getTitle(); ?>
        <a href="<?php echo $note->getDetailUrl(); ?>">detail</a>
        <a href="<?php echo $note->getEditUrl(); ?>">edit</a>
    </li>

<?php endforeach; ?>