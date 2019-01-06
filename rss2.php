<?php

error_reporting(0) ;

$pengaturan_bot = file_get_contents('log/log_pengaturan_bot.txt');

if(preg_match('/rss_off/', $pengaturan_bot)){
die or exit ;
}

include ('curl.php');

include 'url_stiker.php';


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);


$gentime = microtime();
$gentime = explode(' ',$gtm);
$pg_end = $gentime[0];
$pg_start ='';
$totaltime = ($pg_end - $pg_start);
$detik = number_format($totaltime, 1, '.', '');

$filename = 'log/jumlah_status_yang_dikomen.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) ;
fclose($handle);


if(file_exists('log/idSaya')){
$cek_id_saya = file_get_contents('log/idSaya');
}
else
{
$cek_id = json_decode(auto('https://graph.fb.me/me?access_token='.$access_token.'&fields=id'),true);
$cek_id_saya = $cek_id['id'];
}
//echo ($cek_id_saya );


if(file_exists('log/restat_sendiri_log')){
$log = file_get_contents('log/restat_sendiri_log');
}
else
{
$log ='';
}


$stat = json_decode(auto('https://graph.fb.me/me/feed?fields=id&access_token='.$access_token.'&offset=0&limit=1'), true);

for($i =1; $i<=count($stat['data']); $i++){
$com = json_decode(auto('https://graph.fb.me/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$access_token.'&limit=25&fields=id,message,from'), true);


if(count($com['data']) > 0){
for($c=1; $c<=count($com['data']); $c++){

$idkomentar = $com['data'][$c-1]['id'];
$id_pengirim = $com['data'][$c-1]['from']['id'];

if(preg_match("/$id_pengirim/",$cek_id_saya)){
continue ;
}

else if(preg_match("/$idkomentar/",$log)){
print_r ('sudah di respon<br/>');
}
else
{

$idkomentar = $idkomentar."\r\n";
$simpan_idk = fopen('log/restat_sendiri_log','a');
fwrite($simpan_idk , $idkomentar);
fclose($simpan_idk);


$jenis_kelamin = json_decode(auto('https://graph.fb.me/'.$com['data'][$c-1]['from']['id'].'/?access_token='.$access_token.'&fields=gender'), true);
//print_r( $jenis_kelamin ) ;


switch($jenis_kelamin['gender']){
case ('male') :
$panggil = array ('Mas','Bang','Kak',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;

default :
$panggil = array ('Mbak','Neng',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;
}


/**
$potongnama = explode(' ',$com['data'][$c-1]['from']['name']);
$nama = $panggilan.' '.$potongnama[0];
**/

$id_teman = explode(' ',$com['data'][$c-1]['from']['id']) ;
$sebut_teman = '@['.$id_teman['0'].':1]';

$nama = ''.$panggilan.' ☜☞'.$sebut_teman.'💏';

$kk = ('kalimat_kondisi');

switch($kk){
case ('kalimat_kondisi') :
include ('kalimat_kondisi.php') ;
break ;
}


if($robot == true){
switch($robot){

case ('nomer') :
include('kalimat_respon_status_sendiri.php');
break ;

case ('latah') :
include('kalimat_respon_status_sendiri.php');
break ;

case ('biasa') :
include('kalimat_respon_status_sendiri.php');
break ;

case ('kata-kata') :
include('kalimat_respon_status_sendiri.php');
break ;

}
}


$nom = count($com['data']) +2 ;

$penutup_komen='
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
• '.$e1.' • :::* uruʈάη кøღєηʈ ηøღєr  '.$nom.' *::: '.$e1.' •
::::::::* • кєçєράʈάη кøღєηʈ '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂєкάrαηɠ נάღ '.$jam.' • '.$e1.' •.....
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e1.' ʂυđάh '.$hits.' ʂʈάʈυʂ ɣάηɠ ʂάɣά кoღєηʈάrι '.$e1.'
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
• '.$ucapan.' '.$sapa.' '.$e1.'
'.$e1.' ╬ '.$e1.' ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo†▂ ▃ ▄ ▅ '.$e1.' ╬ '.$e1.' ' ;

$rubah_komen = str_replace($abjad,$selipkan_emoji,$kirim_komen);

$message =(
$rubah_komen.
$penutup_komen);

//auto('https://graph.beta.facebook.com/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');

auto('https://graph.beta.facebook.com/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$access_token.'&attachment&summary=1&filter=toplevel&type=jason&content=picture/jpg,jpeg,png,gif&message='.urlencode($message).'&attachment_url='.trim($image).'&method=post');

auto('https://graph.beta.facebook.com/'.$com['data'][$c-1]['id'].'/likes?access_token='.$access_token.'&method=post');

//auto('https://graph.beta.facebook.com/'.$com['data'][$c-1]['from']['id'].'/pokes?access_token='.$access_token.'&method=post');

//echo $nama.' => '.htmlspecialchars($message).' <br/> ' ;

//echo ($message.'<br/>');
echo ('terkirim<br/>');

}


}
}
}

?>
