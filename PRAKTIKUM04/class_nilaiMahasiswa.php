<?php
class nilaiMahasiswa{
    var $nama;
    var $nim;
    var $matkul;
    var $nilai;
    
    function __construct($nim, $nama, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }
    function grade() {
        if ($this->nilai > 0 && $this->nilai <= 35) return 'E';
        elseif ($this->nilai >= 36 && $this->nilai <= 55) return 'D';
        elseif ($this->nilai >= 56 && $this->nilai <= 69) return 'C';
        elseif ($this->nilai >= 70 && $this->nilai <= 84) return 'B';
        elseif ($this->nilai >= 85 && $this->nilai <= 100) return 'A';
        else return 'Tidak teridentifikasi';
    }
    function hasil() {
        if ($this->nilai >= 56) return 'LULUS';
        else return 'TIDAK LULUS';
    }
}
?>