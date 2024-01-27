<?php

namespace Techshark\Classes;

use Techshark\Interface\SorterInterface;

/**
 * Catalog
 */
class Catalog
{
    /**
     * @var array
     */
    public array $products;

    /**
     * @param array $products
     */
    public function __construct(array $products) {
        $this->products = $products;
    }

    /**
     * @param SorterInterface $sorter
     * @return mixed
     */
    public function getProducts(SorterInterface $sorter): mixed
    {
        return $sorter->sort($this->products);
    }

}