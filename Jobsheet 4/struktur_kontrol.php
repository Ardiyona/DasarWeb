<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan + $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

echo "Soal Cerita 1";

echo "<br>";

$nilaiSiswa1 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$rataRata = 0;

for($i = 0; $i <count($nilaiSiswa1); $i++) { 
    if ($nilaiSiswa1[$i] > 90) {
        $nilaiSiswa1[$i] = 0;
        continue;
    } elseif ($nilaiSiswa1[$i] < 75) {
        $nilaiSiswa1[$i] = 0;
        continue;
    }
    $totalNilai +=$nilaiSiswa1[$i];
}

$rataRata = $totalNilai / (count($nilaiSiswa1) -2);

echo "Nilai rata-rata: {$rataRata}" ;

echo "<br><br>";

echo "Soal Cerita 2";

echo "<br>";

$harga = 120000;
$diskon = 0;

if($harga > 100000) {
    $diskon = 0.2;
} else {
    $diskon = 0;
}

$hargaDiskon = $harga - ($harga * $diskon);
echo "Harga setelah diskon: {$hargaDiskon}";

echo "<br><br>";

echo "Soal Cerita 3";

echo "<br>";

$skor = 700;

echo "Total skor pemain: {$skor} <br>";

$hadiah = ($skor >= 500) ? "Ya" : "Tidak";

echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah}";
?>