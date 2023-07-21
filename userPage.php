<!-- The page that a user will see -->
<?php
    require 'commonHeadersAndScripts.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
        <?php include("headerButtons.php"); ?>
        <h1>User Page</h1>
        <h2>Available products in the marketplace</h2>
        <?php
            $purchaseButton = true;
            include("productsList.php");
        ?>
    </body>
</html>