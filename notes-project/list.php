<?php

// "boostrap" the application
require 'bootstrap.php';

// retrieve all notes from database
$notes = db::get_all_notes();

$title = 'List of notes';

// include HTML header (ends with <body>)
include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <h1>List of notes</h1>
    

<select id="filter-order-by">
       <option value="title">Title</option>
       <option value="created_at">Time</option>
   </select>

   <select id="filter-order">
       <option value="asc">ASC</option>
       <option value="desc">DESC</option>
   </select>


    <!-- display the retrieved notes -->
    <ul>

        <?php foreach($notes as $note) : ?>

            <li>
                <?php echo $note->getTitle(); ?>
                <a href="<?php echo $note->getDetailUrl(); ?>">detail</a>
                <a href="<?php echo $note->getEditUrl(); ?>">edit</a>
            </li>

        <?php endforeach; ?>

        <li>
            <a href="form.php">create new note</a>
        </li>

    </ul>

<script src="jquery/jquery-3.2.1.js"></script>
<script>



    $('#filter-order-by').change(function() {
   
        $.ajax({
        
        
        'url' : 'api.php',
        'type' : 'post',
        'data' : {
                'order' : $('#filter-order').val()
            }
        })

        .done(function(data) {
        alert( "success" );
        })

        .fail(function(jqXHR, textStatus) {
        alert( "error" );
        })

        .always(function() {
        alert( "complete" );
        });
    });

</script>



</body>
</html>