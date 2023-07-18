<!DOCTYPE html>
<html>
    <head>
        <title>Products List</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <!-- List available products -->
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
                <button>Purchase</button>            
            </div>
        <?php endforeach; ?>

    </body>
</html>