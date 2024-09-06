<?php
    if(!empty($_POST)){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $result = queryToDatabase("UPDATE `products` SET `name` = '$name', `description` = '$description', `price` = '$price' WHERE `products`.`id` = '$id'");
    }
    $product_id = $_GET['id'];
    $result = queryToDatabase("SELECT * FROM `products` WHERE `id`='$product_id'");
    $products = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<form method="post">
    <h2>
        Update product
    </h2>

    <div class="form-group">
        <label for="exampleFormControlInput1">Product name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$products['name']?>" name="name">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Product price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$products['price']?>" name="price">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Product description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?=$products['description']?></textarea>
    </div>
    <input type="hidden" name="id" value="<?=$products['id']?>">
    <button class="btn btn-primary" type="submit">Update</button>
</form>
