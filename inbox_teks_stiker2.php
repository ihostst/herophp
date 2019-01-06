<?php

error_reporting(0);

include ('id_stiker_inbox.php');
include('curl.php');

//HAPUS COKIES LAMA BIKIN COKIS BARU
//unlink('cokis_log');

/*
if($data_login['email'] == null )
print_r ('email tidak ada') & exit or die ;

else if($data_login['pass'] == null )
print_r ('pasword tidak ada') & exit or die ;
else
*/


$emoji=array('
🙈','🙉','🙊','💩','👶','👦','👧','👦','👨','👩','👴','👵','💏','💑','👪','👫','👤','👤','👮','👷','💁','💂','👯','👰','👸','🎅','👼','💃','💆','💇','💅','👻','👹','👺','👽','👾','👿','💀','💪','👀','👂','👃','👣','👄','👅','👣','👅','👄','👣','👃','👂','👀','💪','💀','👿','💋','❤','💙','💚','💛','💜','💓','💔','💕','👅','💖','💗','💘','💝','💞','💟','😷','😞','👽','👠','🎁','🔰','💄','👞','👟','👑','👒','🎩','🎓','👓','⌚','👔','👕','👖','👗','👘','👙','👠','👡','👢','👚','👜','💼','🎒','👝','👛','💰','💳','💲','💵','💴','💸','💱','💹','🔫','🔪','💣','💉','💊','🚬','🔔','🚪','🔮','🔋','🔦','🔋','🔌','🔋','🔋','📜','📗','📘','📙','📚','📔','📒','📑','📓','📕','📖','📰','📛','🎃','🎄','🎀','🎁','🎂','🎈','🎆','🎇','🎉','🎊','🎍','🎏','🎌','🎐','🎋','🎎','📱','📲','📟','📞','☎','📞','📞','📠','📦','✉','📨','📩','📪','📫','📮','📤','📥','📢','📥','📣','📡','💬','✒','✏','📝','📏','📐','📍','📌','📎','✂','💺','💻','💽','💾','💿','📆','💿','📅','📇','📋','📁','📂','📃','📄','📊','📈','📉','⛺','🎡','🎢','🎠','🎪','🎨','🎬','🎥','📷','📹','🎭','🎫','🎮','🎲','🎰','🃏','🎴','🀄','🎯','📺','📻','📀','📼','🎧','🎤','🎧','🎤','🎵','🎶','🎼','🎻','🎹','🎷','🎺','🎸','〽','🐶','🐩','🐱','🐭','🐹','🐢','🐰','🐔','🐣','🐷','🐗','🐴','🐮','🐺🐑','🐦','🐥','🐤','🐔','🐽','🐸','🐍','🐼','🐧','🐘','🐨','🐒','🐵','🐯','🐻','🐫','🐳','🐟','🐠','🐡','🐙','🐚','🐙','🐬','🐌','🐛','🐜','🐝','🐞','🐲','🐾','🍸','🍨','🍺','🍻','🍷','🍹','🍶','🍵','🍴','🍨','🍧','🍦','🍩','🍰','🍪','🍫','🍬','🍭','🍮','🍯','🍮','🍳','🍔','🍟','🍝','🍕','🍖','🍗','🍤','🍣','🍱','🍞','🍜','🍙','🍚','🍛','🍲','🍥','🍢','🍡','🍘','🍠','🍌','🍎','🍏','🍊','🍄','🍅','🍆','🍇','🍈','🍉','🍑','🍒','🍓','🍍','🌰','🌱','🌴','🌵','🌷','🌸','🌹','🍀','🍁','🍁','🍂','🍃','🌺','🌻','🌼','🌽','🌾','🌿','☀','🌈','⛅','☁','🌁','🌂','💧','⚡','🌀','❄','⛄','🌙','🌛','🌑','🌓','🌔','🌕','🎑','🌄','🌅','🌇','🌆','🌃','🌌','🌉','🌊','🌋','🌏','🏠','🏡','🏢','🏣','🏥','🏦','🏧','🏨','🏩','🏪','🏫','⛪','⛲','🏬','🏯','🏰','🏭','🗻','🏩','🏭','🗼','🗽','🗿','⚓','🏮','💈','🔧','🔨','🔩','🛀','🚽','🚾','🎽','🎣','🎱','🎳','⚾','⛳','🎾','⚽','🎿','🏀','🏁','🏂','🏃','🏄','🏆','🐎','🏈','🏊','🚃','🚄','🚅','🚇','Ⓜ','🚌','🚏','🚑','🚒','🚓','🚕','🚗','🚙','🚢','✈','⛵','🚲','🚉','🚀','🚤','🚶','⛽','🅿','🚥','🚧','🚨','♨','💌','💍','💎','💐','💒','🇯','🇵','🇺','🇸','🇫','🇷','🇩','🇪','🇮','🇹','🇬','🇧','🇪','🇸','🇷','🇺','🇨','🇳','🇰','🇷','🔝','🔙','🔛','🔜','🔚','⏳','⌛','⏰','♈','♉','♊','♋','♌','♍','♎','♏','♐','♑','♐','♒','♓','⛎','🔱','🔯','🚻','🅰','🅱','🆎','🅾','💮','💯','🔠','🔡','🔢','🔣','🔤','➿','📶','📳','📴','🚹','🚺','🚼','♿','♻','🚭','🚩','⚠','🈁','🔞','⛔','🆒','🆗','🆕','🆘','🆕','🆘','🆙','🆓','🆖','🆚','🈲','🈳','🈴','🈵','🈶','🈵','🈷','🈸','🈹','🈂','🈺','🉐','🉑','㊙','®','®','©','™','🈚','🈯','㊗','⭕','❌','❎','ℹ','🚫','✅','✔','🔗','✴','✴','✳','➕','✖','➖','✖','➗','💠','💡','💤','💢','🔥','💥','💨','💦','💫','↕','⬆','↗','↘','➡','⬇','↙','⬅','↖','↔','⤴','⤵','⏫','⏪','⏫','↘','⏬','⏩','◀▶','🔽','🔼','❇','✨','🔴','🔵','⚪','⚫','🔳','🔲','⭐','🌟','🌠','▫','▪◽','◾','◻','◼','⬜','⬛','🔸','🔹','🔶','🔷','🔺','🔻','❔','❓','❕','❗','‼','⁉','〰','➰','♠','♥','♣','♦','🆔','🔑','↩','🆑','🔍','🔒','🔓','↪','🔐','🔘','🔎','🔖','🔏','🔃','📧','🔊','☺','😭','😭','😡','😡','😭','😡','😭','😡','😩','😊','😁','😂','😃','😄','😅','😆','😉','😠','😡','😢','😣','😤','😥','😨','😩','😰','😰','😱','😲','😳','😵','😷','😞','😒','😍','😜','😝','😋','😘','😚','😭','😌','😖','😔','😪','😏','😓','😫','🙋','🙌','🙍','🙅','🙆','🙇','🙎','🙏','😺','😼','😸','😹','😻','😽','😿','😾',
);

/*
$e1=$emoji[rand(0,count($emoji)-1)];
$e2=$emoji[rand(0,count($emoji)-1)];
$e3=$emoji[rand(0,count($emoji)-1)];
$e4=$emoji[rand(0,count($emoji)-1)]; 
$e5=$emoji[rand(0,count($emoji)-1)];
$e6=$emoji[rand(0,count($emoji)-1)];
$e7=$emoji[rand(0,count($emoji)-1)];
$e8=$emoji[rand(0,count($emoji)-1)];
$e9=$emoji[rand(0,count($emoji)-1)];
*/

/*
$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
if ($_time > 18){
$_sambutan = "Selamat Malam $nama | Semoga Mimpi Indah";
}
else if($_time > 14){
$_sambutan = "Mandi Dulu Sana $nama , Dah Sore Nih";
}
else if ($_time > 10){
$_sambutan = "Udah Makan Belum ,,Udah Siang Loh ? $nama | Makan Dulu Sana ";
}
else
{
$_sambutan = "Selamat Pagi Yah $nama ";
}
*/

$gtm = microtime();
$gentime= explode(' ',$gtm);
$pg_end = $gentime['0'] ;
$pg_start ='0';
$totaltime = ($pg_end - $pg_start);
$dettik = number_format($totaltime, 1, '.', '');
$detik = str_replace ("0.","",$dettik) ;

$ua=array("Opera/9.80 (Android; Opera Mini/7.5.35199/107.62; U; en) Presto/2.12.423 Version/12.16",
"Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) Mac OS X/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A501 Safari/9537.53"
);
$user_agent=$ua[array_rand($ua)];


if( is_dir ('log')){
//echo('folder log ada<br/>');
}
else
{
mkdir ('log');
//echo('folder log tidak ada<br/>');
}


if(file_exists('log/cokis_log')){

$cokis = dirname( __FILE__ ) . "/log/cokis_log" ;
//print_r($cokis);

//CEK PESAN BELUM DIBACA
$pesan_belum_dibaca = bukaUrl('https://mobile.facebook.com/messages/?folder=unread&_rdc=1&_rdr', $cokis);

//file_put_contents('log/debug_pesan_belum_dibaca', $pesan_belum_dibaca);
//print_r($pesan_belum_dibaca);
}
else
{

include('data_login.php');

//LOGIN DULU KIRIM EMAIL DAN PASS
$url_login=kirimKeUrl('https://mobile.facebook.com/login.php?next=https://mobile.facebook.com/login/save-device/', $data_login);

//file_put_contents('log/debug_login', $url_login);
//print_r ($url_login);

####### HASIL OUTPUT ########

preg_match('/fb_dtsg\" value\="(.*?)"/',
$url_login, $cari_persamaan_dtsg_login);
$dtsg_login=''.$cari_persamaan_dtsg_login[1].'';

preg_match('/jazoest\" value\="(.*?)"/',
$url_login, $cari_persamaan_jazoest);
$jazoest=''.$cari_persamaan_jazoest[1].'';

preg_match('/flow\" value\="(.*?)"/',
$url_login, $cari_persamaan_flow);
$flow=''.$cari_persamaan_flow[1].'';

preg_match('/nux_source\" value\="(.*?)"/',
$url_login, $cari_persamaan_nux_source);
$nux_source = ''.$cari_persamaan_nux_source[1].'';

$kirim_simpan_browser=
'fb_dtsg='.$dtsg_login.''.
'&jazoest='.$jazoest.''.
'&flow='.$flow.''.
'&next=https://mobile.facebook.com/messages/?folder=unread'.
'&nux_source='.$nux_source.'';
//print_r($kirim_simpan_browser);

//SIMPAN BROWSER DAN NEXT CEK PESAN BELUM DIBACA
$pesan_belum_dibaca = kirimKeUrl('https://mobile.facebook.com/login/device-based/update-nonce/', $kirim_simpan_browser);
//print_r (''.$pesan_belum_dibaca.'');

//KURAWAL PENUTUP IF
}


//CARI DTSG
preg_match('/fb_dtsg\" value\="(.*?)"/',
$pesan_belum_dibaca, $cari_persamaan_dtsg);

$dtsg=''.$cari_persamaan_dtsg[1].'';
//print_r($dtsg);


$halaman_sblmnya =
'\<a href="\/messages\/\?pageNum=';

$cari_pesan = 'id\="search_section">';

//POTONG HTML BAGIAN BAWAH
if(preg_match('/'.$halaman_sblmnya.'/', $pesan_belum_dibaca))
{
$potong_bawah_html = explode(
'<a href="/messages/?pageNum=', $pesan_belum_dibaca);

$pesan_belum_dibaca = $potong_bawah_html[0];
}
//BELUM KETEMU, CARI LAGI DAN POTONG HTML BAGIAN BAWAH
else if(preg_match('/'.$cari_pesan.'/', $pesan_belum_dibaca))
{
$potong_bawah_html = explode('id="search_section">', $pesan_belum_dibaca);
$pesan_belum_dibaca =''.$potong_bawah_html[0].'>';
}


$riplace_tag_inbox=str_replace(
array('<a href="/messages/read/?',  '><'),
array('',  ''),
$pesan_belum_dibaca);

//echo strip_tags( $pesan_belum_dibaca );

$riplace_tag_inbox=str_replace(
array('>'),
array('>+'),
$riplace_tag_inbox);

$riplace_tag_inbox= strip_tags($riplace_tag_inbox);
//echo( $riplace_tag_inbox );


$pesan_masuk = explode('tid=', $riplace_tag_inbox);

$pesan_masuk[0]=false ;
$pesan1 = $pesan_masuk[1];

if($pesan1 == ! null)
{
$pm1= jadikanJsonDecode ($pesan1);
$pm11 = " '0' => Array( ".$pm1 ;
}

$pesan2=$pesan_masuk[2];
if($pesan2 == ! null)
{
$pm2 = jadikanJsonDecode ($pesan2);
$pm22 = " '1' => Array( ".$pm2 ;
}

$pesan3=$pesan_masuk[3];
if($pesan3 == ! null)
{
$pm3 = jadikanJsonDecode ($pesan3);
$pm33 = " '2' => Array( ".$pm3 ;
}

$pesan4=$pesan_masuk[4];
if($pesan4 == ! null)
{
$pm4 = jadikanJsonDecode ($pesan4);
$pm44 = " '3' => Array( ".$pm4 ;
}

$kurung_tutup = ')'  ;
$titik_koma = ';'  ;

//SAMBUNG SUMUA JADI SATU
$_sambung_pm =($pm11.$pm22.$pm33.$pm44.$kurung_tutup.$titik_koma);


$_sambung_pm = str_replace(
array('&#039;',  '),)' ),
array('',  '))' ),
$_sambung_pm);

//print_r($_sambung_pm);

$_seluruh_pesan = '$_semua_inbox = Array('.$_sambung_pm ;

$baris_baru = "\n\n";

$_simpan_semua_pesan = '<?php'.$baris_baru.''.$_seluruh_pesan.''.$baris_baru.'?>';

//TULIS KE FILE TXT
file_put_contents('log/semua_inbox.php',$_simpan_semua_pesan);

//INCLUDE KAN UNTUK DI PROSES
include('log/semua_inbox.php');

for($i=1; $i<=count($_semua_inbox); $i++){

if($_semua_inbox[$i-1]['tid'] == null)
{
print_r ('tidak ada pesan') AND exit ;
}

$potong_nama = explode(' ',$_semua_inbox[$i-1]['nama']);

$tid_pesan = $_semua_inbox[$i-1]['tid'];

$riplace_tid = str_replace(
array('cid.c.',  ':',),
array('',  '/',),
$tid_pesan);

//CEK PERTEMANAN
$friendship_html = bukaUrl('https://mobile.facebook.com/friendship/'.$riplace_tid.'', $cokis);

//file_put_contents('log/debug_pertemanan', $friendship_html);
//print_r($friendship_html);

//POTONG BAGIAN ATAS HTML
$potong_friendship_html = explode('href="/menu/bookmarks/', $friendship_html);

$friendship_html = $potong_friendship_html[1];

if(preg_match('/href\="/(.*?)\">/', $friendship_html ,$cari_id_teman)){

$id_teman = str_replace(
array('href="/',  'profile.php?id=',  '">'),
array(''  ,''  ,''),
$cari_id_teman[0]);
file_put_contents('log/debug_id_pertemanan', $id_teman."\r\n", FILE_APPEND) ;

//echo ($id_teman);

}

//CEK TENTANG JENIS KELAMIN
$tentang = strip_tags(bukaUrl('https://mobile.facebook.com/'.$id_teman.'/about', $cokis));

//file_put_contents('log/debug_biodata', $tentang);
//print_r($tentang);

if(preg_match('/Jenis KelaminLaki-laki/',$tentang) || 
preg_match('/Tertarik PadaPerempuan/',$tentang) || 
preg_match('/GenderMale/',$tentang)){

$panggil = array (' 👦 Mas ',' 👦 Bang  ',' 👦 Kak ',);
}
else
{
$panggil = array (' 👵 Mbak ',' 👩 Neng ',' 👵 Non ',);
}

$panggilan = $panggil[rand(0,count ($panggil)-1)];

$nama = ''.$panggilan.' '.$potong_nama[0].' 👦 _ 👩';
//print_r($nama);


$komentari = array("
$e1 maaf $nama boZZ $e2 aku $e3 gi $e4 offlen $e5 $e6 ",
"
$e1 da $e2 apa $nama ? $e3 maaf $e4 saya $e5 cuma $e6 Bot $e7 KOPLAK $e8 ditugaskan $e9 ma $e1 bozz $e2 untuk $e3 bales $e4 Inbox :v $e5 $e6 ",
"
$e1 duh $nama Bos $e2 gi $e3 Off $e4 ne... :D $e5 ditunggu $e6 onLen $e7 nya $e8 yakz $e9 $e1",
"
$e1 duh $e2 sayang $e3 sekali $nama saya $e4 cuma $e5 bot :v $e6 gak $e7 ngerti $e8 apa $e9 apa $e1 $e2 ",
);

$kirim_komen = ''.$komentari[rand(0,count($komentari) - 1)].'';

/*
$filename = 'log/jumlah_inbox_yang_dibalas.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) ;
fclose($handle);
*/

$em = array (' 💙 ',' 💚 ',' ❤ ',' 💙 ',' 💜 ',' 💚 ',);
$emo = $em[rand(0,count($em)-1)];

$penutup_komen='
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
::::::::* • sukses terkirim '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ• '.$e1.' •.....'
.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.'/'.$bln.'/'.$thn.'
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
• '.$e1.' '.$ucapan.' '.$e1.' '.$sapa.' '.$e1.'
'.$e1.' ╬  ▅ ▄ ▃ ▂ ʂάℓάღ ● ŕoßoʈ ▂ ▃ ▄ ▅  ╬ '.$e1.'';


$message = ($kirim_komen.$penutup_komen);
//print_r($message);



$dataPost1=
'fb_dtsg='.$dtsg.''.
'&body='.urlencode($message).''.
'&tids='.$tid_pesan.'';

$dataPost2=
'fb_dtsg='.$dtsg.''.
'&body='.
'&tids='.$tid_pesan.''.
'&sticker_id='.$id_stiker.'';

$kirim_pesan1 = kirimKeUrl('https://mobile.facebook.com/messages/send/?icm=1&refid=12',$dataPost1);

$kirim_pesan2 = kirimKeUrl('https://mobile.facebook.com/messages/send/?icm=1',$dataPost2);

//print_r ($infoKirim);
print_r ('terkirim<br/>');

//KURAWAL PENUTUP PERULANGAN FOR
}


########## FUNCTION #########


function jadikanJsonDecode($hsl_potongan){

$potong_tambah=explode('+', $hsl_potongan);
//echo $potong_tambah[0] ;

preg_match('/cid(.*?)&/', $potong_tambah[0] , $ambil_tid);

$hsl_tid = $ambil_tid[0];

$hsl_tid = str_replace(
array('%3A',  '&'),
array(':',  ''),
$hsl_tid );

$has1 = "'tid' => '".$hsl_tid ;
//echo $has1;
$has2 = "', 'nama' => '".$potong_tambah[1] ;
//echo strip_tags( $has2 );
$has3 = "', 'pesan' => '".$potong_tambah[2] ;
//echo strip_tags( $has3 );
$has4 = "', 'date' => '".$potong_tambah[3] ;

$penutup = "')," ;
$_sam = $has1.$has2.$has3.$has4.$penutup;
//echo strip_tags( $_sam );
return($_sam);
}


function bukaUrl($url,$cookie_file_path){

$cookie_file_path = dirname( __FILE__ ) . "/log/cokis_log" ;

$atur_curl_get = curl_init();
curl_setopt_array(($atur_curl_get),
array(
CURLOPT_HEADER => false ,
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


function kirimKeUrl($link,$pos){

$cookie_file_path = dirname( __FILE__ ) . "/log/cokis_log" ;

$atur_curl_kirim = curl_init();
curl_setopt_array(($atur_curl_kirim),
array(
CURLOPT_HEADER => 0 ,
CURLOPT_NOBODY => false ,
CURLOPT_URL => $link ,
CURLOPT_SSL_VERIFYHOST => 0 ,
CURLOPT_COOKIEJAR => $cookie_file_path ,
CURLOPT_COOKIEFILE => $cookie_file_path ,
CURLOPT_USERAGENT =>
"Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) Mac OS X/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A501 Safari/9537.53",
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_SSL_VERIFYPEER => 0 ,
CURLOPT_REFERER => 0 ,
CURLOPT_FOLLOWLOCATION => 1 ,
CURLOPT_POST => 1 ,
CURLOPT_POSTFIELDS => $pos )
);

$hasilCurlKirim = curl_exec ($atur_curl_kirim);
curl_close ($atur_curl_kirim);
//$infoKirim = curl_getinfo($atur_curl_kirim);
//print_r($hasilCurlKirim);
return ($hasilCurlKirim);
}


?>

