<?php

    if(!empty($_POST)) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        queryToDatabase("INSERT INTO `products` (`name`, `description`, `price`) VALUES ('$name', '$description', '$price')");
    }
?>

<form method="post">
    <h2>
        Add new product
    </h2>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Product price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price" name="price">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Product description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Add</button>
</form>
