<?php

class Kalkulator
{
    public function tambah($nilaiPertama, $nilaiKedua)
    {
        return $nilaiPertama + $nilaiKedua;
    }

    public function kurang($nilaiPertama, $nilaiKedua)
    {
        return $nilaiPertama - $nilaiKedua;
    }

    public function kali($nilaiPertama, $nilaiKedua)
    {
        return $nilaiPertama * $nilaiKedua;
    }

    public function bagi($nilaiPertama, $nilaiKedua)
    {
        return $nilaiPertama / $nilaiKedua;
    }
}
