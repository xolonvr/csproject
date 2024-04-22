<!-- MAIN PAGE  -->

<?php session_start(); ?>

<!-- process to get all topics in the db  -->
<?php
  include "vendor/connect.php";
  $query = "SELECT * FROM `topics`";
  $res = mysqli_query($connect, $query);
  $i = 1;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CS Education Platform</title>
  </head>
  <body>
    <?php require "blocks/header.php"; ?>
    <?php if ($_SESSION['user']): ?>
      <div class="container">
        <h2>Hello, <?= $_SESSION['user']['username']; ?></h2>
      </div>
    <?php endif; ?>

    
    <div class="welcoming">
      <img src="img/cs.jpg" class="line"> 
      <div class="wel">
        <h2 id="text">Computer Science Educational Platform</h2>
        <p>&nbsp&nbsp&nbsp&nbspExplore our educational platform tailored for NIS students,<br>delving into fundamental computer science topics crucial for exams,<br>equipping learners with essential knowledge and practical skills.</p>
        <button class="btn btn-primary d-inline-flex align-items-center">
          <a href="#topics" style="color: white; text-decoration: none;">Get Start</a>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
          </svg>
        </button>
      </div>
      <div class="color-overlay"></div>
    </div>
    <div class="top">
    <div id="topics">
    <h2 text-align="center">Topics</h2>
    <?php while ($topic = mysqli_fetch_assoc($res)): ?>
    
      <?php
        $_SESSION['tid'] = $topic['id'];
        $title = $topic['title'];
        $img = $topic['img_path'];
        $g = $topic['grade'];
        $d = $topic['desciption'];
      ?>

      <!-- blocks to automatic creating blocks with data in db  -->
      <div class="b">
        <h3><?php echo $title; ?></h3>
        <img src='<?php echo $img; ?>'>
        <span class="tag">#<?php echo $g; ?></span>
        <p><?php echo $d; ?></p>
        <button class="read-more" id="<?= $_SESSION['tid']; ?>" onclick="getButtonId(this.id)"><a href="topic.php">Read More</a></button>
      </div>

      <?php endwhile; ?>

    </div>
    <?php if(!$_SESSION['user']): ?>
    <div class="overlay"></div>
    <?php endif; ?>
    </div>
    
    <script>
      function getButtonId(buttonId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "vendor/findid.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("buttonId=" + encodeURIComponent(buttonId));
      }
    </script>

    <?php require "blocks/footer.php"; ?>
  </body>
</html>
