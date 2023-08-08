<?php

class perhitungan{

    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;

    function LuasPersegi($sisi){
        $hasil = $sisi * $sisi;
        return "Hasil Luas Persegi : " . $hasil . "<br>";
    }
    function LuasPersegiPanjang($panjang, $lebar){
        $hasil = $panjang * $lebar;
        return "Hasil Luas Persegi Panjang : " . $hasil . "<br>";
    }
    function LuasSegitiga($alas, $tinggi){
        $hasil = 0.5 * $alas * $tinggi;
        return "Hasil Luas Segitiga : " . $hasil . "<br>";
    }
}

?>
