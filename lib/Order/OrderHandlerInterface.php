<?php

namespace lib\Order;

use lib\Pizza\Pizza;
use lib\Sauce\Sauce;

/**
 * Interface OrderHandlerInterface
 */
interface OrderHandlerInterface
{

    /**
     * @param Pizza $pizza
     * @param Sauce $sauce
     * @return float
     */
    public function getOrderPrice(Pizza $pizza, Sauce $sauce): float;

    /**
     * @param Pizza $pizza
     * @param Sauce $sauce
     * @param float $orderPrice
     * @return string
     */
    public function getOrderCheck(Pizza $pizza, Sauce $sauce, float $orderPrice): string;

}