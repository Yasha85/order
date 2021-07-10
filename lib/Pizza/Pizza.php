<?php

namespace lib\Pizza;

use lib\Size\Size;

/**
 * Class Pizza
 */
require __DIR__ . '/../../vendor/autoload.php';

abstract class Pizza
{
    public int $id;
    public string $title;
    public float $price;
    public Size $size;

    /**
     * Pizza constructor.
     * @param array $pizzaArray
     * @param Size $size
     */
    public function __construct(array $pizzaArray, Size $size)
    {
        $this->id = $pizzaArray['id'] ?? 1;
        $this->title = $pizzaArray['title'] ?? '';
        $this->price = $pizzaArray['price'] ?? 1;
        $this->size = $size;
    }

}