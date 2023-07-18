<?php
    require 'establishConnections.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include("headerButtons.php"); ?>
    <h1>Admin Panel</h1>
    <?php
        include("adminForm.php");
        include("productsList.php");
    ?>
</body>

</html>