<?php

namespace lib\Size;

/**
 * Class Size
 */
class Size
{
    public int $id;
    public int $size;
    public float $coefficient;

    /**
     * Size constructor.
     * @param array $sizeArray
     */
    public function __construct(array $sizeArray)
    {
        $this->id = (int)$sizeArray['id'];
        $this->size = (int)$sizeArray['size'];
        $this->coefficient = (float)$sizeArray['coefficient'];
    }

}