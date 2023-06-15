<?php
$jsonData = file_get_contents('data.json');
$data = json_decode($jsonData, true);

foreach ($data as $item) {
    echo "Code: " . $item['kode'] . "<br>";
    echo "Name: " . $item['nama'] . "<br>";
    echo "SKS: " . $item['sks'] . "<br>";

    echo "Dosen: " . $item['dosen'] . "<br>";
    echo "<br>";
}
?>
