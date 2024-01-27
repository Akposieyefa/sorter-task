<?php

namespace Techshark\Interface;

/**
 * SorterInterface
 */
interface SorterInterface
{
    /**
     * @param $products
     * @return mixed
     */
    public function sort($products): mixed;
}