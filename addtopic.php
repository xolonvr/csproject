<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About page</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>
    <div class="block">
        <h2>Add a topic</h2>
        <hr>
        <form action="vendor/at.php" method="post">
            <label for="topic">Topic name: </label>
            <input type="text" name="topic" require><br>
            
            <label for="grade">Grade: </label>
            <input type="number" name="grade" require><br>

            <label for="img">Image name: </label>
            <input type="text" name="img" require><br>

            <label for="ds">Descryption: </label>
            <input type="text" name="ds" require><br><br>

            <button type="submit" name="add" class="button">Add</button><br>
        </form>
    </div>
    <?php require "blocks/footer.php"; ?>
</body>
</html>