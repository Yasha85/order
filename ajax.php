<?php

use lib\Database\Database;
use lib\Order\OrderHandler;
use lib\Pizza\HawaiianPizza;
use lib\Pizza\MushroomPizza;
use lib\Pizza\PepperoniPizza;
use lib\Pizza\VillagePizza;
use lib\Sauce\BBQSauce;
use lib\Sauce\CheesySauce;
use lib\Sauce\GarlicSauce;
use lib\Sauce\SweetSourSauce;
use lib\Size\Size;

if (empty($_POST)) {
    die('Вы не отправили форму');
}

require __DIR__ . '/vendor/autoload.php';

$pizzaId = (int)$_POST['pizza'];
$sizeId = (int)$_POST['size'];
$sauceId = (int)$_POST['sauce'];

$db = new Database();

$pizzaArray = $db->getPizzaById($pizzaId);
$sizeArray = $db->getSizeById($sizeId);
$sauceArray = $db->getSauceById($sauceId);

$errors = [];

if (empty($pizzaId)) {
    $errors[] = 'Выбранная пицца не найдена';
}
if (empty($sizeId)) {
    $errors[] = 'Выбранный размер не найден';
}
if (empty($sauceId)) {
    $errors[] = 'Выбранный соус не найден';
}

if (!empty($errors)) {
    die('произошла ошибка, передали не корректные данные!');
}

$size = new Size($sizeArray);

if ($pizzaArray['id'] === 1) {
    $pizza = new PepperoniPizza($pizzaArray, $size);
} else {
    if ($pizzaArray['id'] === 2) {
        $pizza = new VillagePizza($pizzaArray, $size);
    } else {
        if ($pizzaArray['id'] === 3) {
            $pizza = new HawaiianPizza($pizzaArray, $size);
        } else {
            $pizza = new MushroomPizza($pizzaArray, $size);
        }
    }
}

if ($sauceArray['id'] === 1) {
    $sauce = new CheesySauce($sauceArray);
} else {
    if ($sauceArray['id'] === 2) {
        $sauce = new SweetSourSauce($sauceArray);
    } else {
        if ($sauceArray['id'] === 3) {
            $sauce = new GarlicSauce($sauceArray);
        } else {
            $sauce = new BBQSauce($sauceArray);
        }
    }
}

$orderHandler = new OrderHandler();
$orderPrice = $orderHandler->getOrderPrice($pizza, $sauce);
$orderCheck = $orderHandler->getOrderCheck($pizza, $sauce, $orderPrice);

// Формируем массив для JSON ответа
$result = array(
    'check' => $orderCheck,
);

// Переводим массив в JSON
echo json_encode($result);