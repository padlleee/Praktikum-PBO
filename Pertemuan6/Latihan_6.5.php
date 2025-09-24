<?php
echo "Siapa kamu ? <br>";
$Input_Nama = fopen("php://stdin", "r");
$nama = trim(fgets($Input_Nama));  
echo "Halo $nama, selamat datang di pemrograman PHP <br>"; 
?>
