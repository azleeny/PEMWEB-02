<?php

$arrayBuah = ["jeruk","manggis","apel","pepaya","durian"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array yg terakhir
array_pop($arrayBuah);

//buat ngapus variable ataupun spesifikasvalue array
unset($arrayBuah[1]);

//buat nambahin value array di paling akhir
array_push($arrayBuah,"Rambutan");

//buat ngapus value array paling awal
array_shift($arrayBuah);

//menambahkan value array di paling awal
array_unshift($arrayBuah, "semangka");

//mengubah value array dg spesifik key/index
$arrayBuah[1] = "anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}