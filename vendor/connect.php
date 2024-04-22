<!-- CONNECTION TO db -->

<?php
  $connect = mysqli_connect("localhost", "root", "root", "csproject");

  if (!$connect) {
    die("Connect error with DataBase");
  }
?>
