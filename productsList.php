<?php
    // Check if the variable indicating the button should be hidden is set
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

                <?php if ($deleteButton): ?>
                    <a href="adminPage.php?delete=<?php echo $product['id']; ?>">Delete</a>
                <?php endif; ?>

                <img src="<?php echo $product['image_path']; ?>" alt=<?php echo $product['name']?>>

                <?php if($purchaseButton): ?>
                    <a href="checkoutForm.php?product=<?php echo $product['name']; ?>">Purchase</a>        
                <?php endif; ?>    

            </div>
        <?php endforeach; ?>
        
    </body>
</html>