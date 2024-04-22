<!-- PAGE TO RENDER TOPICS  -->

<?php 
    session_start();
    include "vendor/connect.php";
    $query = "SELECT `id`, `title` FROM `topics` WHERE `id` = '{$_SESSION['topicid']}'";
    $res = mysqli_query($connect, $query);
    $topic = mysqli_fetch_assoc($res);
    $title = $topic['title'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <?php include "blocks/header.php"; ?>

    <?php if ($_SESSION['topicid'] == "1"): ?>
        <?php include "topics/binarysearch.php"; ?>
    <?php endif; ?>

    <?php if ($_SESSION['topicid'] == "2"): ?>
        <?php include "topics/quicksort.php"; ?>
    <?php endif; ?>

    <?php if ($_SESSION['topicid'] == "3"): ?>
        <?php include "topics/array2d.php"; ?>
    <?php endif; ?>

    <?php if ($_SESSION['topicid'] == "4"): ?>
        <?php include "topics/nestedloops.php"; ?>
    <?php endif; ?>

    <?php include "blocks/footer.php"; ?>
</body>
</html>