<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    
<?php
$x = 10;
$y = 5;

function penjumlahan($x, $y) {
    $z = $x + $y;
    return $z;
}

function pengurangan($x, $y) {
    $z = $x - $y;
    return $z;
}

function pembagian($x, $y) {
    $z = $x / $y;
    return $z;
}

function perkalian($x, $y) {
    $z = $x * $y;
    return $z;
}

function modulus($x, $y) {
    $z = $x % $y;
    return $z;
}
?>

Bilangan 1 = <?php echo "$x";?><br>
Bilangan 2 = <?php echo "$y";?><br>

<p>Berikut merupakan hasil dari setiap operasi : </p>

PENJUMLAHAN<br>
Operasi : +<br>
Hasil   : <?php echo penjumlahan($x,$y);?><br>
<p></p>

PENGURANGAN<br>
Operasi : -<br>
Hasil   : <?php echo pengurangan($x,$y);?><br>
<p></p>

PERKALIAN<br>
Operasi : *<br>
Hasil   : <?php echo perkalian($x,$y);?><br>
<p></p>

PEMBAGIAN<br>
Operasi : /<br>
Hasil   : <?php echo pembagian($x,$y);?><br>
<p></p>

MODULUS<br>
Operasi : %<br>
Hasil   : <?php echo modulus($x,$y);?><br>

</body>
</html>