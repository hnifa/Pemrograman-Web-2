<?php
require_once 'libfungsi.php';

$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$nilai = ($uts * 30/100) + ($uas * 35/100) + ($tugas * 35/100); 
$hasil_ujian = kelulusan ($nilai);
$peringkat = grade($nilai);
$keterangan = keterangan($peringkat);

echo 'Proses : '.$proses;
echo '<br> Nama : '.$nama;
echo '<br> Mata Kuliah : '.$matkul;
echo '<br> Nilai UTS : '.$uts;
echo '<br> Nilai UAS : '.$uas;
echo '<br> Tugas : '.$tugas;
echo '<br> Nilai Total : '.$nilai;
echo '<br> Hasil Ujian : '.$hasil_ujian;
echo '<br> Peringkat : '.$peringkat;
echo '<br> Keterangan : '.$keterangan;
echo '<br><hr>';
?>