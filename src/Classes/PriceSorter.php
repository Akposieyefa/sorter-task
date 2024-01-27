<?php

namespace Techshark\Classes;

use Techshark\Interface\SorterInterface;

/**
 * PriceSorter
 */
class PriceSorter implements SorterInterface
{
    /**
     * @param $products
     * @return mixed
     */
    public function sort($products): mixed
    {
        usort($products, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return $products;
    }

}