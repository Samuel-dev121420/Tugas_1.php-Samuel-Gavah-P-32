<?php
$nilai = -3;

if ($nilai >= 80) {
    echo "A";
} 
else if ($nilai >= 70 && $nilai <= 79) {
    echo "C";
} 
else if ($nilai >= 1 && $nilai <= 69) {
    echo "D";
} 
else if ($nilai == 0) {
    echo "Nilai tidak boleh 0";
} 
else {
    echo "Nilai tidak boleh negatif";
}


?>