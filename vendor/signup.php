<?php
  session_start();
  require_once 'connect.php';
  // getting username 
  $username = $_POST['username'];
  // getting email 
  $email = $_POST['email'];
  // getting password 
  $password = $_POST['password'];
  // getting second password
  $confirm_password = $_POST['repassword'];

  // check the passwords to matching
  if ($password === $confirm_password) {

    // hasing the password
    $password = md5($password);
    // creating the query
    $query = "INSERT INTO `user` (`uid`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";
    // sending the query to the SQL server 
    mysqli_query($connect, $query);
    $_SESSION['message'] = 'Registraion is successful';
    header('LOCATION: ../login.php');


  } else {
    $_SESSION['message'] = "Passwords doesn't match";
    header('LOCATION: ../reg.php');
  }
?>
