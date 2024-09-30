<?php 
    $lama_kerja = 14;
    $jam_normal = 8;
    $kompensasi1 = 50000;
    $kompensasi2 = 25000;

    if($lama_kerja > $jam_normal){
        $jam_lembur = $lama_kerja - $jam_normal;
        $total = ($kompensasi2 * ($jam_lembur - 1)) + $kompensasi1;
        echo "lama kerja : $lama_kerja Jam<br>" . "jam lebih : $jam_lembur Jam<br>" . "jumlah kompensasi : Rp. $total" ;
    }
?>