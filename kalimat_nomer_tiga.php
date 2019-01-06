<?php

$komentari=array(
"
Bentar Lagi Mikirrr,, Loading Please Wait.........................................................................Asem,, aneh aku malah lupa mau komen apa ya tadi..??? yaw dah ngikut komen kayak $tag_nama_si_z aja dah...

$komennya_si_z

Okay dah $ucapan aja...
",
"
maap komen telat $nama dijalan tadi ada razia orang cakep,, ketangkep deh gue,, hehehe...",
"
duh komen ku telat lagi nih,, maap ya $nama $ucapan aja dah...
",
"
hadew... komen nya udah keduluan ama $tag_nama_si_z, tapi gak papa dah $nama meskipun cuma jadi yang ke- $nom,, yang penting udah hadir bukan begitu preeend..! tapi komen dibawah nya $tag_nama_si_z enak juga loh,, hehehee...
",
"
jiaaaaaaahh... nomer $nom,, nih $nama ya udah ngikut komen nya $tag_nama_si_z aja dah xixixi...

$komennya_si_z

Oke siip dah...
",
"
yang komen nomer satu $tag_nama_si_a,, yang di atas ku $tag_nama_si_z,, duh komen aku nomer $nom,, dung aku... Hadew telat hadir nih $nama maap ea xixixi $ucapan aja deh...
",
"
$tag_nama_si_a,, $tag_nama_si_z,, saya like your komen hehehe...
",
"
colek dulu ahh... hehehe,, $tag_nama_si_a,, $tag_nama_si_z,, $nama
",
"
duh lupa mau komen apa tadi ea..??? ngikut komen nya $tag_nama_si_z aja deh... hehehe..

$komennya_si_z

hixz hixz...
",
"
jadi malu nih $nama mau komen kalo cuma jadi yang ke $nom hihihi... jiaaahh,, $tag_nama_si_a udah hadir duluan xixixi...
",
"
asyiiik komen pertama kali,, Upzzz.... maap $nama gak jadi... ada $tag_nama_si_a,, hahahaha... aku kira komen ku yang pertama,, ternyata yang ke $nom Haddeewh...
",
"
$ucapan $nama wah $nama gak bilang bilang kalo mau bikin status,, jadi telat deh jempol saya tapi komen dibawah nya $tag_nama_si_z gak papa kalee ea,, xixixi...
",
"
maap gak bisa nomer satu $nama kalah cepet ama $tag_nama_si_a nih... maklum jempul saya lagi kesleo,, wkwkwk...
",
"
jiaaahhhh... mau komen gini padahal aku tadi loh...

$komennya_si_z

tapi sayang udah keduluan ama $tag_nama_si_z,, gak jadi komen aja deh kalo gitu hihihi,, eh... $tag_nama_si_a udah hadir duluan ea,, apa kabar..??
",
"
tadi nya sih aku pingin komen kayak gini $nama

$komennya_si_z

asem,, malah udah keduluan $tag_nama_si_z hihihi,, gak jadi komen deh kalo gitu...
",
"
maap $nama saya ngikut komen nya $tag_nama_si_z aja lah,, udah kriting jari saya hehehe...

$komennya_si_z

Oke siip ya ya ya..
",
"
duh,, lagi lagi $tag_nama_si_a yang komen pertama kali... Cuapeek dweeeh,, hehehe like ndizZ aja lah $nama
",
'
duh padahal tadi aku mau komen gini loh...

'.$komennya_si_z.'

tapi sayang udah keduluan '.$tag_nama_si_z.' kalo gitu ea aku mau komen gini aja deh...

'.str_replace($huruf,$alay,$komennya_si_z).'

gimana '.$nama.' mirip gak..??? wkwkwk... '.$ucapan.' aja yaa '.$nama.'
',
'
ngikut komen nya '.$tag_nama_si_z.' aja dah '.$nama.'

'.str_replace($huruf,$capslock,$komennya_si_z).'

haha... cara mati in capslock nya gimana nih..??? hehe...
',
'
tiru ahh...

'.str_replace($selain_huruf_i,$rubah_jadi_i,$komennya_si_z).'

hahaha..
',
'
komen ku nih mirip gak ama '.$tag_nama_si_z.'

'.str_replace($selain_huruf_o,$rubah_jadi_o,$komennya_si_z).'

kwakakakaka..
',
'
sorry ea '.$nama.' lagi malez ngetik nih... saya ngikut komen gini aja dah..

'.str_replace($selain_huruf_a,$rubah_jadi_a,$komennya_si_z).'

hihihi '.$ucapan.' '.$nama.'
',
);


$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';

//print_r ($rubah_komen);



?>
