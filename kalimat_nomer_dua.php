<?php

$komentari=array(
"
Bentar Lagi Mikirrr,, Loading Please Wait.........................................................................Asem,, aneh aku malah lupa mau komen apa ya tadi..??? yaw dah ngikut komen kayak $tag_nama_si_a aja dah...

$komennya_si_a

Okay dah $ucapan aja...
",
"
maap komen telat $nama dijalan tadi ada razia orang cakep,, ketangkep deh gue,, hehehe...",
"
duh komen ku telat lagi nih,, maap ya $nama $ucapan aja dah...
",
"
hadew... komen pertama nya udah keduluan ama $tag_nama_si_a,, tapi gak papa dah $nama meskipun cuma jadi yang ke- $nom,, yang penting udah hadir bukan begitu preeend..! tapi komen dibawah nya $tag_nama_si_a enak juga loh,, hehehee...
",
"
jiaaaaaaahh... nomer $nom,, nih $nama ya udah ngikut komen nya $tag_nama_si_a aja dah xixixi...

$komennya_si_a

Oke siip dah...
",
"
yang komen nomer satu $tag_nama_si_a,, yang di atas ku $tag_nama_si_a,, duh komen aku nomer $nom,, dung aku... Hadew telat hadir nih $nama maap ea xixixi $ucapan aja deh...
",
"
$tag_nama_si_a, saya like your komen hehehe...
",
"
colek dulu ahh... hehehe,, $tag_nama_si_a, $nama
",
"
duh lupa mau komen apa tadi ea..??? ngikut komen nya $tag_nama_si_a aja deh... hehehe..

$komennya_si_a

hixz hixz...
",
"
jadi malu nih $nama mau komen kalo cuma jadi yang ke $nom hihihi... jiaaahh,, $tag_nama_si_a udah hadir duluan xixixi...
",
"
asyiiik komen pertama kali,, Upzzz.... maap $nama gak jadi... ada $tag_nama_si_a,, hahahaha... aku kira komen ku yang pertama,, ternyata yang ke $nom Haddeewh...
",
"
$ucapan $nama wah $nama gak bilang bilang kalo mau bikin status,, jadi telat deh jempol saya tapi komen dibawah nya $tag_nama_si_a gak papa kalee ea,, xixixi...
",
"
maap gak bisa nomer satu $nama kalah cepet ama $tag_nama_si_a nih... maklum jempul saya lagi kesleo,, wkwkwk...
",
"
jiaaahhhh... mau komen gini padahal aku tadi loh...

$komennya_si_a

tapi sayang udah keduluan ama $tag_nama_si_a, gak jadi komen aja deh kalo gitu hihihi,, eh... $tag_nama_si_a udah hadir duluan ea,, apa kabar..?
",
"
tadi nya sih aku pingin komen kayak gini $nama

$komennya_si_a

asem,, malah udah keduluan $tag_nama_si_a hihihi,, gak jadi komen deh kalo gitu...
",
"
maap $nama saya ngikut komen nya $tag_nama_si_a aja lah,, udah kriting jari saya hehehe...

$komennya_si_a

Oke siip ya ya ya..
",
"
duh,, lagi lagi $tag_nama_si_a yang komen pertama kali... Cuapeek dweeeh,, hehehe like ndizZ aja lah $nama",
'duh padahal tadi aku mau komen gini loh...

'.$komennya_si_a.'

tapi sayang udah keduluan '.$tag_nama_si_a.' kalo gitu ea aku mau komen gini aja deh...

'.str_replace($huruf,$alay,$komennya_si_a).'

gimana '.$nama.' mirip gak..? wkwkwk... '.$ucapan.' aja yaa '.$nama.' 
',
'
ngikut komen nya '.$tag_nama_si_a.' aja dah '.$nama.'

'.str_replace($huruf,$capslock,$komennya_si_a).'

haha... cara mati in capslock nya gimana nih..? hehe...
',
'
tiru ahh...

'.str_replace($selain_huruf_i,$rubah_jadi_i,$komennya_si_a).'

hahaha..
',
'
komen ku nih mirip gak ama '.$tag_nama_si_a.'

'.str_replace($selain_huruf_o,$rubah_jadi_o,$komennya_si_a).'

kwakakakaka..
',
'
sorry ea '.$nama.' lagi malez ngetik nih... saya ngikut komen gini aja dah..

'.str_replace($selain_huruf_a,$rubah_jadi_a,$komennya_si_a).'

hihihi '.$ucapan.' '.$nama.' 
',
);

$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';



?>
