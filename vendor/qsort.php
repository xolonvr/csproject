<!-- THE CORE OF QUICK SORT TOPIC -->

<?php
    session_start();
    // quick sort code in php 
    function quicksort($array){
        if(count($array) < 2){
            return $array;
        }
        $left = $right = array();
        reset($array);
        $pivot_key = key($array);
        $pivot = array_shift($array);
        foreach($array as $k => $v){
            if($v < $pivot)
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }
        return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
    }

    $arr = array(33, 6, 85, 101, 12, 1, 124, 1934, 213, 94, 3, 324, 43, 5, 1, 534, 34);
    $res = quicksort($arr);
    $strres = "";
    for($i = 0; $i <= count($arr); $i++) {
        $strres = $strres . " " . $res[$i];
    }
    $_SESSION['sres'] = $strres;
    
    header("LOCATION: ../topic.php");
?>