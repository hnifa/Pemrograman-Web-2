<?php
class Mahasiswa{
    var $ipk;
    var $nama;
    var $nim;
    var $prodi;
    var $thn_angkatan;
    
    function __construct($nim, $nama, $prodi, $thn_angkatan, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->thn_angkatan = $thn_angkatan;
        $this->ipk = $ipk;
    }
    function predikat_ipk()
    {
        if ($this->ipk < 2.0) return 'Cukup';
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return 'Baik';
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.7) return 'Memuaskan';
        elseif ($this->ipk > 3.75 && $this->ipk <= 4.0) return 'Cum Laude';
        else return 'Tidak teridentifikasi';
    }
}
?>