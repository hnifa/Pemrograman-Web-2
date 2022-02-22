<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Sort</title>
</head>
<body>
    <?php
        $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
        echo '<ol>';
        foreach($ar_buah as $k => $v) {
            echo '<li?> ' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';

        sort($ar_buah); //urutan a-z
        echo '<ol>';
        foreach($ar_buah as $k => $v) {
            echo '<li>' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';

        arsort($ar_buah); //urutan z-a
        echo '<ol>';
        foreach($ar_buah as $k => $v) {
            echo '<li>' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';
    ?>
</body>
</html>