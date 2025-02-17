<?php
$Waktu = ("14:00:00");

if ($Waktu >= date ("00:00:00") && $Waktu < date ("04:00:00"))
{
    echo "Waktu = Dini hari";
}
else if ($Waktu >= date ("04:00:00") && $Waktu < date ("10:00:00"))
{
       echo "Waktu = Pagi hari";
}
else if ($Waktu >= date ("10:00:00") && $Waktu < date ("15:00:00"))
{
       echo "Waktu = Siang hari";
}
else if ($Waktu >= date ("15:00:00") && $Waktu < date ("18:00:00"))
{
       echo "Waktu = Sore hari";
}
else if ($Waktu >= date ("18:00:00") && $Waktu < date ("24:00:00"))
{
    echo "Waktu = Malam hari";
}
else
{
    echo "Waktu = Waktu tidak valid";
}

?>