<?php


function buka_url($url){

$pengaturan = curl_init();
curl_setopt_array(($pengaturan), array(
CURLOPT_HEADER => 0 ,
CURLOPT_NOBODY => 0 ,
CURLOPT_URL => $url ,
CURLOPT_SSL_VERIFYPEER => false ,
CURLOPT_SSL_VERIFYHOST => false ,
CURLOPT_USERAGENT => "Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) Mac OS X/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A501 Safari/9537.53",
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_REFERER => false ,
CURLOPT_FOLLOWLOCATION => true ,
CURLOPT_VERBOSE => false)
);

$hasil = curl_exec ($pengaturan);
curl_close ($pengaturan);
//$info = curl_getinfo($pengaturan);
//print_r($hasil);
return $hasil;
}


buka_url('http://'.$_SERVER['HTTP_HOST'].'/pilih_token_user.php');

buka_url('http://'.$_SERVER['HTTP_HOST'].'/kmn2.php');
//sleep('180'); // 3 menit ekskusi

buka_url('http://'.$_SERVER['HTTP_HOST'].'/rlk2.php');
//sleep('120'); // 2 menit ekskusi

buka_url('http://'.$_SERVER['HTTP_HOST'].'/ultah2.php');
//sleep('120'); // 2 menit ekskusi

buka_url('http://'.$_SERVER['HTTP_HOST'].'/reswal2.php');
//sleep('120'); // 2 menit ekskusi

buka_url('http://'.$_SERVER['HTTP_HOST'].'/rss2.php');

//sleep('180');
buka_url('http://'.$_SERVER['HTTP_HOST'].'/rst2.php');

buka_url('http://'.$_SERVER['HTTP_HOST'].'/inbox_teks_stiker2.php');

buka_url('http://'.$_SERVER['HTTP_HOST'].'/hapus_log_token_user.php');

//print_r( $_SERVER['HTTP_HOST']);

?>
