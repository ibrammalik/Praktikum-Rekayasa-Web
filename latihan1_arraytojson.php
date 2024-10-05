<?php
// Membuat variabel array
$array_data = [
    "nama" => "Maulana Malik Ibrahim",
    "usia" => 21,
    "pekerjaan" => "IT Education",
    "hobi" => ["Membaca", "Bersepeda", "Coding"],
];

// Encode array ke format JSON
$jsonData = json_encode($array_data);
echo "Data dalam format JSON:" . $jsonData;