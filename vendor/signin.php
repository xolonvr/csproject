<!-- SIGN IN PROCESS PAGE  -->

<?php
  session_start();
  require_once 'connect.php';

  // getting username 
  $username = $_POST['username'];
  // getting password 
  $password = $_POST['password'];
  // hash the password 
  $password = md5($password);
  // creating the query to sign in with entered data 
  $query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
  // sending query to SQL server 
  $check_user = mysqli_query($connect, $query);
  if (mysqli_num_rows($check_user) > 0) {
    // checking the count of users with this data 
    $user = mysqli_fetch_assoc($check_user);
    // creating the session user 
    $_SESSION['user'] = [
      "uid" => $user['uid'],
      "username" => $user['username'],
      "email" => $user['email']
    ];
    header('LOCATION: ../index.php');
  } else {
    $_SESSION['message'] = "Doesn't exist";
    header('LOCATION: ../login.php');
  }
?>
