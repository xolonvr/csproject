<!-- AUTHORIZATION PAGE  -->

<?php
  session_start();
  if ($_SESSION['user']) {
    header('LOCATION: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="./js/main.js"></script>
</head>
<body>
    <div class="block">
        <h2>Log in to account</h2>
        <hr>
        <form action="vendor/signin.php" method="post">
            Username: <input type="text" name="username" class="field" placeholder="Username" required><br>
            Password: <input type="password" name="password"class="pw"placeholder="•••••••" required><br>
            <input type="checkbox" onclick="hidesee()"><span id="password-condition">Show password</span><br>
            <button type="submit" name="reg" class="button">Log In</button><br>
            Have not an account? <a href="./reg.php">Sign up</a>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>
