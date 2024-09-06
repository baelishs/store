<?php
    $product_id = $_GET['id'];
    queryToDatabase("INSERT INTO `favorite` (`id`, `product_id`) VALUES (NULL, '$product_id')");
?>

<p>ok done</p>
