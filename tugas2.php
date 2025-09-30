<?php
$mahasiswa = [
    ["nama" => "Andi", "nilai" => 85],
    ["nama" => "Budi", "nilai" => 72],
    ["nama" => "Citra", "nilai" => 65],
    ["nama" => "Dewi", "nilai" => 90],
    ["nama" => "Eko", "nilai" => 55],
    ["nama" => "Fajar", "nilai" => 78],
    ["nama" => "Gita", "nilai" => 40],
];

$lulus = 0;
$tidakLulus = 0;

echo "<h3>Daftar Nilai Mahasiswa</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th><th>Grade</th><th>Status</th></tr>";

foreach ($mahasiswa as $mhs) {
    $nilai = $mhs["nilai"];

    if ($nilai >= 80) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    if ($nilai >= 60) {
        $status = "Lulus";
        $lulus++;
    } else {
        $status = "Tidak Lulus";
        $tidakLulus++;
    }

    echo "<tr>
            <td>{$mhs['nama']}</td>
            <td>{$nilai}</td>
            <td>{$grade}</td>
            <td>{$status}</td>
          </tr>";
}

echo "</table>";

echo "<br><b>Jumlah Mahasiswa Lulus:</b> $lulus<br>";
echo "<b>Jumlah Mahasiswa Tidak Lulus:</b> $tidakLulus<br>";

echo "<br><h3>Contoh Perulangan Tambahan (Nilai 100 - 110)</h3>";
for ($i = 100; $i <= 110; $i++) {
    echo $i . " ";
}
?>
