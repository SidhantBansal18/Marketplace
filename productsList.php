<?php
    // Check if the variable indicating the button should be hidden or not
    $deleteButton = isset($deleteButton) ? $deleteButton : false;
    $purchaseButton = isset($purchaseButton) ? $purchaseButton : false;
?>

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

                <!-- Hiding it if a user is accessing this page and enabling it if an admin is accessing this page -->
                <?php if ($deleteButton): ?>
                    <a href="adminPage.php?delete=<?php echo $product['id']; ?>">Delete</a>
                <?php endif; ?>

                <img src="<?php echo $product['image_path']; ?>" alt=<?php echo $product['name']?>>

                <!-- Hiding it if an admin is accessing this page and enabling it if a user is accessing this page -->
                <?php if($purchaseButton): ?>
                    <a href="checkoutForm.php?product=<?php echo $product['name']; ?>">Purchase</a>        
                <?php endif; ?>    

            </div>
        <?php endforeach; ?>
        
    </body>
</html>