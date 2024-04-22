<!-- HEADER -->


<?php session_start(); ?>

<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="#" class="nav-link px-2">Learning Objectives</a></li>
      <li><a href="quiz.php" class="nav-link px-2">Quiz</a></li>
      <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <?php if ($_SESSION['user']): ?>
        <span><?= $_SESSION['user']['username'] ?> &nbsp&nbsp</span> <!-- if user in sytem, buttons sign in and sign up will be hidden. and user see self username --->
        <a href="vendor/logout.php" class="btn btn-primary">Log Out</a>
      <?php else: ?>
        <a class="btn btn-primary" href="../login.php" role="button">Log in</a>
        <a class="btn btn-primary" href="../reg.php" role="button">Sign-Up</a>
      <?php endif; ?>
    </div>
  </header>
</div>
