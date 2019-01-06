<?php

error_reporting(0) ;

$pengaturan_bot = file_get_contents('log/log_pengaturan_bot.txt');
//echo($pengaturan_bot);

if(preg_match('/kmn_off/', $pengaturan_bot)){
die or exit ;
}


include('curl.php');

include('url_stiker.php');


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);


$gtm = microtime();
$gentime= explode(' ',$gtm);
$pg_end = $gentime['0'] ;
$pg_start ='0';
$totaltime = ($pg_end - $pg_start);
$dettik = number_format($totaltime, 1, '.', '');
$detik = str_replace ("0.","",$dettik) ;

$huruf = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',);

$capslock = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',);
$alay = array('ɑ','в','ς','∂','є','ƒ','ɢ','ɦ','ɨ','ʆ','ќ','ℓ','ʍ','и','o','ρ','q','ʀ','s','т','µ','v','ω','x','γ','z','ɑ','в','ς','∂','є','ƒ','ɢ','ɦ','ɨ','ʆ','ќ','ℓ','ʍ','и','o','ρ','q','ʀ','s','т','µ','v','ω','x','γ','z',);
$kotak = array('̲̅̅A̲̅','̲̅̅B̲̅','̲̅̅C̲̅','̲̅̅D̲̅','̲̅̅E̲̅','̲̅̅F̲̅','̲̅̅G̲̅','̲̅̅H̲̅','̲̅̅I̲̅','̲̅̅J̲̅','̲̅̅K̲̅','̲̅̅L̲̅','̲̅̅M̲̅','̲̅̅N̲̅','̲̅̅O̲̅','̲̅̅P̲̅','̲̅̅Q̲̅','̲̅̅R̲̅','̲̅̅S̲̅','̲̅̅T̲̅','̲̅̅U̲̅','̲̅̅V̲̅','̲̅̅W̲̅','̲̅̅X̲̅','̲̅̅Y̲̅','̲̅̅Z̲̅','̲̅̅a̲̅','̲̅̅b̲̅','̲̅̅c̲̅','̲̅̅d̲̅','̲̅̅e̲̅','̲̅̅f̲̅','̲̅̅g̲̅','̲̅̅h̲̅','̲̅̅i̲̅','̲̅̅j̲̅','̲̅̅k̲̅','̲̅̅l̲̅','̲̅̅m̲̅','̲̅̅n̲̅','̲̅̅o̲̅','̲̅̅p̲̅','̲̅̅q̲̅','̲̅̅r̲̅','̲̅̅s̲̅','̲̅̅t̲̅','̲̅̅u̲̅','̲̅̅v̲̅','̲̅̅w̲̅','̲̅̅x̲̅','̲̅̅y̲̅','̲̅̅z̲̅',);

$selain_huruf_a = array('U','I','E','O','u','i','e','o',);
$rubah_jadi_a= array('A','A','A','A','a','a','a','a',);

$selain_huruf_i = array('A','E','O','U','a','e','o','u',);
$rubah_jadi_i = array('I ','I','I','I','i','i','i','i','i ','i','i',);

$selain_huruf_u = array('A','E','I','O','a','e','i','o',);
$rubah_jadi_u = array('U','U','U','U','u','u','u','u',);

$selain_huruf_e = array('A','I','O','U','a','i','o','u',);
$rubah_jadi_e = array('E','E','E','E','e','e','e','e',);

$selain_huruf_o = array('A','E','I','U','a','e','i','u',);
$rubah_jadi_o = array('O','O','O','O','o','o','o','o',);

$mnt_skrng=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30',);

$ganti_mnt_skrng=array('60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90',);


if( is_dir ('log')) ;
else mkdir ('log') ; 

if(file_exists('log/komen_log')){
$log = file_get_contents('log/komen_log');
}
else
{
$log ='';
}


if(file_exists('log/idSaya')){
$cek_id_saya = file_get_contents('log/idSaya');
}

else
{
$me = json_decode(auto('https://graph.fb.me/me?access_token='.$access_token.'&fields=id'),true);
$xx = $me['id']."\r\n";
file_put_contents('log/idSaya', $xx);
$cek_id_saya = file_get_contents('log/idSaya');
}


$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,type,message,from,comments&access_token='.$access_token.'&offset=0&limit=7'),true);
//print_r ($stat);


for($i=1; $i<=count($stat['data']); $i++){

$id_t = explode('_',$stat['data'][$i-1]['id']);
$id_teman=$id_t[0];

$id_s = explode('_',$stat['data'][$i-1]['id']);
$id_status=$id_s[1];


if(isset($stat['data'][$i-1]['message']) == ! null ){
$s= $stat['data'][$i-1]['message'] ;
}

$potong_na = explode(' ',$stat['data'][$i-1]['from']['name']);
$potong_nama = $potong_na[0];

$tipe=$stat['data'][$i-1]['type'];

$nom = $stat['data'][$i-1]['comments']['count']+1;

$updt=$stat['data'][$i-1]['created_time'];
//echo ''.$updt.'<br/>';

$mnt_updt=substr($updt,14,2);
//echo ''.$mnt_updt.'<br/>';

if(preg_match("/$id_teman/",$cek_id_saya)){
continue ;
}

if( preg_match("/$id_status/", $log)){
continue ;
}

$x = $id_status."\r\n";
$y = fopen('log/komen_log','a');
fwrite($y,$x);
fclose($y);

$jenis_kelamin = json_decode(auto('https://graph.fb.me/'.$id_teman.'?access_token='.$access_token.'&fields=gender'),true);
//print_r($jenis_kelamin);

switch($jenis_kelamin['gender']){
case ( 'male' ) :
$panggil=array('MAS','BANG','KAK',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;

default :
$panggil=array('MBAK','NENG','NON ','SUS','SES','NYONYA',);
$panggilan = $panggil[rand(0,count($panggil)-1)];
break ;
}


$nama = ''.$panggilan.' ☜☞'.$potong_nama.' 💏';


$tag_nama= '@['.$id_teman.':1]';
//$gambar_teman= '[['.$stat['data'][$i-1]['from']['id'].']] ';


switch($tipe){

//JIKA ADA YANG UPDATE FOTO
case ('photo') :
include ('kalimat_foto.php') ;
$robot = false ;
break ;

//JIKA ADA YANG UPDATE LINK
case ('link') :
include 'kalimat_link.php' ;
$robot = false ;
break ;

//JIKA ADA YANG UPDATE VIDEO
case ('video') :
include 'kalimat_vidio.php' ;
$robot = false ;
break ;

//KOMENTAR SESUAI KONDISI
default :
include ('kalimat_kondisi.php');
break ;
}



if($robot == true){

switch($robot){

case ('kata-kata') :
$katakata=array('kalimat_lucu.php','kalimat_konyol.php',);
include $katakata[rand(0,count ($katakata)-1)];
break ;


case ('latah') :

if(($i-1 > 0 ) && ($i-1< count($stat['data'])-1)){

include ('kalimat_latah.php') ;
}
else
{
include ('kalimat_latah_cadangan.php') ;
}
break ;


case ('biasa') :
include ('kalimat_biasa.php') ;
break ;


case ('nomer') :
if($nom == '1'){
include ('kalimat_nomer_satu.php') ;
}
else
{

$cek_yg_kmn = json_decode(auto('https://graph.fb.me/'.$id_status.'/comments?access_token='.$access_token.'&fields=message,from&limit=15'),true);

$komennya_si_a = $cek_yg_kmn['data']['0']['message'];

$nm_yg_kmn_duluan = ($cek_yg_kmn['data']['0']['from']['id']);

$tag_nama_si_a = '@['.$nm_yg_kmn_duluan.':1]';

if(preg_match("/$nm_yg_kmn_duluan/",$cek_id_saya))
continue ; 


if (count($cek_yg_kmn['data']) == 1 ) $si_z = '1';
else $si_z = count($cek_yg_kmn['data'])-1;

$komennya_si_z = $cek_yg_kmn['data'][$si_z]['message'];

$nm_yg_kmn_terakhir = ($cek_yg_kmn['data'][$si_z]['from']['id']);

$tag_nama_si_z = '@['.$nm_yg_kmn_terakhir.':1]';

if(preg_match("/$nm_yg_kmn_terakhir/",$cek_id_saya))
continue ; 


if($nom == '2'){
include ('kalimat_nomer_dua.php') ;
}
else
{
include ('kalimat_nomer_tiga.php') ;
}


} // PENUTUP ELSE
break ; // PENUTUP CASE


} // PENUTUP SWITCH
} // PENUTUP IF



$filename = 'log/jumlah_status_yang_dikomen.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) + 1;
fclose($handle);

$handle = fopen($filename, 'w');
fwrite($handle, $hits);
fclose($handle);

//date_default_timezone_set('Asia/Jakarta');
$menit = date('i');
/*
$timezone=time()+0*60*60;
$mnt=gmdate('i',$timezone);
*/
if(($menit) < ($mnt_updt)){
$menitan = str_replace($mnt_skrng,$ganti_mnt_skrng,$menit) ;
}
else
{
$menitan=''.$menit.'';
}
//echo ''.$menitan.'<br/>';
$m = (($menitan) - ($mnt_updt)) ;
$mnit = $m;
//$mnit = (($m) - ('10'));

$tlt = array("koment telat $mnit menit","huf koment telat $mnit menit",) ;

$telat = $tlt[array_rand($tlt)] ;

$penutup_komen=
''.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
'.$telat.'
'.$e20.' • • :::* uruʈάη ƙøʍєηʈ ηøʍєr '.$nom.' *::: •'.$e20.'
::::::::* • ƙєçεράʈάη ƙøʍεηʈ '.$detik.' Ðєʈιк • *:::::::
'.$e20.'..•• ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ ••..'.$e20.'
'.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
ĥάrι ιηι ĥάrι '.$hari.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e20.' ʂυđάh '.$hits.' ʂʈάʈυʂ ɣɠ ʂάɣά ƙoʍεηʈάri '.$e20.'
'.$e21.'.•*´¨*•.¸'.$e22.'¸.•*´¨*•.¸'.$e23.'¸.•*´¨*•.¸'.$e24.'¸.•*´¨*•.¸'.$e25.'
'.$e20.' '.$ucapan.' '.$sapa.' '.$e20.'
'.$e20.' ╬ ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo† ▂ ▃ ▄ ▅ ╬ '.$e20.' ';

$rubah_komen = str_replace($abjad,$selipkan_emoji,$kirim_komen);

$message=(
$rubah_komen.
$penutup_komen);

auto('https://graph.beta.facebook.com/'.$id_status.'/comments?attachment&message='.urlencode($message).'&attachment_url='.trim($gambar).'&access_token='.$access_token.'&method=post');

//auto('https://graph.beta.facebook.com/'.$stat['data'][$i-1]['id'].'/comments?message='.urlencode($message).'&access_token='.$access_token.'&method=post');

//sleep('3');

auto('https://graph.beta.facebook.com/'.$id_status.'/likes?access_token='.$access_token.'&method=post');



//echo $nama.' => '.htmlspecialchars($message).' <br/> ' ;

//print_r ($message.'<br/>');
print_r ('terkirim<br/>');


}

?>
