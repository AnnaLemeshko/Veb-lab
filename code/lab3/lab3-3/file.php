<?php
    if (!isset($_POST['adCategory'], $_POST['adTitle'], $_POST['adEmail'], $_POST['adText'])) {
        return;
    }
    $catName = $_POST['adCategory'];
    $title = $_POST['adTitle'];
    $email = $_POST['adEmail'];
    $text = $_POST['adText'];

    $adFile = fopen('categories/' . $catName . '/' . $title . '.txt', 'w');
    fwrite($adFile, $email . "\n");
    fwrite($adFile, $text);
    fclose($adFile);

    header("Location: lab3-3.php");
?>
