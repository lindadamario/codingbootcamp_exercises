<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="product.php" method="$_POST">
            
            <input type="text" value="$product_id"><br>
            
            <input type="radio" name="color" value="black">Black
            <input type="radio" name="color" value="blue"> Blue
            <br>
            
            <label for="size">Select size</label>
            <select name="size">
                <option value="1">XS</option>
                <option value="2">S</option>
                <option value="3">L</option>
                <option value="4">XL</option>
                <option value="5">XXL</option>
            </select><br>
            
            <label for="">Amount of items</label>
            <input type="text"><br>

            <label for="checkbox">Go to Checkout</label>
            <input type="checkbox" id="checkout" name="checkout" value="1"><br>
            <br>

            <button type="submit">Go</button>

        </form>


</body>
</html>