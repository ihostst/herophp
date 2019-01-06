<?php

include('data_login_mysqli.php');

$login_ke_msql = mysqli_connect($domain, $username, $password);

mysqli_select_db($login_ke_msql, 'db_token');

//HITUNG JUMLAH KOLOM TABEL
$hitung_semua = "SELECT COUNT(*) FROM user_token";
$query = mysqli_query($login_ke_msql, $hitung_semua);
$row = mysqli_fetch_row($query);
$semua_user = $row[0] +20 ;
echo ($semua_user. ' - Orang') ;

?>

