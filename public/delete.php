<?php

$product_id = $_GET['id'];
queryToDatabase("DELETE FROM `products` WHERE `id` = '$product_id'");

?>

<div class="alert alert-success" role="alert" style="width: 25rem;">
    <h4 class="alert-heading">Отлично сработано!</h4>
    <p>Товар номер <?=$product_id?> удален. Теперь вы можете создать ещё больше новых товаров и навсегда забыть об этом.</p>
</div>