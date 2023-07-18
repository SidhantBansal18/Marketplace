<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <!-- Create a Product Form -->
        <h2>Create Product</h2>
        <form action="adminPage.php" method="POST" onsubmit="return FormsValidator.validateForm()" enctype="multipart/form-data">
            <input type="text" name="name" id="name" placeholder="Product Name" required>
            <textarea name="description" id="description" placeholder="Product Description" required></textarea>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="file" name="image">
            <button type="submit">Create</button>
        </form>

    </body>
</html>