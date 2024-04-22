<!-- THE CORE OF BINARY SEARCH TOPIC -->

<?php
session_start();
// binary search code in php
function binarySearch($arr, $x) {
    $l = 0;
    $r = count($arr) - 1;
  
    while ($l <= $r) {
      $m = floor($l + ($r - $l) / 2);
  
      if ($arr[$m] == $x) {
        return true;
      } elseif ($arr[$m] < $x) {
        $l = $m + 1;
      } else {
        $r = $m - 1;
      }
    }

    return false;
  }
        $target = $_GET["target"];
        $arr = array(1, 4, 6, 12, 32, 45, 95, 126, 145, 234, 235, 342, 422, 432, 509, 536, 541, 683);
        $inarr = binarySearch($arr, $target);
        if ($inarr) {
            $_SESSION["res"] = "Entered integer found in array";
        } else {
            $_SESSION["res"] = "Entered integer doesnt found in array";
        }
        header("LOCATION: ../topic.php");
?>