<?php

use lib\Database\Database;

require __DIR__ . '/vendor/autoload.php';

$db = new Database();

$pizza_types = $db->getPizzaList();
$pizza_sizes = $db->getSizeList();
$pizza_sauces = $db->getSauceList();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Заказ</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

</head>

<body>
<div class="container mt-5">
    <form action="" id="ajax_form" method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Выберите пиццу<br></label>
            <select class="form-control" name="pizza">
                <?php foreach ($pizza_types as $type): ?>
                    <option value="<?= $type['id']; ?>"><?= $type['title']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Выберите размер<br></label>
            <select class="form-control" name="size">
                <?php foreach ($pizza_sizes as $size): ?>
                    <option value="<?= $size['id']; ?>"><?= $size['size']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Выберите соус<br></label>
            <select class="form-control" name="sauce">
                <?php foreach ($pizza_sauces as $sauce): ?>
                    <option value="<?= $sauce['id']; ?>"><?= $sauce['title']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" id="btn" value="Заказать" name="submit">
        </div>
    </form>
    <div id="result_form" class="text-center mt-5"></div>
</div>

</body>
</html>