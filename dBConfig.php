<?php
$serverName="localhost";
$dbName="gaming";
$userName="root";
$password="";
// Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>