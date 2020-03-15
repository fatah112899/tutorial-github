<?php
?>
<html>
<head>
<title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
Kapal Asing, Silahkan identifikasi diri anda!<br>
<?php
$namad = "Jean";
$namat = "Luc";
$namab = "Piccard";
$nilai1=25;
$nilai2=50;
$hasil=$nilai1*$nilai2;
$a=2;
$b=3;
$hsl=pow($a,$b);
?>
<b>Ini adalah kapal Federasi Planet USS Enterprise.<br>
<?php
echo "Saya $namab, $namad $namat $namab, Kapten Kapal,</b><br>";
echo "$nilai1 x $nilai2 = $hasil<br>";
echo "$a^$b = $hsl";
?>
</body>
</html>