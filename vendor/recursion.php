<!-- THE CORE OF RECURSION TOPIC -->

<?php
    session_start();
    // finding factorial of number with recursion: code in php  
    function factorial($x) {
        if ($x == 0) {
            return 1;
        } elseif ($x == 1) {
            return 1;
        }
        return $x * factorial($x - 1);
    }

    $num = $_GET['num'];
    $_SESSION['res'] = factorial($num);
    header("LOCATION: ../topic.php");
?>