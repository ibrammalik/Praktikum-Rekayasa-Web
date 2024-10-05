<?php
// Membuat variabel json
$jsonData = '{"nama":"Maulana Malik Ibrahim","usia":21,"pekerjaan":"IT Education","hobi":["Membaca","Bersepeda","Coding"]}';

// Encode array ke format JSON
$jsonObject = json_decode($jsonData);

echo "Mengakses nilai dari PHP Objek:" . "<br>";
echo "Nama: " . $jsonObject->nama . "<br>";
echo "Usia: " . $jsonObject->usia . "<br>";
echo "Pekerjaan: " . $jsonObject->pekerjaan . "<br><br>";

echo "Mengakses Nilai dari PHP Array:" . "<br>";
echo "Hobi:" . "<br>";
foreach ($jsonObject->hobi as $key => $hobi) {
    echo $key + 1 . "." . $hobi . "<br>";
};