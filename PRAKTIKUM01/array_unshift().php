<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
        array_unshift($tims, 'Joko', 'Wati'); //menambahkan elemen array di bagian awal
        foreach($tims as $person) {
            echo $person. '<br>';
        }
    ?>
</body>
</html>