<?php
    if(!isset($_SESSION["Name"]) || !isset($_SESSION["Surname"]) || !isset($_SESSION["Age"])){
        http_response_code(401));
        echo "Bad connection":
        return;
    }
    if(!isset($_SESSION["Name"]) && !isset($_SESSION["Surname"]) && !isset($_SESSION["Age"])){
        echo "I {$_SESSION["Name"]} {$_SESSION["Surname"]}. {$_SESSION["Age"]} years old.";
    }
?>
