<?php
require 'config.php';
require 'productManager.php';

$products = ProductManager::getProducts();
ProductManager::handlePostRequest()

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Admin Panel</h1>

    <!-- Create a Product Form -->
    <h2>Create Product</h2>
    <form action="adminPage.php" method="POST" onsubmit="return FormsValidator.validateForm()" enctype="multipart/form-data">
        <input type="text" name="name" id="name" placeholder="Product Name" required>
        <textarea name="description" id="description" placeholder="Product Description" required></textarea>
        <input type="number" name="price" id="price" placeholder="Product Price" required>
        <input type="file" name="image">
        <button type="submit">Create</button>
    </form>

    <!-- List available products -->
    <h2>Product List</h2>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3>
                <?php echo $product['name']; ?>
            </h3>
            <p>
                <?php echo $product['description']; ?>
            </p>
            <p>Price: $
                <?php echo $product['price']; ?>
            </p>
            <a href="adminPage.php?delete=<?php echo $product['id']; ?>">Delete</a>
            <img src="<?php echo $product['image_path']; ?>" alt=<?php echo $product['name']?>>            
        </div>
    <?php endforeach; ?>

    <script src="FormsValidator.js"></script>
</body>

</html>