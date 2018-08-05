
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <div>
        Xem san pham
        <ul>
            <li><a href="http://localhost/techmaster1/cookie/product1.php">sp 1</a> </li>
            <li><a href="http://localhost/techmaster1/cookie/product2.php">sp 2</a> </li>
            <li><a href="http://localhost/techmaster1/cookie/product3.php">sp 3</a> </li>
            <li><a href="http://localhost/techmaster1/cookie/product3.php">sp 4</a> </li>
            <li><a href="http://localhost/techmaster1/cookie/product5.php">sp 5</a> </li>
        </ul>
        <p> Cac san pham ban da xem la :</p>
        <?php
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
        $product_visited = unserialize($_COOKIE['product_visited']);
        $product_visited = (array) $product_visited;
        echo "<pre>";
        print_r($product_visited);
        echo "</pre>";
        ?>
    </div>

</div> <!-- /container -->

</body>
</html>