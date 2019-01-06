<?php

$idstiker = '

url ambil id stiker
https://mobile.facebook.com/messages/sticker_picker/?thread_id=cid.c.100005731515527%3A100018522420715&pack_id=12977231303481801&pack_page = 1

url ambil id stiker hlmn berikutnya
https://mobile.facebook.com/messages/sticker_picker/?thread_id=cid.c.100005731515527%3A100018522420715&pack_id=12977231303481802&pack_page = 2

https://mobile.facebook.com/messages/sticker_picker/?thread_id=cid.c.100005731515527%3A100018522420715&pack_id=12977231303481803&pack_page = 3

url buka sitiker
https://mobile.facebook.com/messages/sticker_picker/?thread_id=cid.c.100005731515527%3A100018522420715&pack_id=419189941536188

url cari id all pack
<a href = 3D"https://mobile.facebook.com/messages/sticker_picker/?thread_id=cid.c.100005731515527%3A100018522420715&amp;pack_id=478376198960746" class = "sec">Yes We Code</a><span aria-hidden = "true">  = C2 = B7

';

$p = explode('https://mobile.facebook.com/messages/sticker_picker/?thread_id=', $idstiker);
$ha = $p[1];
$hb = $p[2];
$hc = $p[3];
$hd = $p[4];
$he = $p[5];
//echo $ha;

preg_match('/pack_id=(.*?)&/' ,
$ha, $hasil_persamaan);
echo $hasil_persamaan[1];

preg_match('/pack_id=(.*?)&/' ,
$hb, $hasil_persamaan2);
//echo $hasil_persamaan2[1];

preg_match('/pack_id=(.*?)&/' ,
$hc, $hasil_persamaan3);
//echo $hasil_persamaan3[1];

preg_match('/pack_id=(.*?)&/' ,
$hd, $hasil_persamaan3);
//echo $hasil_persamaan3[1];

preg_match('/pack_id=(.*?)&/' ,
$he, $hasil_persamaan3);
//echo $hasil_persamaan3[1];

$araikan=array($ha,$hb,$hc,$hd,$he);

$cari = preg_match('/https:\/\/(.*?)\/messages/' ,
$idstiker, $hasil_persamaan);
//echo $hasil_persamaan[0];
//echo $hasil_persamaan[1];
/*
preg_match('/pack_id = (.*?)&/' ,
$idstiker, $a);

echo $a[1];
//echo $hasil_persamaan[4];

*/

//foreach($hasil_persamaan as $hs){
//echo $hs;
//}
/*
526120374186328
526120130853019
526120214186344
526120230853009
1313755408744952
1313755458744947
1313755825411577
1313755678744925
1313755812078245
*/


?>
