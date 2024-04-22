<!-- QUIZ PAGE  -->

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }

  .content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  h1 {
    font-size: 2em;
    margin-bottom: 10px;
  }


  label {
    margin-right: 10px;
  }


  input[type="submit"] {
    background-color: rgb(74, 119, 234);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: rgb(65, 103, 200);
  }

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Quiz</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>
    <h2>QUIZ</h2>
    <div class="top">
    <div class="content">
    <form action="vendor/check.php" method="post">

        <?php for($i = 1; $i <= 10; $i++): ?>
        <h3>Q<?= $i; ?></h3>
        <input type="radio" id="a1" name="question<?= $i; ?>" value="a"> <label for="a1">A1(correct)</label><br>
        <input type="radio" id="b1" name="question<?= $i; ?>" value="b"> <label for="b1">A2</label><br>
        <input type="radio" id="c1" name="question<?= $i; ?>" value="c"> <label for="c1">A3</label><br>
        <?php endfor; ?>    

        <input type="submit" name='check' value="Проверить ответы" id="pauseBtn">
    </form>
    
    <?php if (isset($_SESSION['results'])): ?>
        <h2>You collected <?= $_SESSION['results']; ?>/<?= $i - 1; ?></h2>
        <?php 
        $uid = $_SESSION['user']['uid'];
        $res = $_SESSION['results'];
        include "vendor/connect.php";
        $query = "INSERT INTO `results` (`id`, `uid`, `score`) VALUES (NULL, '$uid', '$res')";
        $rees = mysqli_query($connect, $query);
        unset($_SESSION['results']);
        ?>
    <?php endif;  ?>
    </div>
    <?php if(!isset($_SESSION['user'])): ?>
        <div class="overlay"></div>
    <?php endif; ?>
    </div>
    <?php require "blocks/footer.php"; ?>
    
</body>
</html>