<!-- FIGURE OUT THE CHOOSEN TOPIC ID -->

<?php
    session_start();
    $buttonId = $_POST['buttonId'];
    $_SESSION["topicid"] = $buttonId;
?>