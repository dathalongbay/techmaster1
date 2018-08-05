<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
$product_visited = unserialize($_COOKIE['product_visited']);
$product_visited = (array) $product_visited;
if (!in_array('san pham 2', $product_visited)) {
    $product_visited[] = 'san pham 2';
}
echo "<pre>";
print_r($product_visited);
echo "</pre>";
$product_visited_cookie = serialize($product_visited);
setcookie("product_visited", $product_visited_cookie, time() + 86400 );
echo "san pham 2";
?>

