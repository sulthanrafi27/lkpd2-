<?php 
    $Nama1 = "Sulthan";
    $Nama2 = "Rafa";
    $jumlah1 = strlen($Nama1); //menghitung bamyak karakter di string
    $jumlah2 = strlen($Nama2);
    $selisih = abs($jumlah1 - $jumlah2);

    if($jumlah1 > $jumlah2){
        echo "$Nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih karakter";
    }else if($jumlah1 < $jumlah2){
        echo "$Nama1 memiliki jumlah karakter lebih sedikit dari $nama2 : selisih $selisih karakter";
    }else {
        echo "keduanya memiliki jumlah karakter yang sama.: $jumlah1";
    }

?>