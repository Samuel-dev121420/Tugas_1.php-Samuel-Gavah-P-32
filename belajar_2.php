<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Day 2</title>
    <style>
    </style>
</head>
<body>
    <div>
        <h1 style="color:black; font-size: 25pt;">
            Halo
        </h1>
        <h2 style="color:aqua; font-style: italic; font-size: 15pt;">
            Namaku Mio
        </h2>
    </div>
</body>
</html>

<?php

$angka1 = 3;
$angka2 = 5;
$penjumlahan = $angka1 + $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$pengurangan = $angka2 - $angka1;

echo $angka1 . "+" . $angka2 . "=" . $penjumlahan;
echo "<br> $angka1 x $angka2 = $perkalian";
echo "<br> $angka1 : $angka2 = $pembagian";
echo "<br> $angka2 - $angka1 = $pengurangan";
echo "<br> $angka1<sup>$angka2</sup> = "; //sup itu untuk angka pangkat
echo pow ($angka1,$angka2); //pow itu rumus pangkat di php
?>