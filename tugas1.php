<?php

function lampuLaluLintas($nomor, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8, $kt9, $kt10){
    for($nomor; $nomor <= $kondisiTerminasi; $nomor++){ 
        if($nomor == $kt1 || $nomor == $kt2 || $nomor == $kt4 || $nomor == $kt6 || $nomor == $kt10){
            echo "Lampu Lalu Lintas no $nomor Tidak Lancar <br />"; 
        }else if($nomor == $kt3 || $nomor == $kt5 || $nomor == $kt7 || $nomor == $kt8){
            echo "Lampu Lalu Lintas no $nomor Tidak Berfungsi <br />";
        }else if($nomor == $kt9){
            echo "Lampu Lalu Lintas no $nomor Sedang Diperbaiki <br />";
        }else{
            echo "Lampu Lalu Lintas no $nomor Lancar <br />";
        }
    }
}
echo lampulalulintas (1, 20, 2, 4, 5, 10, 11, 12, 13, 14, 16, 18);

?>