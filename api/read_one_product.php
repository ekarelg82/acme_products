<?php

// include core configuration
include_once '../config/core.php';

// include database connection
include_once '../config/database.php';

// product object
include_once '../objects/product.php';

// class instance
$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

// read one products

$product->id = $_GET['prod_id'];
$results = $product->readOne();

// output in json format
echo $results;