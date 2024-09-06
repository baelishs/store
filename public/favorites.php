<?php
$products = queryToDatabase("SELECT products.*
FROM products JOIN favorite ON favorite.product_id = products.id");
$products = mysqli_fetch_all($products, MYSQLI_ASSOC);
?>

<?php foreach($products as $product): ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $product['price']?> рублей</h6>
            <p class="card-text"><?= $product['description']?></p>
            <a href="/moreAboutProduct?id=<?=$product['id']?>" class="card-link">Подробнее</a>
            <a href="/addFavorite?id=<?=$product['id']?>" class="card-link">В избранное</a>
            <a href="/editProduct?id=<?=$product['id']?>" class="card-link">Изменить</a>
            <a href="/deleteProduct?id=<?=$product['id']?>" class="card-link">Удалить</a>
        </div>
    </div>
<?php endforeach; ?>
