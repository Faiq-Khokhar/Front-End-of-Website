<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Checks if user exists or not
$sql = "SELECT `uid` FROM `users` WHERE `email` = '".addslashes($_POST['email'])."'";
$result = $conn->query($sql);

// enters into db, if not duplicate
if ($result->num_rows == 0) {
  // encrypt password
  $password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
  // Insert into db
  $sql = "INSERT INTO `users`(`fullname`, `email`, `password`) VALUES
  ('".addslashes($_POST['name'])."','".addslashes($_POST['email'])."',
  '".$password."')";
  $conn->query($sql);
 
}
else {
  header('Location: Website/signup.php?e=true'); # redirect back to sign-up cause error
}

 ?>
