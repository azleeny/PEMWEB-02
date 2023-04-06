<?php
class Mamalia
{
    public $namahewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$namahewan ini bisa menyusui !";
    }
    function berjalan()
    {
        return "$namahewan ini bisa berjalan !";
    }
}
$objek = new Mamalia;
$objek -> namaHewan = "monyet";
$objek -> warna = "coklat";
$objek -> habitat = "hutan";
$objek -> makanan = "pisang/Buah-buahan";
echo $objek ->bisaMenyusui();