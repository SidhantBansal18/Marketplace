<!DOCTYPE html>
<html>
<head>
    <title>Checkout Form</title>
</head>
<body>
    <h1>Checkout</h1>
    <form action="purchase.php" method="POST" onsubmit="purchaseProduct()">
        <label for="product">Product:</label>
        <input type="text" name="product" id="product" value="<?php echo $_GET['product'] ?? ''; ?>" required> <br /> <br />

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required> <br /> <br />

        <label for="address">Shipping Address:</label>
        <textarea name="address" id="address" required></textarea> <br /> <br />

        <button type="submit">Purchase</button>
    </form>

    <script>
        function purchaseProduct(){
            event.preventDefault(); 
            alert('Thank you for purchasing the product ');
            window.location.href = "userPage.php";
        }
    </script>
</body>
</html>
