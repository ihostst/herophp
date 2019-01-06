<?php

error_reporting(0) ;

$pengaturan_bot = file_get_contents('log/log_pengaturan_bot.txt');

if(preg_match('/upstat_off/', $pengaturan_bot)){
die or exit ;
}


$filetoken = 'log/log_token_user.txt';
$handle = fopen($filetoken, 'r');
$access_token=trim(fgets($handle));
fclose($handle);


date_default_timezone_set('Asia/Jakarta');
$jam = date('H');
$menit= date('i');
$hari_ini = date('w'); 
$tgl = date('d'); 
$bln = date('m'); 
$thn = date('Y');

$jam_update = '19' ;
$jam_sekarang = $jam ;
if($jam_sekarang !== $jam_update)
{
print_r (' sekarang jam '.$jam.' lewat '.$menit.' menit belum waktunya update, tunggu jam '.$jam_update.' nanti ') &&  exit  ;
}

$get = file_get_contents('log/jam_update_log');
$simpan = $hari_ini.$tgl.$bln.$jam_update ;
/*
if(preg_match('/'.$simpan.'/', $get))
{
exit ;
}
*/

file_put_contents('log/jam_update_log',
$simpan."\r\n", FILE_APPEND);



include 'curl.php' ;

//include('url_stiker.php');

if(file_exists('log/stat_log'))
{
$log = file('log/stat_log');
}
else
{
$log='';
}


$me = json_decode(auto('https://graph.fb.me/me/feed?access_token='.$access_token.'&fields=message&limit=8'),true);

for($t=1; $t<=count($me['data']); $t++)
{
$kata_awal = explode(' ',$me['data'][$t-1]['message']);

$x=$kata_awal[0].'  ';
$y = fopen('log/stat_log','a');
fwrite($y,$x);
fclose($y);
}


$stat = array("
Selama janur kuning belum melengkung, aku akan tetap mengejar cintamu. tapi kalo udah melengkung, bakal aku setrika lagi biar lurus",
"
Jangan salahkan diri anda jika anda merasa bahwa anda jelek. Salahkan orang tua anda, karena jelek adalah keturunan, wkwkwk.",
"
Cintailah seorang wanita saja. Dua wanita terlalu banyak. Tapi tiga wanita lebih baik dari pada tidak ada.",
"
Hukuman gantung aja udah diganti tembak, kenapa kmu masih gantung aku? Tembak dong.",
"
Jika ada orang yang menghina anda, jangan terburu-buru menyangkal pernyataan mereka. Sepertinya mereka benar.",
"
Kalo cowok, makin kaya makin nakal. Kalo cewek, makin nakal makin kaya.",
"
Untuk sementara ini bagi teman-teman yang ingin menulis di dinding FB saya, saya mohon maaf karena dinding FB saya sedang di cat.",
"
Jomblo jangan pernah merasa malu.. Jomblo bukan berarti gak laku, tapi emang gak ada yang mau.",
"
Mbah Boss aku nya Lagi Anu, Jadi Bot di tugasin tuk update status",
"
Tuan Bos ku nya Lagi Offline Jadi Bot di tugasin tuk buat status...",
"
Mbah ku nya lagi Istirahat, Jadi aku di suruh update status",
"
Boss aku nya Sedang Anu anuan, Jadi terpaksa aku yang update Status deh",
"
Majikan ku Lagi Males Update, Jadi aku disuruh tuk update status",
"
Mbah kU nya Sedang Tugas, Terpaksa Bot lah yang Update",
"
Tuan Belum Pulang Jadi Bot di Tugaskan Tuk Perbarui Status",
"
Lagi Lagi Bot Di tugaskan tuk buat status",
"
Boss aku sedang kerja, Jadi aku lagi deh yang bikin status",
"
Mumpung Boss aku nya Lagi Off line, Aku mau Update dulu aahhh",
"
Boss aku nya Lagi Rapat di Rumah Pak RT, jadi aku di tugaskan tuk update status",
"
Tuan ku nya Lagi sibuk, Jadi Bot deh yang update status",
"
Mbah aku nya Lagi Keluar, Jadi aku di suruh yang update status",
"
Mumpung Tuan ku Lagi Tidur, Mending aku Update status ahhh",
"
Lagi Lagi Bot di suruh Update status",
"
Tuan Ku Lagi Ajip ajip... Jadi aku yang Perbarui status",
"
Mbah aku Lagi Ngopi, jadi bot tugaskan tuk Perbarui status",
);

$pilih_satu = $stat[rand(0,count ($stat)-1)] ;
$potong = explode(' ',$pilih_satu);
$periksa = $potong[0];

$pengganti = $stat[rand(0,count ($stat)-1)] ;

$y = fopen('log/stat_log','r');
fclose($y);

if ( ! preg_match("/$periksa/" ,$y ))
{
$teks = array(' '.str_replace ($abjad,$selipkan_emoji,$pilih_satu).' ');
}
else
{
$teks = array(' '.str_replace ($abjad,$selipkan_emoji,$pengganti).' ');
}

$kirim_komen = ''.$teks[rand(0,count ($teks)-1)].'';


$gtm = microtime();
$gentime= explode(' ',$gtm);
$pg_end = $gentime['0'] ;
$pg_start ='0';
$totaltime = ($pg_end - $pg_start);
$dettik = number_format($totaltime, 1, '.', '');
$detik = str_replace ("0.","",$dettik) ;

$sap=array('
Sobat..Fb','Teman..Fb','Sahabat..Fb','My Friend','Boss...','Mbah..Fb','Jempoler...','Para Botter...','Sahabat Dumay..','Yang Lagi Online..','yang sedang Oll..','Kakak...','Semuaa...','Penghuni...Fb','Yg Lagi Happy Fb kan','All.. Mpo, Ncang, Ncing, Nya, Babe','Semua nya yang Ada Di Fb...',
);

$sapa_an = $sap[array_rand($sap)] ;

$penutup_komen ='
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
::::::::* • sukses '.$e1.' terkirim '.$e1.' '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • jam '.$jam.' • '.$e1.' •..... ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.' '.$bulan.' '.$thn.'
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
• '.$e1.' '.$ucapan.' '.$e1.' '.$sapa.' '.$e1.'
'.$e1.' ╬ '.$e1.' ▅ ▄ ▃ ▂ ʂąℓąʍ ● ŕoɓo†▂ ▃ ▄ ▅ '.$e1.' ╬ '.$e1.' ' ; 

$message = (
$kirim_komen.
$penutup_komen);

//auto('https://graph.beta.facebook.com/me/feed?access_token='.$access_token.'&message='.urlencode($message).'&method=post');

//echo ' '.$message.'<br/> ' ;
echo ' terkirim<br/> ' ;

}

?>




<?php

$file1 = 'log/stat_log';
if(unlink($file1));

$file2 = 'log/error_log';
if(unlink($file2));

?>
