<?php
$profileArray = [
"nama" => "azleeny", 
"semester" => 2
];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "azleeny",
        "semester" => 2
    ], [
        "nama" => "Lee haechan",
        "semester" => 6
    ]
    ];
    foreach($profileMultiArray as $profile) {
        echo $profile ['nama'] . "<br>";
        echo $profile ['semester'] . "<br>";
    }
