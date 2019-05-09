<?php
  session_start();
  require '../db/dbHelpers.php';
  
  $pass = hash('sha256', $_POST["password"]);
  $email = $_POST["email"];

  $conn = new mysqli($servername, $username, $password, $dbName);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $exists = '(SELECT * FROM Member WHERE email = "' . $email . '")';
  $response = makeQuery($conn, $exists);
  $obj = $response->fetch_object();

  if(!(is_null($obj) == "True")) {
    if($obj->pass.strcmp($pass)) {
      //correct password
      $conn->close();
      unset($_SESSION['login_error']);
      $_SESSION['firstName'] = $obj->firstName;
      $_SESSION['lastName'] = $obj->lastName;
      $_SESSION['email'] = $obj->email;
      header("Location: /");
    }
    else {
      //incorect password
      $conn->close();
      $_SESSION['login_error'] = "Invalid Password!";
      header("Location: /login/");
    }
    makeQuery($conn, $user);
    $conn->close();
    unset($_SESSION['login_error']);
    header("Location: /");
  }
  else {
    //user doesn't exist exists
    $conn->close();
    $_SESSION['login_error'] = "Invalid Login!";
    header("Location: /login/");
  }
  exit();
?>