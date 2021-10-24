<?php
include '../db.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$page = $_GET['page'];

$sql = "SELECT * FROM user limit 10";
$result = $conn->query($sql);

$finalData = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $finalData[] = $row;
  }
}
echo json_encode($finalData);
