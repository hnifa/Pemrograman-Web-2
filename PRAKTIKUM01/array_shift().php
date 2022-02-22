<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
        array_shift($tims); //menghapus elemen array di bagian awal
        foreach($tims as $person) {
            echo $person. '<br>';
        }
    ?>
</body>
</html>