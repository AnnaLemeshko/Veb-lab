<?php
    if(!isset($_POST["Name"]) || !isset($_POST["Surname"]) || !isset($_POST["Age"])){
        http_response_code(400));
        echo "Incorrect input";
        return;
    }
    if(!session_start()){
        http_response_code(500));
        echo "Server error";
        return;
    }
    $SESSION["Name"] = $_POST["Name"];
    $SESSION["Surname"] = $_POST["Surname"];
    $SESSION["Age"] = $_POST["Age"];
    header("Refresh:3; url=output.php");
?>
