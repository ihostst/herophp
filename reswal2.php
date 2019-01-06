<?php

error_reporting(0);

include ('curl.php');

include ('url_stiker.php');

if($reswal == 'reswal_off'){ exit ; }


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
//echo ($cek_id_saya );


if(file_exists('log/reswal_log')){
$log = file_get_contents('log/reswal_log');
}
else
{
$log ='';
}
//echo ($log);

$stat = json_decode(auto('https://graph.fb.me/me/feed?fields=id,message,comments,from&access_token='.$access_token.'&offset=0&limit=4'), true);
print_r ($stat);

for($w=1; $w<=count($stat['data']); $w++){
$id_pengirim = $stat['data'][$w-1]['from']['id'];
$id_kiriman_wal = $stat['data'][$w-1]['id'];

if(preg_match("/$id_pengirim/", $cek_id_saya)){
continue ;
}

else if(preg_match("/$id_kiriman_wal/", $log)){
echo ('sudah di respon<br/>');

}
else
{

$id_kiriman_wal = $id_kiriman_wal."\r\n";
$simpan_ikw = fopen('log/reswal_log','a');
fwrite($simpan_ikw , $id_kiriman_wal);
fclose($simpan_ikw);


$jenis_kelamin = json_decode(auto('https://graph.fb.me/'.$stat['data'][$w-1]['from']['id'].'/?access_token='.$access_token.'&fields=gender'), true);
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
$potongnama = explode(' ',$com['data'][$w-1]['from']['name']);
$nama = $panggilan.' '.$potongnama[0];
**/

$id_teman = explode(' ',$stat['data'][$w-1]['from']['id']) ;
$sebut_teman = '@['.$id_teman['0'].':1]';

$nama = ''.$panggilan.' ☜☞'.$sebut_teman.'💏';

$s = $stat['data'][$w-1]['message'];

if(preg_match('/tfc/',$s) || preg_match('/tfl/',$s) || preg_match('/TFC/',$s) || preg_match('/TFL/',$s) || preg_match('/makasih/',$s) || preg_match('/trims/',$s) || preg_match('/thnk/',$s) || preg_match('/mksih/',$s)){
$komentari = array(
"
masama $nama
",
"
ok $nama masama
",
"
duh $nama masama ea
",
);
}

else if(preg_match('/maaf/',$s) || preg_match('/maap/',$s) || preg_match('/sorry/',$s) || preg_match('/sorry/',$s) || preg_match('/mf/',$s)){
$komentari = array(
"
duh $nama ga perlu minta maap ama bot eaa",
"
emang ada apa $nama
",
"
aku juga minta maaf $nama
",
);
}

else if(preg_match('/colak/',$s) || preg_match('/colek/',$s) || preg_match('/poke/',$s)){
$komentari = array(
"
duh $nama maaf Robot ge genit nweh :D hee
",
"
au au au auuuuuu
",
"
ciuuuzzz
",
"
hehehe
",
"
Mau aku colek lagi ga $nama
",
);
}

else if(preg_match('/ass/',$s) || preg_match('/askum/',$s) || preg_match('/salam/',$s)){
$komentari = array(
"
waalaikumsalam $nama $ucapan
",
"
kumsalam
",
); 
}

else
{

$komentari = array(
"
waduh maaf terpaksa bot nya yang tampil... aku gi Offline nih $nama
",
"
da apa ya $nama... tunggu aku Online ea
",
"
maaf saya cuma bot... ada yg bisa di bantu $nama
",
) ;

}

$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';
$rubah_komen = str_replace($abjad,$selipkan_emoji,$kirim_komen);

$nom = $stat['data'][$w-1]['comments']['count']+1;

$penutup_komen='
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
• '.$e1.' • :::* uruʈάη ƙøʍєηʈ ηøʍєr '.$nom.' *::: '.$e1.' •
::::::::* • ƙєçεράʈάη ƙøʍεηʈ '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ • '.$e1.' •.....
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e1.' ʂυđάh '.$hits.' ʂʈάʈυʂ ɣάηɠ ʂάɣά  ƙoʍεηʈάri '.$e1.'
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'•*´¨*•'.$e1.'
• '.$ucapan.' '.$sapa.' '.$e1.'
'.$e1.' ╬ ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo† ▂ ▃ ▄ ▅ ╬ '.$e1.'' ;

$message =(
$rubah_komen.
$penutup_komen);

//auto('https://graph.beta.facebook.com/'.$stat['data'][$w-1]['id'].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');

//auto('https://graph.beta.facebook.com/'.$stat['data'][$w-1]['id'].'/comments?access_token='.$access_token.'&attachment&summary=1&filter=toplevel&type=jason&content=picture/jpg,jpeg,png,gif&message='.urlencode($message).'&attachment_url='.trim($gambar).'&method=post');

//auto('https://graph.beta.facebook.com/'.$stat['data'][$w-1]['id'].'/likes?access_token='.$access_token.'&method=post');

//auto('https://graph.beta.facebook.com/'.$com['data'][$w-1]['from']['id'].'/pokes?access_token='.$access_token.'&method=post');

echo 'terkirim<br/>' ;

}
}

?>

