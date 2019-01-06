<?php

error_reporting(0) ;

$pengaturan_bot = file_get_contents('log/log_pengaturan_bot.txt');

if(preg_match('/rlk_off/', $pengaturan_bot)){
die or exit ;
}


include('curl.php');

include('url_stiker.php');


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);


$gtm = microtime();
$gentime = explode(' ',$gtm);
$pg_end = $gentime[0];
$pg_start ='0';
$totaltime = ($pg_end - $pg_start);
$dettik = number_format($totaltime, 1, '.', '');
$detik = str_replace ("0.","",$dettik) ;

$filename = 'log/jumlah_status_yang_dikomen.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) ;
fclose($handle);


$ini_jangan_dihapus_kalau_dihapus_skrip_jadi_error = array(
'🙉','🙊','💩','👶','👦','👧','👨','👩',
'👴','👵','💏','💑','👪','👫','👮','👷',
'💁','👯','👰',
) ;


if(file_exists('log/respon_like_log')){
$log = file_get_contents('log/respon_like_log');
}
else
{
$log ='';
}

$notif = auto('https://graph.facebook.com/fql?q='.urlencode('SELECT title_text,sender_id, object_id,created_time FROM notification WHERE recipient_id=me() AND is_hidden=0').'&access_token='.$access_token.'');

//file_put_contents('ceknotif', $notif ,FILE_APPEND);

$notif = json_decode(str_replace(
array(
'sender_id":',
',"object_id',
),

array(
'sender_id":"', 
'","object_id' ,
),
$notif 
), true );

//print_r($notif);

for($i=1; $i<=count($notif['data']); $i++){

if( ! preg_match('/likes your comment/',$notif['data'][$i-1]['title_text'])){
continue ;
}

else if( preg_match('/'.$notif['data'][$i-1]['created_time'].'/' ,$log)){
print_r ('sudah direspon<br/>') AND "continue" ;
}
else
{

$created_time = $notif['data'][$i-1]['created_time']."\r\n";
$simpan_ct = fopen('log/respon_like_log','a');
fwrite($simpan_ct , $created_time);
fclose($impan_ct);

$id_teman=$notif['data'][$i-1]['sender_id'];

$jenis_kelamin=json_decode(auto('https://graph.fb.me/'.$id_teman.'?access_token='.$access_token.'&fields=gende'),true);

switch($jenis_kelamin['gender']){
case ( 'female' ) :
$panggil=array('MAS','BANG','KAK',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;

default :
$panggil=array('MBAK','NENG','NON ','SUS','SES','NYONYA',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;
}


$sebut_teman = '@['.$id_teman.':1]';

$nama = ''.$panggilan.' ☜☞'.$sebut_teman.'💏';

//$gambar_teman='[['.$id_teman[0].']]';

include('kalimat_respon_like.php');

$penutup_komen='
'.$e1.' . . '.$e1.' . . '.$e1.' . . '.$e1.' . . '.$e1.' . . '.$e1.' . . '.$e1.'
makasih '.$e1.' udah '.$e1.' like '.$e1.' komenku
👦 _ 👩_ '.$nama.' _ 👩
'.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
• '.$e20.' • :::* uruʈάη ƙøʍєηʈ ηøʍєr '.$nom.' *::: '.$e20.' •
::::::::* • ƙєçεράʈάη ƙøʍεηʈ '.$detik.' Ðєʈιк • *::::::
...• '.$e20.' • ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ • '.$e20.' •...
'.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e20.' ʂυđάh '.$hits.' ʂʈάʈυʂ ɣɠ ʂάɣά ƙoʍεηʈάri '.$e20.'
'.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
• '.$ucapan.' '.$sapa.'
'.$e20.' ╬ ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo†▂ ▃ ▄ ▅ ╬ '.$e20.' ';


$rubah_komen = str_replace($abjad,$selipkan_emoji,$kirim_komen);

$message = (
$rubah_komen.
$penutup_komen);

//auto('https://graph.beta.facebook.com/'.$notif['data'][$i-1]['object_id'].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');

auto('https://graph.beta.facebook.com/'.$notif['data'][$i-1]['object_id'].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&attachment&type=image&attachment_url='.trim($gambar).'&method=post');

//echo $nama.' => '.htmlspecialchars($message).' <br/> ' ;

print_r ('terkirim <br/>');


}
}

?>
