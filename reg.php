<!-- Registration PAGE  -->

<?php
  session_start();
  if ($_SESSION['user']) {
    header('LOCATION: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="/js/main.js"></script>
</head>
<body>
    <div class="block">
        <h2>Create an account</h2>
        <hr>
        <form action="vendor/signup.php" method="post">
            Username: <input type="text" name="username" class="field" placeholder="Username" required><br>
            E-Mail: <input type="email" name="email" class="field" placeholder="example@outlook.com" required><br>
            Password:
            <input type="password" name="password"class="pw"placeholder="•••••••" required><br>
            Confirm password:
            <input type="password" name="repassword" class="pw" placeholder="•••••••" required><br>
            <input type="checkbox" onclick="hidesee()"><span id="password-condition">Show password</span>
            <input type="checkbox" required>I agree with policy agreement<br>
            <input type="checkbox" value="on" name="root">I am admin<br>
            <button type="submit" name="reg" class="button">Create an account</button><br>
            Already have an account? <a href="./login.php">Log in</a>
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
