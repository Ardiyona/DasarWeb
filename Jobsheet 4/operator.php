<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo 'Hasil Sama: ';
var_dump($hasilSama);
echo '<br>';
echo 'Hasil Tidak Sama: ';
var_dump($hasilTidakSama);
echo '<br>';
echo 'Hasil Lebih Kecil: ';
var_dump($hasilLebihKecil);
echo '<br>';
echo 'Hasil Lebih Besar: ';
var_dump($hasilLebihBesar);
echo '<br>';
echo 'Hasil Lebih Kecil Sama: ';
var_dump($hasilLebihKecilSama);
echo '<br>';
echo 'Hasil Lebih Besar Sama: ';
var_dump($hasilLebihBesarSama);
echo '<br>';

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo 'Hasil And: ';
var_dump($hasilAnd);
echo '<br>';
echo 'Hasil Or: ';
var_dump($hasilOr);
echo '<br>';
echo 'Hasil Not A: ';
var_dump($hasilNotA);
echo '<br>';
echo 'Hasil Not B: ';
var_dump($hasilNotB);
echo '<br>';

$a += $b;
echo "a += b: {$a} <br>";
$a = 10;
$a -= $b;
echo "a -= b: {$a} <br>";
$a = 10;
$a *= $b;
echo "a *= b: {$a} <br>";
$a = 10;
$a /= $b;
echo "a /= b: {$a} <br>";
$a = 10;
$a %= $b;
echo "a %= b: {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";

$kursi = 45;
$sisaKursi = (($kursi - 28) / $kursi) * 100;
echo "Sisa kursi dalam bentuk persen: {$sisaKursi} <br>";
?>