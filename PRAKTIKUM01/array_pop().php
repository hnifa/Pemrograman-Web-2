<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki']; 
        array_pop($tims); //menghapus elemen array di bagian akhir
        foreach($tims as $person) {
            echo $person. '<br>';
        }
    ?>
</body>
</html>