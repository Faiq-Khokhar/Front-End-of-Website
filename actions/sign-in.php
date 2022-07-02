<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Checks if user exists or not
$sql = "SELECT * FROM `users` WHERE `email` = '".addslashes($_POST['email'])."'";
$result = $conn->query($sql);

// login in users password matches
if ($result->num_rows > 0) {
  // get data from db
  $row = $result->fetch_assoc();
  // verify password
  if (password_verify($_POST['password'], $row['password'])) {
    session_start();
    $_SESSION['loggedIn'] = true;

  }
  else {
    header('Location: Website/login.php?e=true'); #redirect to sign-in with error
  }
}
else {
  header('Location: Website/login.php?e=true');
}

 ?>
