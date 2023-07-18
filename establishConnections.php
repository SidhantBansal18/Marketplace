<?php
require 'config.php';
require 'productManager.php';

$products = ProductManager::getProducts();
ProductManager::handlePostRequest()
?>

<!DOCTYPE html>
<head></head>
<body>
    <script src="FormsValidator.js"></script>
    <script src="buttonsNavigation.js"></script>
</body>