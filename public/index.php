<?php

    require_once 'connect.php';

    function queryToDatabase ($query) {
        global $connect;
        return mysqli_query($connect, $query);
    }

    function matchUrl($url, $filename) {
        if(strtok($_SERVER['REQUEST_URI'],'?') == $url) {
            require_once $filename;
        }
    }

    $urls = [
        ['url' => '/', 'filename' => 'card.php'],
        ['url' => '/addProduct', 'filename' => 'addProduct.php'],
        ['url' => '/editProduct', 'filename' => 'update.php'],
        ['url' => '/deleteProduct', 'filename' => 'delete.php'],
        ['url' => '/moreAboutProduct', 'filename' => 'more.php'],
        ['url' => '/addFavorite', 'filename' => 'addFavorite.php'],
        ['url' => '/favorites', 'filename' => 'favorites.php']
    ]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" >
<?php
    require_once('header.php');
    foreach ($urls as $url) {
        matchUrl($url['url'], $url['filename']);
    }
?>
    <div>
</body>
</html>