<?php
function kelulusan($nilai){
    if($nilai > 55) {
        return "Selamat Anda Lulus";
    }
    else {
        return "Maaf Anda Belum Lulus";
    }
}

//Grade Nilai
function grade($nilai){
    if($nilai >= 10) {
        return "E";
    }
    elseif($nilai >= 36) {
        return "D";
    }
    elseif($nilai >= 56) {
        return 'C';
    }
    elseif($nilai >= 70) {
        return 'B';
    }
    elseif($nilai >= 85) {
        return 'A';
    }
    else{
        return 'I (Tidak ada nilai)';
    }
}

//Keterangan
function keterangan($peringkat){ 
    switch ($peringkat){
        case "E": 
            return "Sangat Kurang";
            break;
        case "D": 
            return "Kurang";
            break;
        case "C": 
            return "Cukup";
            break;
        case "B": 
            return "Memuaskan";
            break;
        case "A": 
            return "Sangat Memuaskan";
            break;
        default:
            return "Tidak ada";
    }
}
?>