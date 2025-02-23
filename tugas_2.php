<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Andi tugas Samuel dan Rizky</title>
    <style>
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: black;
            text-align: center;
        }
        h2 {
            color: black
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container";>

    <h1>Jadwal Harian Andi</h1>

    <p><b>04.15:</b> Andi bangun</p>
    <p><b>04.15-04.25:</b> Andi cuci muka dan mengumpulkan jiwa</p>
    <p><b>04.26-04.40:</b> Andi sholat pagi</p>
    <p><b>04.40-05.00:</b> Andi Mandi dan memakai seragam</p>
    <p><b>05.00-05.10:</b> Andi makan bersama keluarga</p>
    <p><b>05.10-05.20:</b> Andi mempersiapkan buku</p>
    <p><b>05.20-05.30:</b> Andi bersiap-siap dengan bawaan</p>
    <p><b>05.30-06.00:</b> Andi istirahat</p>
    <p><b>06.00-06.30:</b> Andi berangkat ke sekolah</p>
    <p><b>06.30-07.00:</b> Andi bermain dengan teman</p>
    <p><b>07.00-15.30:</b> Andi sekolah</p>
    <p><b>15.30:</b> Andi pulang sekolah</p>
    <p><b>15.45:</b> Andi sampai rumah</p>
    <p><b>15.45-15.50:</b> Andi istirahat</p>
    <p><b>15.50-16.00:</b> Andi mandi</p>
    <p><b>16.00-16.30:</b> Andi mengaji</p>
    <p><b>16.30-16.40:</b> Andi istirahat</p>
    <p><b>16.40-17.00:</b> Andi membeli bumbu masakan</p>
    <p><b>17.00-17.30:</b> Andi chatting</p>
    <p><b>17.30-18.00:</b> Andi istirahat</p>
    <p><b>18.10-18.30:</b> Andi makan</p>
    <p><b>18.30-20.30:</b> Andi mengerjakan tugas</p>
    <p><b>20.30-21.00:</b> Andi mengobrol dengan keluarga</p>
    <p><b>21.00-04.15:</b> Andi tidur</p>
    <br>
    <h2>Soal :</h2>
    <p> 1. Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan?</p>
    <p> 2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut!</p>
    <p> 3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?</p>
    <p> 4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?</p>
    <p> 5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?</p>
    <br>
    <h2>Jawaban</h2>
    <p> 1. Menurut Saya (Samuel) dan Rizky yang perlu diperhatikan saat membuat schedule adalah prioritas dan durasi kegiatan tugas yang diberikan dan waktu istirahat untuk kenyamananan dan menunjukan rasa kemanusiaan </p>
    <p> 2. Simpel kami menentukan schedule yang memberikan waktu santai ke andi sambil tetap memberikan kegiatan dan peraturan yang sudah ditentukan </p>
    <p> 3. Saya (Samuel) dan Rizky memutuskan untuk menentukan jam chatting di jam "17:00 sampai 17:30" </p>
    <p> 4. Tentu kami sudah menentukan waktu santai yang cukup untuk Andi </p>
    <p> 5. Jika Andi tidak memiliki tugas sekolah maka kemungkinan Andi bisa memiliki waktu istirahat lebih banyak sekitar 2 jam dan beberapa runkdown berikutnya bisa dipercepat </p>


</body>
</html>

<?php
$Waktu = ("19:00:00");

echo "<h2>Waktu Saat Ini: $Waktu</h2>";
echo "<h2>Kegiatan Andi:</h2>";

if ($Waktu >= '21:00' || $Waktu < '04:15') {
    echo "Andi : tidur";
} elseif ($Waktu == '04:15') {
    echo "Andi : bangun";
} elseif ($Waktu >= '04:15' && $Waktu < '04:25') {
    echo "Andi : cuci muka dan mengumpulkan jiwa";
} elseif ($Waktu >= '04:26' && $Waktu < '04:40') {
    echo "Andi : Sholat shubuh";
} elseif ($Waktu >= '04:40' && $Waktu < '05:00') {
    echo "Andi : mandi dan pakai baju";
} elseif ($Waktu >= '05:00' && $Waktu < '05:10') {
    echo "Andi : makan";
} elseif ($Waktu >= '05:10' && $Waktu < '05:20') {
    echo "Andi : mempersiapkan buku";
} elseif ($Waktu >= '05:20' && $Waktu < '05:30') {
    echo "Andi : bersiap siap";
} elseif ($Waktu >= '05:30' && $Waktu < '06:00') {
    echo "Andi : istirahat";
} elseif ($Waktu >= '06:00' && $Waktu < '06:30') {
    echo "Andi : berangkat ke sekolah";
} elseif ($Waktu >= '06:30' && $Waktu < '07:00') {
    echo "Andi : bermain dengan teman";
} elseif ($Waktu >= '07:00' && $Waktu < '15:30') {
    echo "Andi : sekolah";
} elseif ($Waktu == '15:30') {
    echo "Andi : pulang sekolah";
} elseif ($Waktu == '15:45') {
    echo "Andi : sampai rumah";
} elseif ($Waktu >= '15:45' && $Waktu < '15:50') {
    echo "Andi : istirahat";
} elseif ($Waktu >= '15:50' && $Waktu < '16:00') {
    echo "Andi : mandi";
} elseif ($Waktu >= '16:00' && $Waktu < '16:30') {
    echo "Andi : mengaji";
} elseif ($Waktu >= '16:30' && $Waktu < '16:40') {
    echo "Andi : Istirahat";
} elseif ($Waktu >= '16:40' && $Waktu < '17:00') {
    echo "Andi : membeli bumbu masakan";
} elseif ($Waktu >= '17:00' && $Waktu < '17:30') {
    echo "Andi : chating";
} elseif ($Waktu >= '17:30' && $Waktu < '18:00') {
    echo "Andi : istirahat";
} elseif ($Waktu >= '18:10' && $Waktu < '18:30') {
    echo "Andi : makan";
} elseif ($Waktu >= '18:30' && $Waktu < '20:30') {
    echo "Andi : mengerjakan tugas";
} elseif ($Waktu >= '20:30' && $Waktu < '21:00') {
    echo "Andi : mengobrol dengan keluarga";
} else {
    echo "Andi ga ada jadwal, istirahat wir.";
}
?>