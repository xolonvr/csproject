<?php
  session_start();
  require_once 'connect.php';

  $topicname = $_POST['topic'];
  $grade = $_POST['grade'] . "grade";
  $img = "img/" . $_POST['img'];
  $ds = $_POST['ds'];

  



    // creating the query
    $query = "INSERT INTO `topics` (`id`, `title`, `grade`, `img_path`, `desciption`) VALUES (NULL, '$topicname', '$grade', '$img', '$ds')";
    // sending the query to the SQL server 
    mysqli_query($connect, $query);
    $_SESSION['message'] = 'Topic is added succesfully';
    header('LOCATION: ../addtopic.php');


  
?>
