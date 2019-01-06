<?php

error_reporting(0);

//header('Origin: https://facebook.com');

if(isset($_POST['kmn']))
$kmn='kmn_'.$_POST['kmn'];

if(isset($_POST['rlk']))
$rlk='rlk_'.$_POST['rlk'];

if(isset($_POST['rss']))
$rss='rss_'.$_POST['rss'];

if(isset($_POST['upstat']))
$upstat='upstat_'.$_POST['upstat'];

$pengaturan_bot= "$kmn+$rlk+$rss+$upstat" ;

//kmn_on+rlk_on+rss_on+upstat_on

if(isset($_POST['token']))
{
$token_user = trim($_POST['token']);
}


//CEK TOKEN ADA ISI APA TIDAK
if($token_user == null)
{
echo "<script type='text/javascript'>
alert('token tidak ada ! ');
history.back(self);
</script>";
exit ;
}

/*
Array ( [error] => Array ( [message] => Invalid OAuth access token. [type] => OAuthException [code] => 190 [fbtrace_id] => D9snY0OI6ZZ ) )
*/
//DEBUG LAGI TOKEN ASLI APA BUKAN
$userData = json_decode(bukaUrl('https://graph.facebook.com/me/?access_token='.$token_user.'&fields=id,name'),true);
//print_r($userData);
$error = $userData['error']['message'];

if(preg_match('/Invalid OAuth access token/', $error))
{
die( "<script type='text/javascript'>
alert('access token salah bozz, silahkan periksa kembali access_token nya ! ');
history.back(self);
</script>");
die ;
}


//NAMA DAN ID USER
$userNama = $userData['data']['name'] ;
$userId = $userData['data']['id'] ;



//CEK FILE ID ADMIN, ADA APA TIDAK
if(file_exists('id_admin'))
{
$id_admin = trim(file_get_contents('id_admin'));

//BUKA WALL ADMIN, AMBIL ID STATUS
$cek_wall_admin = json_decode(bukaUrl('https://graph.facebook.com/'.$id_admin.'/feed/?access_token='.$user_token.'&fields=id,name,message&limit=4'),true);
}
else
{
//BUKA WALL ADMIN, AMBIL ID STATUS
$cek_wall_admin = json_decode(bukaUrl('https://graph.facebook.com/'.$id_admin.'/feed/?access_token='.$user_token.'&fields=id,name,message&limit=4'),true);
}



for($i=1; $i<=count($cek_wall_admin['data']); $i++)
{
//USER LIKES 4 STATUS ADMIN
$userLikes = bukaUrl('https://graph.beta.facebook.com/'.$cek_wall_admin['data'][$i-1]['id'].'/likes?access_token='.$user_token.'&method=post');
}



function bukaUrl($url){

$cookie_file_path = dirname( __FILE__ ) . "/log/cokis.txt" ;

$atur_curl_get = curl_init();
curl_setopt_array(($atur_curl_get),
array(
CURLOPT_HEADER => 0 ,
CURLOPT_NOBODY => false ,
CURLOPT_URL => $url ,
CURLOPT_SSL_VERIFYHOST => false ,
CURLOPT_COOKIEJAR => $cookie_file_path ,
CURLOPT_COOKIEFILE => $cookie_file_path ,
CURLOPT_USERAGENT =>
"Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) Mac OS X/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A501 Safari/9537.53",
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_SSL_VERIFYPEER => false ,
CURLOPT_REFERER => false ,
CURLOPT_SSL_VERIFYPEER => false ,
CURLOPT_FOLLOWLOCATION => 1 ,
CURLOPT_VERBOSE => false)
);

$hasil = curl_exec ($atur_curl_get);
curl_close ($atur_curl_get);
//$info = curl_getinfo($chf);
//print_r($hasil_login);
return $hasil;
}




##### SIMPAN KE MYSQL #####


include_once('data_login_mysqli.php');


//LOGIN KE MYSQLI
$login_ke_mysqli = mysqli_connect($domain, $username, $password);

if( ! $login_ke_mysqli)
{
die ("Connection failed: " . mysqli_connect_error());
}


// TAMBAH DATABASE
if(mysqli_select_db($login_ke_mysqli, 'db_token') == null)
{
$sql = "CREATE DATABASE db_token";
mysqli_query($login_ke_mysqli, $sql);
echo "Database created successfully";
}

$login_ke_mysqli = mysqli_connect($domain, $username, $password, 'db_token');

//SQL BUAT TABEL
$sql = 'SELECT id,pengaturan_bot,access_token FROM user_token LIMIT 0,1 ';
$query = mysqli_query($login_ke_msql, $sql);
if($query == null){
$sql = "CREATE TABLE token_user(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pengaturan_bot VARCHAR(100) NOT NULL,
access_token VARCHAR(500) NOT NULL,
reg_date TIMESTAMP
)";

mysqli_query($login_ke_mysqli, $sql);
//echo "Table user token created successfully";
}


//INSERT INTO
mysqli_select_db($login_ke_mysqli, 'db_token');
$sql = "INSERT INTO token_user(pengaturan_bot, access_token)
VALUES ('$pengaturan_bot', '$token_user')";

if(mysqli_query($login_ke_mysqli, $sql)){
echo "<script type='text/javascript'>
alert(' access token berhasil di instal ! ');
history.back(self);
</script>";
}
else
{
echo "<script type='text/javascript'>
alert('gagal instal access token ! ');
history.back(self);
</script>";
}



?>
