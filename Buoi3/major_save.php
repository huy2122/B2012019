<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO major (name_major) VALUES ('".$_POST["name_major"] ."')";

if ($conn->query($sql) == TRUE) {
  echo "Them chuyen nganh thanh cong";
//neu thuc hien thanh cong, chung ta se cho di chuyen den major_index.php
  header('Location: major_index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
