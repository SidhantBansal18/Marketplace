<?php
require 'config.php';

class ProductManager {
  // Function to retrieve all products
  public static function getProducts() {
    global $db;
    $stmt = $db->query('SELECT * FROM products WHERE is_deleted = false');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Function that creates product and enters it into the database
  public static function createProduct($name, $description, $price) {
    global $db;

    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
      $targetDirectory = 'uploads/'; // Directory where the uploaded images would be stored
      $filename = basename($_FILES['image']['name']);
      $imagePath = $targetDirectory . $filename;
      move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    $stmt = $db->prepare('INSERT INTO products (name, description, price, image_Path) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $description, $price, $imagePath]);
  }

  // Delete product
  public static function deleteProduct($id) {
    global $db;
    $stmt = $db->prepare('UPDATE products SET is_deleted = true WHERE id = ?');
    $stmt->execute([$id]);
  }

  public static function handlePostRequest() {

    //Create Product
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];

      self::createProduct($name, $description, $price);

      header('Location: adminPage.php');
      exit;
    }

    //Delete Product
    if (isset($_GET['delete'])) {
      $id = $_GET['delete'];

      self::deleteProduct($id);

      header('Location: adminPage.php');
      exit;
    }
  }
}
?>