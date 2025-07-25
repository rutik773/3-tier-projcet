<?php
// Replace these with your actual DB credentials
$servername = "database-1.ctusuaa0abk5.ap-south-1.rds.amazonaws.com";
$username = "root";
$password = "rutik0705";
$dbname = "facebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$id = isset($_POST['id']) ? intval($_POST['id']) : null;
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$website = htmlspecialchars(trim($_POST['website']));
$comment = htmlspecialchars(trim($_POST['comment']));
$gender = htmlspecialchars(trim($_POST['gender']));

// Prepare SQL statement
$sql = "INSERT INTO users (id, name, email, website, comment, gender) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("isssss", $id, $name, $email, $website, $comment, $gender);

// Execute the statement
if ($stmt->execute()) {
  echo "<h2>Thank you! Your data has been submitted.</h2>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
