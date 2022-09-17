<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

mysqli_query($conn, "INSERT INTO invoices (order_id, trans_id, name, email, phone) VALUES (14, '12918-131-313', 'farhan', 'farhan.fcbar@gmail.com', '09209372983')");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>