<?php
    $response = "";
    $response .= "<ul>";
    foreach ($_SESSION as $k => $v)
        $response .= "<li>" . $k . "=" . $v;
    $response .= "</ul>";
    echo $response;
?>
