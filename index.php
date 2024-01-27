<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require __DIR__.'/vendor/autoload.php';

use Techshark\Classes\Catalog;
use Techshark\Classes\PriceSorter;
use Techshark\Classes\SalesPerViewSorter;

$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];

$productPriceSorter = new PriceSorter();
$productSalesPerViewSorter = new SalesPerViewSorter();

$catalog = new Catalog($products);
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

$data = [
    'message' => "Product data sorted successfully",
    'data' => [
        'Product Sorted By Price' => $productsSortedByPrice,
        'Products Sorted By Sales' => $productsSortedBySalesPerView
    ],
    'success' => true
];
http_response_code(200);
echo json_encode($data);