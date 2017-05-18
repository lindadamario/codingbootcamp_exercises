
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- exercise 1 -->

    <?php
        $movies = [
        'The Shawshank redemption',
        'The Godfather',
        'The Godfather II',
        'Dark Knight', 
        '12 angry men', 
        'Schindler\'s list',
        'Pulp fiction',
        'Lord of the Rings: Return of the King',
        'The good, the bad and the ugly',
        'Fight club'
        ];

        sort($movies);
    ?>

    <ol>
        
        <?php foreach($movies as $movie =>$title) : ?> 
        <li><?php echo $title; ?></li>
        <?php endforeach; ?>
    </ol>

<!-- exercise 2 -->

    <ol>
        <?php for($i=0; $i<count($movies); $i++) : ?>

        <li><?php echo $movies[$i]; ?></li>

        <?php endfor; ?>

    </ol>

<!-- exercise 3 -->
    <?php
        $movie_names = [
        'tt0111161' => 'The Shawshank redemption',
        'tt0068646' => 'The Godfather',
        'tt0071562' => 'The Godfather II',
        'tt0468569' => 'Dark Knight', 
        'tt0050083' => '12 angry men', 
        'tt0108052' => 'Schindler\'s list',
        'tt0110912' => 'Pulp fiction',
        'tt0167260' => 'Lord of the Rings: Return of the King',
        'tt0060196' => 'The good, the bad and the ugly',
        'tt0137523' => 'Fight club'
        ];

        asort($movie_names);
        $movie_ratings = [
        'tt0111161' => 9.2,
        'tt0068646' => 9.2,
        'tt0071562' => 9.0,
        'tt0468569' => 8.9, 
        'tt0050083' => 8.9, 
        'tt0108052' => 8.9,
        'tt0110912' => 8.9,
        'tt0167260' => 8.9,
        'tt0060196' => 8.9,
        'tt0137523' => 8.8
        ];

    ?>


    <ul>
        <?php foreach ($movie_names as $titles => $title) : ?>
        <!-- $table as $key => $value -->
            <?php foreach ($movie_ratings as $ratings => $rating) : ?>
             <!-- $table as $key => $value -->
                <?php if($titles == $ratings) :?>
                <!-- $key1 == $key2 -->
                <li><?= $title ?> has a rate of <?= $rating ?></li>
                <!-- value 1 and value 2-->
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>

    </ul>

<!-- exercise 3 -->
<?php 

    $movies = [
        '1' => 'Harry Potter',
        '2' => 'Cinderella',
        '3' => 'The dark Knight',
        '4' => 'Ba Moms',
        '5' => 'Amelia',
        '6' => 'Notting Hills'
    ];

    $ratings = [
        '1' => '9.8',
        '2' => '4',
        '3' => '9',
        '4' => '7',
        '5' => '6.1',
        '6' => '3'
    ];

?>
<?php
foreach($movies as $movie => $ratings) 
foreach($ratings as $rating => $movie)
    if($movie == $rating) : 

?>

<?php endforeach; ?>




</body>
</html>


