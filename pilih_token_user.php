<?php

include_once('data_login_mysqli.php');

//LOGIN KE MSQLI
$login_ke_msql = mysqli_connect($domain, $username, $password);


//CHEK KONEKSI
if( ! $login_ke_msql){
die ("gagal login ke msql:" . mysqli_connect_error() );
}
else
{
echo 'Login ke mysql berhasil<br/>' ;
}


mysqli_select_db($login_ke_msql, 'db_token');

//SELECT BARIS SATU
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 0,1 ';
$query = mysqli_query($login_ke_msql, $sql);
$baris1 = mysqli_fetch_row($query);


$log_kolom_tabel_token = file_get_contents(
'log/token_terakhir_dijalankan.txt');


if($log_kolom_tabel_token == null)
{
$log_kolom_tabel_token = '0' ;
}//echo $log_kolom_tabel_token ;




switch($log_kolom_tabel_token){

case 0 :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 0,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);

$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);

if($baris[0] == null)
{
exit ;
}
break ;


case '1' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 1,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);

$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '2' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 2,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case (3) :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 3,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '4' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 4,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);

if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '5' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 5,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '6' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 6,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '7' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 7,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '8' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 8,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '9' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 9,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '10' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 10,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;


case '11' :
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 11,1 ';

$query = mysqli_query($login_ke_msql, $sql);

$baris = mysqli_fetch_row($query);
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
if($baris[0] == null){
$baris = $baris1 ;
$urutan_kolom = $baris[0];
file_put_contents('log/token_terakhir_dijalankan.txt', $urutan_kolom);
}
break ;

}

//print_r($baris);
//print_r($baris['1']);
//print_r($baris['2']);

$pengaturan_bot=$baris['1'];
$x = $pengaturan_bot;
$y = fopen('log/log_pengaturan_bot.txt','w');
fwrite($y,$x);
fclose($y);


$access_token=$baris['2'];
$x = $access_token;
$y = fopen('log/log_token_user.txt','w');
fwrite($y,$x);
fclose($y);


###################
/*
$pengaturan_bot=explode('+', $baris[1]);
//echo $pengaturan_bot=$baris[1] ;

$kmn = $pengaturan_bot[0];
//echo ($kmn) ;
$rlk = $pengaturan_bot[1];
//echo ($rlk) ;
$rss = $pengaturan_bot[2];
//echo ($rss) ;
$upstat = $pengaturan_bot[3];
//echo ($upstat) ;

$access_token=$baris[2];
//echo ($access_token) ;
*/

#####################



// HAPUS $QUERI DARI RAM
mysqli_free_result($query);

// TUTUP KONEKSI LOGIN MSQL BILA SUDAH SELESAI
mysqli_close($login_ke_msql);



?>
