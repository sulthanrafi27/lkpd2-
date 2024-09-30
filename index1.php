<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text"  id="input-teks" name="teks" required>
        <button type="submit">cek angka</button>
    </form>
</body>
</html>

<?php
function  ceknilai($teks){
$result = preg_replace('/[^0-9]/', '', $teks); //regeks  //menggantikan pola pada string 

if($result) {
    $array = str_split($result); //untuk memecah string jadi array
    $hasil= "Teks ini mengandung angka: " . implode(',', $array); //mengabungkan element array
} else {
    $hasil ="Teks ini tidak mengandung angka";
}
return $hasil;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = $_POST["teks"];
    
    echo "<p>". ceknilai($teks). "</p>";
}
?>