<?php
  function special_symbols($ps) {
    $symbols = "!?@#$%^&*()_+-={}[];:<>,./";
    if (strpbrk($ps, $symbols)) {
      return true;
    } 
    return false;
  }

  function numbers($ps) {
    $symbols = "1234567890";
    if (strpbrk($ps, $symbols)) {
      return true;
    } 
    return false;
  }

  function bigl($ps) {
    $symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if (strpbrk($ps, $symbols)) {
      return true;
    } 
    return false;
  }

  function letters($ps) {
    $symbols = "abcdefghijklmnopqrstuvwxyz";
    if (strpbrk($ps, $symbols)) {
      return true;
    } 
    return false;
  }


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

  $is_admin = isset($_POST['root']) && $_POST['root'] === "on"; 
  $root = $is_admin ? 1 : 0;



  // check the passwords to matching
  if ($password === $confirm_password && strlen($password) >= 8 && special_symbols($password) && numbers($password) && bigl($password) && letters($password)) {

    // hasing the password
    $password = md5($password);
    // creating the query
    $query = "INSERT INTO `user` (`uid`, `username`, `root`, `email`, `password`) VALUES (NULL, '$username', '$root', '$email', '$password')";
    // sending the query to the SQL server 
    mysqli_query($connect, $query);
    $_SESSION['message'] = 'Registraion is successful';
    header('LOCATION: ../login.php');


  } else if ($password !== $confirm_password){
    $_SESSION['message'] = "Passwords doesn't match";
    header('LOCATION: ../reg.php');
  } else if (strlen($password) < 8) {
    $_SESSION['message'] = "Password should contain more than 8 symbols";
    header('LOCATION: ../reg.php');
  } else if (!special_symbols($password)) {
    $_SESSION['message'] = "Password should contain at least 1 special symbol like !?@#$%^&*()_+-={}[];:<>,./";
    header('LOCATION: ../reg.php');
  } else if (!numbers($password)) {
    $_SESSION['message'] = "Password should contain at least 1 number";
    header('LOCATION: ../reg.php');
  } else if (!bigl($password)) {
    $_SESSION['message'] = "Password should contain at least 1 upper letter";
    header('LOCATION: ../reg.php');
  } else if (!letters($password)) {
    $_SESSION['message'] = "Password should contain at least 1 letter";
    header('LOCATION: ../reg.php');
  }
?>
