<?php


//error_reporting(0);

//include ('stiker.php');
include('data_login.php');
include('curl.php');


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

$ua=array("Opera/9.80 (Android; Opera Mini/7.5.35199/107.62; U; en) Presto/2.12.423 Version/12.16");

/*
$ua=array("Mozilla/5.0 (Linux; Android 5.1.1; SM-J105F Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 free Safari/537.36");
*/

/*
$ua=array("Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) Mac OS X/537.51.1 (KHTML, like Gecko) Version/7.0 free/11A501 Safari/9537.53");
*/

$user_agent=$ua[array_rand($ua)];

$url_login=('https://free.facebook.com/login.php?');

$ch = curl_init();
curl_setopt_array( $ch , array(
CURLOPT_HEADER => false ,
CURLOPT_NOBODY => false ,
CURLOPT_URL => $url_login ,
CURLOPT_SSL_VERIFYHOST => 0 ,
CURLOPT_COOKIEJAR => 'cookie.txt' ,
CURLOPT_COOKIEFILE => 'cookie.txt' ,
CURLOPT_USERAGENT =>
"Opera/9.80 (Android; Opera Mini/7.5.35199/107.62; U; en) Presto/2.12.423 Version/12.16" ,
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_REFERER => $_SERVER[ 'REQUEST_URI'] ,
CURLOPT_SSL_VERIFYPEER => 0 ,
CURLOPT_FOLLOWLOCATION => true ,
CURLOPT_POST => 1 ,
CURLOPT_POSTFIELDS => $data_login ,
CURLOPT_VERBOSE => 0));
$hasil_login = curl_exec ($ch);
curl_close ($ch);
//file_put_contents('log/curl_login',$baca_inbox);
//$info = curl_getinfo($ch);
//print_r($hasil_login);


$baca_inbox = bukaUrl('https://free.facebook.com/messages/?folder=unread&_rdc=1&_rdr');
//file_put_contents('log/curl_baca',$baca_inbox);
//print_r($baca_inbox);

$pot_inbox = explode(
'href="/messages/read/?', $baca_inbox);
//if($pot_inbox[1] == null )
//print_r ('tidak ada pesan') & exit or die ;


$potong_inbox = $pot_inbox[1];

preg_match('/fb_dtsg(.*?)autocomplete/' ,
$potong_inbox, $hasil_persamaan);
//echo $hasil_persamaan[0];

$ambil_dtsg = str_replace(
array('fb_dtsg" value="',  '" autocomplete'),
array('',  ''),
$hasil_persamaan[0]);

$dtsg=('AQExlKHrnYZg:AQFiAwUN_Drx');
//$dtsg=$ambil_dtsg;
//print_r($dtsg);


$halaman_sblmnya = '\<a href="\/messages\/\?pageNum=';
$cari_pesan = 'id\="search_section">';

if(preg_match('/$halaman_sblmnya/', $potong_inbox)){

$potong_belakang = explode('<a href="/messages/?pageNum=',$potong_inbox);
$isi_inbox = $potong_belakang[0];
}

else if(preg_match('/$cari_pesan/', $potong_inbox)){
$potong_belakang = explode('id="search_section">',$potong_inbox);
$isi_inbox =''.$potong_belakang[0].'>';

}else{

$isi_inbox = $potong_inbox;
}

$riplace_inbox=str_replace(
array('<a href="/messages/read/?',  '><'),
array('',  ''),
$isi_inbox);

//echo strip_tags( $isi_inbox );

$riplace_inbox=str_replace(
array('>'),
array('>+'),
$riplace_inbox);

$riplace_inbox= strip_tags($riplace_inbox);
//echo( $riplace_inbox );


$pesan_masuk = explode('tid=', $riplace_inbox);

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


$pesan1 = $pesan_masuk[1];

if($pesan1 == ! null){

$pm1= jadikanJsonDecode ($pesan1);
$pm11 = " '0' => Array( ".$pm1 ;
$pm111 = $pm11;
}

$pesan2=$pesan_masuk[2];
if($pesan2 == ! null){

$pm2 = jadikanJsonDecode ($pesan2);
$pm22 = " '1' => Array( ".$pm2 ;
$pm222 = $pm22;
}

$pesan3=$pesan_masuk[3];
if($pesan3 == ! null){

$pm3 = jadikanJsonDecode ($pesan3);
$pm33 = " '2' => Array( ".$pm3 ;
$pm333 = $pm33;
}

$pesan4=$pesan_masuk[4];
if($pesan4 == ! null){

$pm4 = jadikanJsonDecode ($pesan4);
$pm44 = " '3' => Array( ".$pm4 ;
$pm444 = $pm44;
}

$kurung_tutup = ')'  ;
$titik_koma = ';'  ;

$_sambung_pm =($pm111.$pm222.$pm333.$pm444.$kurung_tutup.$titik_koma);


$_sambung_pm = str_replace(
array('&#039;',  '),)' ),
array('',  '))' ),
$_sambung_pm);

//print_r($_sambung_pm);

$_seluruh_pesan = '$_semua_inbox = Array('.$_sambung_pm ;

$baris_baru = "\n\n";

$_simpan_semua_pesan = '<?php'.$baris_baru.''.$_seluruh_pesan.''.$baris_baru.'?>';
/*
file_put_contents('log/semua_inbox.php',$_simpan_semua_pesan);
*/

include('log/semua_inbox.php');
//print_r($_semua_inbox[0]['nama']);


for($i=1; $i<=count($_semua_inbox); $i++){

$potong_nama = explode(' ',$_semua_inbox[$i-1]['nama']);

$tid_pesan = $_semua_inbox[$i-1]['tid'];

/*
//baca pesan
//https://mobile.facebook.com/messages/read/?fbid=100005731515527&zero_e=5&zero_et=1533214847&_rdc=2&_rdr

$lihat_dtsg=bukaUrl('https://free.facebook.com/messages/read/?tid='.$tid_pesan.'&refid=11',$data_login);

$ambil_value=explode('fb_dtsg" value="',$lihat_dtsg);

$value=explode('" autocomplete="',$ambil_value[1]);

$dtsg=$value[0];
*/


$riplace_tid = str_replace(
array('cid.c.',  ':',),
array('',  '/',),
$tid_pesan);

$friendship_html = bukaUrl('https://free.facebook.com/friendship/'.$riplace_tid.'');
//file_put_contents('log/curl_pertemanan',$friendship_html);
//print_r($friendship_html);

$potong_friendship_html = explode('href="/menu/bookmarks/', $friendship_html);

$friendship_html = $potong_friendship_html[1];

if(preg_match('/href="\/(.*?)">/', $friendship_html ,$cari_id_teman)){

$id_teman = str_replace(
array('href="/',  'profile.php?id=',  '">',)
,'',$cari_id_teman[0]);

//echo ($id_teman);
}


$tentang = strip_tags(bukaUrl('https://free.facebook.com/profile.php?v=info&id='.$id_teman.'&refid=17'));
//file_put_contents('log/curl_biodata', $tentang);
//print_r($tentang);

if(preg_match('/Jenis KelaminLaki-laki/',$tentang) || 
preg_match('/Tertarik PadaPerempuan/',$tentang) || 
preg_match('/GenderMale/',$tentang)){

$panggil = array (' 👦 Mas ',' 👦 Bang ',' 👮 Den ',' 👦 Kak ',);
}
else
{
$panggil = array (' 👵 Mbak ',' 👩 Neng ',' 👵 Non ',' 👩 Jeng ',);
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


$filename = 'log/jumlah_status_yang_dikomen.txt';
$handle = fopen($filename, 'r');
$hits = trim(fgets($handle)) ;
fclose($handle);

$em = array (' 💙 ',' 💚 ',' ❤ ',' 💙 ',' 💜 ',' 💚 ',);
$emo = $em[rand(0,count($em)-1)];

$penutup_komen='
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
::::::::* • sukses terkirim '.$detik.' Ðєʈιк • *:::::::
.....• '.$e1.' • ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† '.$menit.' ʍεηiʈ• '.$e1.' •.....
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
ĥάrι ιηι ĥάrι '.$hari.' '.$e1.' ʈɠl '.$tgl.'/'.$bln.'/'.$thn.'
'.$e1.'.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.¸'.$e1.'¸.•*´¨*•.'.$e1.'
• '.$e1.' '.$ucapan.' '.$e1.' '.$sapa.' '.$e1.'
'.$e1.' ╬  ▅ ▄ ▃ ▂ ʂάℓάღ ● ŕoßoʈ ▂ ▃ ▄ ▅  ╬ '.$e1.'';


$message = urlencode($kirim_komen.$penutup_komen);
//print_r($message);

/*
$dataPost = 'charset_test=%E2%82%AC%2C%C2%B4%2C%E2%82%AC%2C%C2%B4%2C%E6%B0%B4%2C%D0%94%2C%D0%84'.
'&tids='.$tid_pesan.''.
'&wwwupp=V3'.
'&body='.$message.''.
'&waterfall_source=message'.
'&fb_dtsg='.$dtsg.''.
'&referrer='.
'&ctype='.
'&cver=legacy';
*/

/*
https://z-upload.facebook.com/_mupload_/mbasic/messages/attachment/photo/"

enctype="multipart/form-data"
'&attachment=dropbox.com/s/gqestfmds24ry8t/2.png?dl=1'.
*/

$dataPost=
'fb_dtsg=AQEV_HnexxEa:AQEXdF8FckPu'.
'&jazoest=2658169869572110101120120699758658169881007056709910780117'.
'&tids=cid.c.100005731515527:100018522420715'.
'&ids=100005731515527'.
'&file1=dropbox.com/s/gqestfmds24ry8t/2.png?dl=1'.
'&body=b'.
'&sticker_id=785424174962270';


/*
$dataPost='tids=cid.c.100005731515527:100018522420715&wwwupp=V3&body='.$message.'&waterfall_source=message&m_sess=&fb_dtsg='.$dtsg.'&__req=1b&__user=100005731515527';
*/

$cookie_file_path = dirname ( __FILE__ ) . "/cookie.txt" ;

$kirim_pesan = kirimPesanKeUrl('https://z-upload.facebook.com/_mupload_/mbasic/messages/attachment/photo/',$dataPost,$cookie_file_path);

/*
https://z-upload.facebook.com/_mupload_/mbasic/messages/attachment_url/photo

https://mbasic.facebook.com/friends/center/requests/
*/

/*
$kirim_pesan = kirimPesanKeUrl('https://free.facebook.com/messages/send/?icm=1&refid=12',$dataPost,$cookie_file_path);
*/

print_r ($kirim_pesan);
//print_r ($infoKirim);

//print_r ('terkirim<br/>');


}


function kirimPesanKeUrl($link,$dP,$cookie_file_path){

$curlKirim = curl_init();
curl_setopt_array( $curlKirim , array(
CURLOPT_HEADER => false ,
CURLOPT_NOBODY => false ,
CURLOPT_URL => $link ,
CURLOPT_SSL_VERIFYHOST => 0 ,
CURLOPT_COOKIEJAR => $cookie_file_path ,
CURLOPT_COOKIEFILE => $cookie_file_path ,
CURLOPT_USERAGENT =>
"Opera/9.80 (Android; Opera Mini/7.5.35199/107.62; U; en) Presto/2.12.423 Version/12.16" ,
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_SSL_VERIFYPEER => 0 ,
CURLOPT_REFERER => true ,
CURLOPT_FOLLOWLOCATION => true ,
CURLOPT_CUSTOMREQUEST => 'POST' ,
CURLOPT_POST => 1 ,
CURLOPT_UPLOAD => 1 ,
CURLOPT_POSTFIELDS =>$dP ,CURLOPT_STDERR => file_put_contents('log/curl_debug')));

//CURLOPT_VERBOSE => 1

$hasilCurlKirim = curl_exec ($curlKirim);
curl_close ($curlKirim);
$infoKirim = curl_getinfo($curlKirim);
//print_r($hasilCurlKirim);
return ($hasilCurlKirim);
}


function bukaUrl($url){
$chf = curl_init();
curl_setopt_array( $chf , array(
CURLOPT_HEADER => false ,
CURLOPT_NOBODY => false ,
CURLOPT_URL => $url ,
CURLOPT_SSL_VERIFYHOST => false ,
CURLOPT_COOKIEJAR => 'cookie.txt' ,
CURLOPT_COOKIEFILE =>'cookie.txt' ,
CURLOPT_USERAGENT =>
"Opera/9.80 (Android; Opera Mini/7.5.35199/107.62; U; en) Presto/2.12.423 Version/12.16" ,
CURLOPT_RETURNTRANSFER => 1 ,
CURLOPT_SSL_VERIFYPEER => false ,
CURLOPT_REFERER => false ,
//CURLOPT_REFERER => $_SERVER[ 'REQUEST_URI'] ,
CURLOPT_SSL_VERIFYPEER => false ,
CURLOPT_FOLLOWLOCATION => false ,
//CURLOPT_POST => 1 ,
//CURLOPT_POSTFIELDS => $data_login ,
CURLOPT_VERBOSE => false));

$hasil = curl_exec ($chf);
curl_close ($chf);
//$info = curl_getinfo($chf);
//print_r($hasil_login);
return $hasil;
}

//CURLOPT_STDERR, $out);
//CURLOPT_POSTFIELDS, http_build_query($post))

//unlink('coki_browser');


$file =
new
CURLFile('full path/filename','extension','filename');
$post= array('file'=> $file);
$curl = curl_init();
//curl_setopt ... curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($curl);
curl_close($curl);


$tmpfile = $_FILES['image']['tmp_name'];
//$tmpfile = $_FILES['t']['png'];

$filename = basename($_FILES['image']['name'],'tmp/t.png');


$dataPost = array(
'uploaded_file' => '@ '.$tmpfile.' ;

filename = '.$filename,);

$ch = curl_init();

curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);

// set your other cURL options here (url, etc.)curl_exec($ch);In the receiving script, you would have:

print_r($_FILES);

$foto='<img src"tmp/t.png)>';
print_r($foto);


?>

