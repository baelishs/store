<?php

$product_id = $_GET['id'];
$result = queryToDatabase("SELECT * FROM `products` WHERE `id`='$product_id'");
$products = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

    <div class="container" >
        <h2> <?=$products['name']?></h2>
        <h3><?=$products['price']?> рублей</h3>
        <hr>
        <p><?=$products['description']?></p>
        <a href="#" class="btn btn-sm btn-secondary">В избранное</a>
        <a href="/editProduct?id=<?=$products['id']?>" class="btn btn-sm btn-secondary">Изменить</a>
        <a href="/deleteProduct?id=<?=$products['id']?>"  class="btn btn-sm btn-secondary">Удалить</a>
    <div>

