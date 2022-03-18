<?php
    $categories = opendir('categories');
    $catNameList = [];
    $adsDict = [];
    while ($catName = readdir($categories)) {
        if (is_dir('categories/' . $catName) && $catName != '.' && $catName != '..') {
            $catNameList[] = $catName;
            $adsDict[$catName] = [];
        }
    }
    foreach ($catNameList as $catName) {
        $catDir = opendir('categories/' . $catName);
        while ($fName = readdir($catDir)) {
            if ($fName != '.' && $fName != '..') {
                $fPathName = 'categories/' . $catName . '/' . $fName;
                $file = fopen($fPathName, 'r');
                $title = substr($fName, 0, strlen($fName) - 4);
                $email = fgets($file);
                $text = "";
                while (!feof($file)) {
                    $text .= fgets($file) . "\n";
                }
                fclose($file);
                $adsDict[$catName][] = ['title' => $title, 'email' => $email, 'text' => $text];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Adboard (lab3 lab3-3 )
    </title>
    <meta charset="UTF-8">
</head>

<body>
    <form name="userAd" action="file.php" method="post">
        <label>
            Добавить
        </label>
        <br>
        <br>
        <label>
            Категория:
        </label>
        <br>
        <select name="adCategory">
            <?php
            foreach ($catNameList as $catName) {
                echo "<option>" . $catName . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <label>
            Название:
        </label>
        <input name="adTitle">
        <br>
        <br>
        <label>
            Email:
        </label>
        <input name="adEmail">
        <br>
        <br>
        <label>
            Текст:
        </label>
        <br>
        <textarea name="adText" rows="20" cols="100">
        </textarea>
        <br>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <p>Список:</p>
    <table border="1">
        <tr>
            <th>
                Категория:
            </th>
            <th>
                Название:
            </th>
            <th>
                Email:
            </th>
            <th>
                Текст:
            </th>
        </tr>
        <?php
        foreach ($adsDict as $catyName => $catData) {
            foreach ($catData as $tEmailText) {
                echo "<tr>";
                echo "<td>" . $catName . "</td>";
                echo "<td>" . $tEmailText['title'] . "</td>";
                echo "<td>" . $tEmailText['email'] . "</td>";
                echo "<td>" . $tEmailText['text'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
