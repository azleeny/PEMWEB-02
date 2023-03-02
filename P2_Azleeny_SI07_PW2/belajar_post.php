<?php
$nama = $_POST['nama'];
$jenis_keliamin = $_POST['jenis_kelamin'];
$hobi = $_POST['Hobi'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

echo "<h2>From Pendaftaran</h2><br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_keliamin . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "NIM : " . $nim . "<br>";
echo "Program Studi : " . $prodi;