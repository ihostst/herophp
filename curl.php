<?php


function auto($url){
$pengaturan_curl = curl_init();
curl_setopt_array(($pengaturan_curl),
array(
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

$hasil = curl_exec ($pengaturan_curl);
curl_close ($pengaturan_curl);
//$info = curl_getinfo($pengaturan_curl);
//print_r($hasil);
return $hasil;
}


$huruf = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',);

/*
 ƙєçεράʈάη ƙøʍεηʈ Ðєʈιк ʂεƙάrαηɠ נάʍ '.$jam.' ℓεώą† ʍεηiʈ ĥάrι ιηι ĥάrι ʈɠl ʂυđάh ʂʈάʈυʂ

 ʂυƙʂεʂ †εrƙιrιʍ
ʂąℓąʍ ● ŕoɓo† 
υçάράη ɣάηɠ †εrƙιrιʍ
*/

$hurufUnik = array('ά','ɓ','ç','∂','ε','f','ɠ','ĥ','ι','j','ƙ','ℓ','ʍ','η','ø','ρ','q','r','ʂ','†','υ','v','ώ','x','ɣ','z','ά','ɓ','ç','∂','ε','f','ɠ','ĥ','ι','j','ƙ','ℓ','ʍ','η','ø','ρ','q','r','ʂ','†','υ','v','ώ','x','ɣ','z',) ;

if (date_default_timezone_set('Asia/Jakarta')){
$jam = date('H');
$menit= date('i');
$hari_ini = date('w'); 
$tgl = date('d'); 
$bln = date('m'); 
$thn = date('Y'); 

switch($hari_ini){
case 0 :  $hari = 'Minggu'; 
break;

case 1 : $hari = 'Senin'; 
break;

case 2 :  $hari = 'Selasa' ; 
break;

case 3 :  $hari = 'Rabu'; 
break;

case 4 :  $hari = 'Kamis'; 
break;

case 5 :  $hari = 'Jum`at'; 
break;

case 6 :  $hari = 'Sabtu'; 
break;

default :  $hari = 'UnKnown'; 
break;

}


switch($bln){
case '1' :  $bulan = 'Januari'; 
break;

case '2' :  $bulan = 'Februari'; 
break;

case '3' :  $bulan = 'Maret'; 
break;

case '4' :  $bulan = 'April'; 
break;

case '5' :  $bulan = 'Mei'; 
break;

case '6' :  $bulan = 'Juni'; 
break;

case '7' :  $bulan = 'Juli'; 
break;

case '8' :  $bulan = 'Agustus'; 
break;

case '9' :  $bulan = 'September'; 
break;

case '10' :  $bulan = 'Oktober'; 
break;

case '11' :  $bulan = 'November'; 
break;

case '12' :  $bulan = 'Desember'; 
break;

default :  $bulan = 'UnKnown'; 
break ;

}


switch( $jam ){
case '00' :  $ucapan = 'met malem' ; 
break ;

case '01' :  $ucapan = 'met dini hari' ; 
break ;

case '02' :  $ucapan = 'met dini hari' ; 
break ;

case '03' :  $ucapan = 'met dini hari' ; 
break ;

case '04' :  $ucapan = 'met dini hari' ; 
break ;

case '05' :  $ucapan = 'met pagi' ; 
break ;

case '06' :  $ucapan = 'met pagi' ; 
break ;

case '07' :  $ucapan = 'met pagi' ; 
break ;

case '08' :  $ucapan = 'met pagi' ; 
break ;

case '09' :  $ucapan = 'met jelang siang' ;
break ;

case '10' :  $ucapan = 'met siang' ; 
break ;

case '11' :  $ucapan = 'met siang' ; 
break ;

case '12' :  $ucapan = 'met siang' ; 
break ;

case '13' :  $ucapan = 'met siang' ; 
break ;

case '14' :  $ucapan = 'met siang' ; 
break;

case '15' :  $ucapan = 'met sore' ; 
break ;

case '16' :  $ucapan = 'met sore' ; 
break ;

case '17' :  $ucapan = 'met petang' ; 
break ;

case '18' :  $ucapan = 'met petang' ; 
break ;

case '19' :  $ucapan = 'met malem' ; 
break ;

case '21' :  $ucapan = 'met malem' ; 
break ;

case '21' :  $ucapan = 'met malem' ; 
break ;

case '22' :  $ucapan = 'met malem' ; 
break ;

case '23' :  $ucapan = 'met malem' ; 
break ;

case '24' :  $ucapan = 'met malem' ; 
break ;

}


switch( $jam ){
case '00' : $sapa = 'beLum tidur nih' ; 
break ;

case '01' : $sapa = 'Jiaaah.. Lum tdr yah' ; 
break ;

case '02' : $sapa = 'Jiaaah.. Lum tdr yah' ; 
break ;

case '03' :  $sapa = 'Jiaaah.. Lum tdr yah' ; 
break ;

case '04' :  $sapa = 'Jiaaah.. Lum tdr yah' ; 
break ;

case '05' :  $sapa = 'Jiaaah.. Lum tdr yah' ; 
break ;

case '06' :  $sapa = 'jiah udah online yaa' ; 
break ;

case '07' :  $sapa = 'jiah udah online yaa' ; 
break ;

case '08' :  $sapa = 'Sarapan blm nih' ; 
break ;

case '09' :  $sapa = 'Sarapan blm nih' ; 
break ;

case '10' :  $sapa = 'Met Tifitas Ea' ; 
break ;

case '11' :  $sapa = 'Met Tifitas Ea' ; 
break ;

case '12' :  $sapa = 'Met Tifitas Ea' ; 
break ;

case '13' :  $sapa = 'Sholat Dhuhur lum' ; 
break ;

case '14' :  $sapa = 'Makan siang lum' ; 
break ;

case '15' :  $sapa = 'Met apa ja deh' ; 
break ;

case '16' :  $sapa = 'Met apa ja deh' ; 
break ;

case '17' :  $sapa = 'Sholat Ashar lum' ; 
break ;

case '18' :  $sapa = 'Met Nyantai aja' ; 
break ;

case '19' :  $sapa = 'Dah mandi lum' ; 
break ;

case '20' :  $sapa = 'Sholat Magrib blm' ; 
break ;

case '21' :  $sapa = 'Makan malam lum' ; 
break ;

case '22' :  $sapa = 'Waktunya nonton pesbukers' ; 
break ;

case '23' :  $sapa = 'nonton pesbukers lucu nih' ;
break ;

case '24' :  $sapa = 'waktunya bobok' ; 
break ;

}
}

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

$emoji = array('
🙉','🙊','💩','👶','👦','👧','👨','👩','👴','👵','💏','💑','👪','👫','👮','👷','💁','👯','👰','👸','🎅','👼','💃','💆','💇','💅','👹','👺','👾','👿','👂','👃','👣','👄','👅','👃','👂','💪','👿','💋','❤','💙','💚','💛','💜','💓','💔','💕','👅','💖','💗','💘','💝','💞','💟','😷','😞','🎁','🔰','💄','👟','👑','👒','👔','👖','👗','👘','👠','👡','👢','👚','🎒','👝','👛','💸','💱','🔫','💉','💊','🔔','🔮','🔋','📗','📘','📙','📚','📒','📛','🎃','🎄','🎀','🎁','🎈','🎉','🎊','🎍','🎏','🎋','🎎','☎','📪','📮','📤','📥','📢','📣','✒','✏','📐','📍','📌','✂','💺','💻','📂','📊','⛺','🎢','🎠','🎪','🎨','🎭','🃏','🎴','🎯','📺','📻','🎵','🎶','🎻','🎷','🎺','🎸','〽','🐶','🐩','🐹','🐢','🐰','🐷','🐦','🐥','🐤','🐔','🐽','🐸','🐍','🐘','🐯','🐳','🐟','🐠','🐡','🐙','🐚','🐙','🐬','🐌','🐛','🐝','🐞','🐲','🐾','🍸','🍨','🍺','🍻','🍷','🍹','🍨','🍧','🍦','🍰','🍫','🍬','🍭','🍮','🍔','🍟','🍝','🍕','🍤','🍣','🍱','🍞','🍜','🍢','🍡','🍌','🍎','🍏','🍊','🍄','🍅','🍆','🍇','🍈','🍉','🍑','🍒','🍓','🍍','🌱','🌴','🌵','🌷','🌸','🌹','🍀','🍁','🍁','🍂','🍃','🌺','🌻','🌽','🌾','🌿','☀','⛅','🌁','🌂','💧','🌀','❄','⛄','🌙','🌛','🌓','🌕','🌄','🌇','🌆','🌃','🌌','🌉','🌊','🌋','🌏','🏠','🏡','🏢','🏣','🏥','🏦','🏧','🏨','🏩','🏪','🏫','⛪','🏬','🏯','🏰','🏭','🗻','🏩','🏭','🗼','🗽','🏮','⛳','🎿','🏀','🏂','🏃','🏄','🏆','🏈','🏊','🚃','🚅','🚇','Ⓜ','🚌','🚑','🚒','🚕','🚗','🚢','✈','⛵','🚲','🚉','🚀','🚤','🚶','⛽','🚧','🚨','♨','💍','💎','💐','💒','⏰','♈','♉','♊','♋','♌','♍','♎','♏','♐','♑','♒','♓','⛎','🚻','💮','💯','📶','📳','🚹','🚺','🚼','♿','♻','🚭','🚩','🔞','⛔','🈲','🈳','🈴','🈵','🈶','🈵','🈷','🈸','🈹','🈂','🈺','🉐','🉑','㊙','🈚','🈯','㊗','⭕','❎','🚫','✴','✳','💠','💡','💤','💢','🔥','💥','💦','↕','↔','⤴','⤵','✨','🔴','🔵','⭐','🌟','🔶','🔷','🔺','🔻','♥','♦','↩','🆑','🔒','↪','🔖','🔏','🔃','☺','😡','😩','😊','😁','😂','😃','😄','😅','😆','😉','😠','😡','😢','😣','😤','😥','😨','😩','😰','😰','😱','😲','😳','😵','😷','😞','😒','😍','😜','😝','😋','😘','😚','😭','😌','😖','😔','😪','😏','😓','😫','🙋','🙌','🙅','🙆','🙇','🙎','🙏','😺','😸','😹','😻','😽','😿','😾',
);

$e1 = $emoji[array_rand($emoji)];
$e2 = $emoji[array_rand($emoji)];
$e3 = $emoji[array_rand($emoji)];
$e4 = $emoji[array_rand($emoji)];
$e5 = $emoji[array_rand($emoji)];
$e6 = $emoji[array_rand($emoji)];
$e7 = $emoji[array_rand($emoji)];
$e8 = $emoji[array_rand($emoji)];
$e9 = $emoji[array_rand($emoji)];
$e10 = $emoji[array_rand($emoji)];
$e11 = $emoji[array_rand($emoji)];
$e12 = $emoji[array_rand($emoji)];
$e13 = $emoji[array_rand($emoji)];
$e14 = $emoji[array_rand($emoji)];
$e15 = $emoji[array_rand($emoji)];
$e16 = $emoji[array_rand($emoji)];
$e17 = $emoji[array_rand($emoji)];
$e18 = $emoji[array_rand($emoji)];
$e19 = $emoji[array_rand($emoji)];
$e20 = $emoji[array_rand($emoji)];
$e21 = $emoji[array_rand($emoji)];
$e22 = $emoji[array_rand($emoji)];
$e23 = $emoji[array_rand($emoji)];
$e24 = $emoji[array_rand($emoji)];
$e25 = $emoji[array_rand($emoji)];
$e26 = $emoji[array_rand($emoji)];

$abjad=array(" a"," b"," c"," d"," e"," f"," g"," h"," i"," j"," k"," l"," m"," n"," o"," p"," q"," r"," s"," t"," u"," v"," w"," x"," y"," z"," A"," B"," C"," D"," E"," F"," G"," H"," I"," J"," K"," L"," M"," N"," O"," P"," Q"," R"," S"," T"," U"," V"," W"," X"," Y"," Z",);

$selipkan_emoji=array(" $e1 a"," $e2 b"," $e3 c"," $e4 d"," $e5 e"," $e6 f"," $e7 g"," $e8 h"," $e9 i"," $e10 j"," $e11 k"," $e12 l"," $e13 m"," $e14 n"," $e15 o"," $e16 p"," $e17 q"," $e18 r"," $e19 s"," $e20 t"," $e21 u"," $e22 v"," $e23 w"," $e24 x"," $e25 y"," $e26 z"," $e1 A"," $e2 B"," $e3 C"," $e4 D"," $e5 E"," $e6 F"," $e7 G"," $e8 H"," $e9 I"," $e10 J"," $e11 K"," $e12 L"," $e13 M"," $e14 N"," $e15 O"," $e16 P"," $e17 Q"," $e18 R"," $e19 S"," $e20 T"," $e21 U"," $e22 V"," $e23 W"," $e24 X"," $e25 Y"," $e26 Z",);



?>
