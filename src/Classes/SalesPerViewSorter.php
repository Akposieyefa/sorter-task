<?php

namespace Techshark\Classes;

use Techshark\Interface\SorterInterface;

/**
 * SalesPerViewSorter
 */
class SalesPerViewSorter implements SorterInterface
{
    /**
     * @param $products
     * @return mixed
     */
    public function sort($products): mixed
    {
        usort($products, function ($a, $b) {
            $ratioA = $a['sales_count'] / $a['views_count'];
            $ratioB = $b['sales_count'] / $b['views_count'];

            return $ratioA <=> $ratioB;
        });

        return $products;
    }

}