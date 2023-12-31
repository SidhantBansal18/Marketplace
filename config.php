<!-- Setting up and connecting to the database -->
<?php
$host = 'localhost';
$dbname = 'mysql';
$username = 'root';
$password = '';

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Check if the "products" table exists, and create it if it doesn't
  $tableName = 'sidhant_submission';
  $checkTableQuery = "SHOW TABLES LIKE '$tableName'";
  $stmt = $db->query($checkTableQuery);
  $tableExists = $stmt->rowCount() > 0;

  if (!$tableExists) {
    $createTableQuery = "CREATE TABLE $tableName (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      description TEXT NOT NULL,
      price DECIMAL(10, 2) NOT NULL,
      image_path VARCHAR(255),
      is_deleted BOOLEAN DEFAULT false,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $db->exec($createTableQuery);
  }
} catch (PDOException $e) {
  die('Database connection error: ' . $e->getMessage());
}
?>