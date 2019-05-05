<?php
require './dbHelpers.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    logVariableWithContext("Error connecting to database: ", $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}
// Create database if it doesn't exist
$createDB = "CREATE DATABASE IF NOT EXISTS " . $dbName;
makeQuery($conn,$createDB);
if ($conn->query($createDB) !== TRUE) {
    logVariableWithContext("Error in creating database: ", $conn->error);
}
else {
    logVariable("Database Up and Running");
}
$conn->close();
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    logVariableWithContext("Error connecting to database: ", $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
} 
//Create tables
$member = "CREATE TABLE IF NOT EXISTS Member(
    email varchar(100) PRIMARY KEY,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    pass varchar(64) NOT NULL
  )";
makeQuery($conn, $member);
$conn->close();
?>
