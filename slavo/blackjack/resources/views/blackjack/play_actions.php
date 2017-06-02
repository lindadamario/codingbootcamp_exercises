<a href="http://<?php echo $url?>?route=hit&id=<?php echo $game_id ?>">Hit</a>
<a href="http://<?php echo $url?>?route=stand&id=<?php echo $game_id ?>">Stand</a>

<script src="../jquery-3.2.1.js"></script>
<script>
    $)('#hit').click(function(e){
        e.preventDefault();

        var btn = $(e.target);

        $.ajax({
            'url':
            'method':'get'
        })


        alert('clicked hit');
        
    });
    

</script>