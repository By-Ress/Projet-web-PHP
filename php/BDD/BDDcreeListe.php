<h1>Creation Table</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nom VARCHAR(30) NOT NULL,
mail VARCHAR(255) NOT NULL,
message VARCHAR(200) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<a href="../../dossier/admin/admin.php">Base cree revenir en arriere</a>