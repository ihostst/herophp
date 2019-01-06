<?php

error_reporting(0) ;


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);


date_default_timezone_set('Asia/Jakarta');
$jam = date('H');
$menit= date('i');
$hari_ini = date('D'); 
$tgl = date('d'); 
$bln = date('M'); 
$thn = date('Y');


$jam_kirim_ucapan = '19' ;
$jam_sekarang = $jam ;

$simpan = "$hari_ini-$tgl-$bln-jam-$jam_kirim_ucapan" ;

$get = file_get_contents('log/jam_kirim_ucapan_log');

if($jam_sekarang !== $jam_kirim_ucapan)
{
print_r (' sekarang jam '.$jam.' lewat '.$menit.' menit belum waktunya kirim ucapan, tunggu jam '.$jam_kirim_ucapan.' nanti ') AND exit ;
}

else if(preg_match('/'.$simpan.'/', $get))
{
print_r ('sudah direspon<br/>') AND exit ;
}



file_put_contents('log/jam_kirim_ucapan_log',
$simpan."\r\n", FILE_APPEND);

//include ('url_stiker_ultah.php') 
include ('curl.php') ;
$gtm = microtime();
$gentime= explode(' ',$gtm);
$pg_end = $gentime['0'] ;
$pg_start ='0';
$totaltime = ($pg_end - $pg_start);
$dettik = number_format($totaltime, 1, '.', '');
$detik = str_replace ("0.","",$dettik) ;


if(file_exists('log/ultah_log')){
$log = json_encode(file_get_contents('log/ultah_log'));
}
else
{
$log ='';
}


$ini_jangan_dihapus = array('
🙉','🙊','💩','👶','👦','👧','👨','👩','👴','👵','💏','💑','👪','👫','👮','👷','💁','👯','👰','👸','🎅','👼','💃',) ;

$sambung = $bln.'/'.$tgl ;
//echo($sambung).'<br/>' ;

$notif = auto('https://graph.fb.me/fql?q='.urlencode('select uid, name, birthday_date from user where uid in (select uid2 from friend where uid1=me())').'&access_token='.$access_token.'') ;

//file_put_contents('uid',$notif);
//print_r($notif) ;

$notif = json_decode(str_replace(
array(
'uid":',
',"name',
),

array(
'uid":"',
'","name',
),

$notif 
), true );


for($i=1; $i<=count($notif['data'])-1; $i++){

$sub= substr($notif['data'][$i-1]['birthday_date'],0,5) ;
//echo($sub.'<br/>') ;

if($sub == $sambung){

$uid=$notif['data'][$i-1]['uid'];


if(preg_match("/$uid/", $log)){
echo ('sudah di respon<br/>');
}
else
{

$x = $uid."\r\n";
$y = fopen('log/ultah_log','a');
fwrite($y,$x);
fclose($y);


$jenis_kelamin = json_decode(auto('https://graph.fb.me/'.$uid.'/?access_token='.$access_token.'&fields=gender'), true);
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
//print_r( $panggilan ) ;

/*
$potongnama = explode(' ',$notif['data'][$i-1]['name']);
$nama = $panggilan.' '.$potongnama['0'];
*/

$menyebut_teman = '@['.$uid.':1]';
$nama = ' '.$panggilan.' ☜☞'.$menyebut_teman.',💏 ';


$komentari = array(
"
HBD  $e2 $e3 $nama ",
"
Happy $e1 Birthday  Wish $e2 U $e3 All $e4 the $e5 best... $e6 $e7 $nama ",
"
Met $e1 Ultah $e2 yah $nama semoga $e3 panjang $e4 Umur... $e5 $e6 ",
"
Selamat $e1 Ulang $e2 tahun $e4 $e5 $nama ",
"
hbd $nama semoga $e1 cita $e2 citamu $e3 tercapai... $e4 $e5 ",
"
$nama met $e1 ulang $e2 tahun... $e3 $e4 ",
) ;

$kirim_komen=''.$komentari[rand(0,count($komentari)-1)].'';

$filename = 'log/jumlah_kiriman_ultah.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) + 1;
fclose($handle);

$handle = fopen($filename, 'w');
fwrite($handle, $hits);
fclose($handle);


$penutup_komen='
'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'
::::::::* • ʂυƙʂεʂ †εrƙιrιʍ '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂεƙάrαηɠ jάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ • '.$e1.' •.....
'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e1.' ʂυđάh '.$hits.' υçάράη ɣάηɠ †εrƙιrιʍ '.$e1.'
'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'•*´¨*•'.$e1.'
• '.$e1.' '.$ucapan.' '.$e1.' '.$sapa.' '.$e1.'
'.$e1.' ╬ '.$e1.' ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo†▂ ▃ ▄ ▅ '.$e1.' ╬ '.$e1.' ' ;

$message=(
$kirim_komen.
$penutup_komen);

auto('https://graph.beta.facebook.com/'.$uid.'/feed?access_token='.$access_token.'&message='.urlencode($message).'&method=post');

//auto('https://graph.facebook.com/'.$notif[data][$i-1][uid].'/pokes?access_token='.$access_token.'&method=post');

//echo ($notif['data'][$i-1]['uid']) ;
//echo ($notif['data'][$i-1]['birthday_date']) ;

//echo '<font color="pink">tes</font> =>'.$message.'<hr color="red"/>';

echo ('terkirim<br/>') ;


}
}
}

?>
