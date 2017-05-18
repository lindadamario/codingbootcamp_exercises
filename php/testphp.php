$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    
    <table border="1">
        <thead>
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            <td>
                <tr><php foreach($books as ($author) => $value) {
                    echo $author . $value;
                } 
                ?></tr>
            </td>

            <td>
                <tr><php foreach($books as ($title) => $value) {
                    echo $author . $title;
                } 
                ?></tr>
            </td>

            <td>
                <tr><php foreach($books as ($price) => $value) {
                    echo $author . '$value';
                } 
                ?></tr>
            </td>
        </thead>
        <tbody>

        </tbody>
    </table>



<!--<?php
    $tshirt = 
    [  
        $product_id = 321,
        $color = 'blue',
        $size =	'XL'
    ]


    var_dump($_GET); // shows the data

    function GET($product_id, $color, $size) {
        return 
    }


?>-->


<!--<?php

define('CURRENCY');


$price = print_price(123);

function print_price($price) {

}

?>-->



</body>
</html>