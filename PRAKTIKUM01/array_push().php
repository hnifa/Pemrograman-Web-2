<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
        array_push($tims, 'Wati'); //menambahkan elemen array di bagian akhhir
        foreach($tims as $person) {
            echo $person. '<br>';
        }
    ?>
</body>
</html>