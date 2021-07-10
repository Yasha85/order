<?php

namespace lib\Sauce;

/**
 * Class Sauce
 */
abstract class Sauce
{

    public int $id;
    public string $title;
    public float $price;

    /**
     * Sauce constructor.
     * @param array $sauceArray
     */
    public function __construct(array $sauceArray)
    {
        $this->id = $sauceArray['id'] ?? 1;
        $this->title = $sauceArray['title'] ?? '';
        $this->price = $sauceArray['price'] ?? 1;
    }

}