<?php

error_reporting(0);

include ('curl.php');
include ('url_stiker.php');


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);

$gtm = microtime();
$gentime = explode(' ',$gtm);
$pg_end = $gentime[0] ;
$pg_start ='0';
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


if(file_exists('log/restat_teman_log')){
$log = file_get_contents('log/restat_teman_log');
}
else
{
$log ='';
}


$stat = json_decode(auto('https://graph.fb.me/me/home?fields=id,from&access_token='.$access_token.'&offset=1&limit=5'),true);
//print_r($stat);

for($i=1; $i<=count($stat['data']); $i++){

$id_pengirim = $stat['data'][$i-1]['from']['id'];

if(preg_match("/$id_pengirim/",$cek_id_saya)){
continue ;
}
else
{

$com = json_decode(auto('https://graph.fb.me/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$access_token.'&fields=id,message,from&limit=4'),true);

//print_r($com);
//print_r(count($com['data']).'<br/>');


if(count($com['data']) == null){
continue ;
}
else
{

for($c=1; $c<=count($com['data']); $c++){

$id_com = $com['data'][$c-1]['id'];

if(preg_match('/'.$com['data'][$c-1]['from']['id'].'/', $cek_id_saya)){
continue ;
}

else if(preg_match("/$id_com/",$log)){
echo ('sudah_direspon<br/>');
}
else
{

$x = $id_com."\r\n";
$y = fopen('log/restat_teman_log','a');
fwrite($y,$x);
fclose($y);


$jenis_kelamin = json_decode(auto('https://graph.fb.me/'.$com['data'][$c-1]['from']['id'].'/?access_token='.$access_token.'&fields=gender'), true);
//print_r( $jenis_kelamin ) ;


switch($jenis_kelamin['gender']){
case ('male') :
$panggil = array (' 👦 Mas ',' 👦 Bang ',' 👮 Den ',' 👦 Kak ',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;

default :
$panggil = array (' 👵 Mbak ',' 👩 Neng ',' 👵 Non ',' 👩 Jeng ', );
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;
}


$potongnama = explode(' ',$com['data'][$c-1]['from']['name']);
//$nama = $panggilan.' '.$potongnama[0];


$id_teman = $com['data'][$c-1]['from']['id'];
$sebut_teman = '@['.$id_teman.':1]' ;
$nama= ' '.$panggilan.' '.$sebut_teman.' 👦 _ ' ;
//print_r($nama);

$s = $com['data'][$c-1]['message'];

$kk=('komentar_kondisi');

switch($kk){
case ('komentar_kondisi') :
include('kalimat_kondisi.php');
break ;
}


if($robot == true){
switch($robot){
case ('nomer') :
include('kalimat_respon_status_teman.php');
break ;

case ('latah') :
include('kalimat_respon_status_teman.php');
break ;

case ('kata-kata') :
include('kalimat_respon_status_teman.php');
break ;

case ('biasa') :
include('kalimat_respon_status_teman.php');
break ;
}
}



$nom = count($com['data']) +1 ;

$em = array (' 💙 ',' 💚 ',' ❤ ',' 💙 ',' 💜 ',' 💚 ',);

$emo =$em[rand(0,count($em)-1)];

$penutup_komen='
.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸•*´¨*•.¸¸•*´¨*•.
• '.$e1.' • :::* uruʈάη кøღєηʈ ηøღєr '.$nom.' *::: '.$e1.' •
::::::::* • кєçєράʈάη кøღєηʈ '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂєкάrαηɠ נάღ '.$jam.' • '.$e1.' •.....
.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸•*´¨*•.¸¸•*´¨*•.
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bln.' '.$thn.'
'.$e1.' ʂυđάh '.$hits.' ʂʈάʈυʂ ɣάηɠ ʂάɣά кoღєηʈάrι  '.$e1.'
.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸¸.•*´¨*•.¸•*´¨*•.¸¸•*´¨*•.
• '.$ucapan.' '.$sapa.' '.$e1.'
'.$e1.' ╬ '.$e1.' ▅ ▄ ▃ ▂ ʂάℓάღ ● ŕoßoʈ ▂ ▃ ▄ ▅ '.$e1.' ╬ '.$e1.'';

$rubah_komen = str_replace($abjad,$selipkan_emoji,$kirim_komen);

$message=(
$rubah_komen.
$penutup_komen);

//auto('https://graph.beta.facebook.com/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$access_token.'&attachment&summary=1&filter=toplevel&type=jason&content=picture/jpg,jpeg,png,gif&message='.urlencode($message).'&attachment_url='.($gambar).'&method=post');


auto('https://graph.beta.facebook.com/'.$com['data'][$c-1]['id'].'/likes?access_token='.$access_token.'&method=post');

//print_r($message.'<br/>');
echo ('terkirim<br/>');

}
}
}
}
}


?>

