<!-- THE CORE OF NESTED LOOPS TOPIC -->

<?php
    session_start();
    $h = $_GET['h'];
    $w = $_GET['w'];
    $res = "";
    for($i = 0; $i <= $h; $i++) {
        for($j = 0; $j <= $w; $j++) {
            $res = $res . "*";
        }
        $res = $res . "\n";
    }

    $_SESSION["res1"] = $res;
    header("LOCATION: ../topic.php");
?>