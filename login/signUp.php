<?php
  session_start();
  require '../db/dbHelpers.php';
  
  $fname = $_POST["firstName"];
  $lname = $_POST["lastName"];
  $pass = hash('sha256', $_POST["password"]);
  $email = $_POST["email"];

  $conn = new mysqli($servername, $username, $password, $dbName);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $exists = '(SELECT * FROM Member WHERE email = "' . $email . '")';
  $response = makeQuery($conn, $exists);
  $obj = $response->fetch_object();

  if(is_null($obj) == "True") {
    $user = "INSERT INTO Member VALUES ('" . $email . "', '". $fname ."', '" . $lname . "', '" . $pass . "');";
    makeQuery($conn, $user);
    $conn->close();
    header("Location: /");
  }
  else {
    //user already exists
    $conn->close();
    $_SESSION['login_error'] = "User already exists!";
    header("Location: /login/");
  }
  exit();
?>
