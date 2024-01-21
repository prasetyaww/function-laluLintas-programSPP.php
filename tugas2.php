<?php

$namaLengkap = "Prasetya Ningrum";
$kelas = "X RPL 1";
$kategori = "Non Beasiswa";
$status = "Menunggak Terlalu Lama";
$tunggakan = 7;
$waktuTunggakan = 6;
$biayaSpp = 700000;
$denda = 100000;

function ProgramSpp(){
    global $namaLengkap, $kelas, $kategori, $status, $tunggakan, $waktuTunggakan, $biayaSpp, $denda;

    if($tunggakan >= $waktuTunggakan){
        $totalSpp = $biayaSpp * $tunggakan + $denda;
    }else{
        $totalSpp = $biayaSpp * $tunggakan;
    }

    if($kategori == "Beasiswa"){
        $totalBayar = $totalSpp *50/100;;
    }else{
        $totalBayar = $totalSpp;
    }

    echo "<h1>=== Program SPP Sederhana ===</h1>";
    echo "Nama Lengkap : $namaLengkap <br />";
    echo "Kelas : $kelas <br />";
    echo "Kategori : $kategori <br />";
    echo "Biaya SPP : Rp $biayaSpp <br />";
    echo "Tunggakan SPP : $tunggakan bulan <br />";
    echo "Total yang harus dibayar : Rp $totalBayar <br />";

    if($status == "Sudah Lunas"){
        echo "status : <span style = 'color : green'> $status </span>";
    }else if($status == "Belum Lunas"){
        echo "status : <span style = 'color : yellow'> $status </span>";
    }else if($status == "Menunggak Terlalu Lama"){
        echo "status : <span style = 'color : red'> $status </span>";
    }

}
echo ProgramSpp();

?>