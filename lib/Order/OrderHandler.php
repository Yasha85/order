<?php

namespace lib\Order;

use lib\Helper\Helper;
use lib\Pizza\Pizza;
use lib\Sauce\Sauce;

/**
 * Class OrderHandler
 */
class OrderHandler implements OrderHandlerInterface
{

    /**
     * @param Pizza $pizza
     * @param Sauce $sauce
     * @return float
     */
    public function getOrderPrice(Pizza $pizza, Sauce $sauce): float
    {
        return $pizza->price * $pizza->size->coefficient + $sauce->price;
    }

    /**
     * @param Pizza $pizza
     * @param Sauce $sauce
     * @param float $orderPrice
     * @return string
     */
    public function getOrderCheck(Pizza $pizza, Sauce $sauce, float $orderPrice): string
    {
        return 'Вы заказали пиццу ' . $pizza->title . ' размером ' . $pizza->size->size . ' и выбрали ' .
            $sauce->title . ' соус.<br>Итоговая стоимость вашего заказа - ' . $orderPrice .' '. Helper::plural($orderPrice, ['рубль', 'рубля', 'рублей']).'<br>Спасибо за заказ!';
    }

}