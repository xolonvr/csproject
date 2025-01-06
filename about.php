<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About page</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>
    <div class="container" style="margin-top: 6rem; margin-bottom: 6rem;">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="img/me.jpg" width="378px" height="378px" class="rounded-circle mx-4">
            </div>
            <div class="col-md-8">
                <div class="p-4 border border-2 rounded bg-light text-center">
                    <h2>About Me</h2>
                    <p style="font-size: 22px; text-align: justify;">My name is Adilzhan Khamitov. I'm a 12th-grade student of the Nazarbaev Intellectual School in Uralsk. My purpose is to improve and change the actual system of the viewing learning objectives and education. My product will consist of all topics related to Computer Science for all grades, and students can test their own abilities.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require "blocks/footer.php"; ?>
</body>
</html>