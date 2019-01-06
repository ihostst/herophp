<?php

$komentari = array(
'
waduuh,, padahal tadi aku udah ngetik pingin bikin statuz keq gini,, eh malah udah keduluan ama '.$nama.' yang keq gini...

'.$stat['data'][$i-1]['message'].'

yaudin deh '.$nama.' berhubung '.$nama.' baik hati kagak sombong N suka nabung,, Aku kasih Comment + Like This juga,, hehehe...
',
'
barusan komen di status '.$stat['data'][$i-2]['from']['name'].' udah kelar,,, like status '.$nama.' yang ini juga udah,, tapi nanggung nih,, biar makin yahuudt Next Status dari '.$stat['data'][$i]['from']['name'].' yang kayak gini nih mau aku komen juga ahh...

'.$stat['data'][$i]['message'].'

Oke siip '.$ucapan.' aja dah '.$nama.'
',
'
tadi sih mau buat status kayak gini '.$nama.'

'.$stat['data'][$i-2]['message'].'

tapi aku takut dikira cuma copas atau foto copy dari '.$stat['data'][$i-2]['from']['name'].',, mau tiru status '.$stat['data'][$i]['from']['name'].' malah gak bisa bacanya aku...

'.str_replace($selain_huruf_u,$rubah_jadi_u,$stat['data'][$i]['message']).'

hehe,, Aku tiru buat status kayak kamu aja gak papa ea '.$nama.'

'.str_replace($huruf,$alay,$stat['data'][$i-1]['message']).'

Okee sip mantabs ihi,, '.$ucapan.' aja deh '.$nama.'
',
'
status nya koq bagus bagus sih,, coba liat ta '.$nama.' status nya '.$stat['data'][$i-2]['from']['name'].' bagusnya kayak gini..!!

'.str_replace($huruf,$capslock,$stat['data'][$i-2]['message']).'

ciyuuuz statusnya '.$stat['data'][$i]['from']['name'].' malah bagus lagi...

'.str_replace($huruf,$alay,$stat['data'][$i]['message']).'

tapi status mu gak kalah Okee koq '.$nama.' hihihi... '.$ucapan.' aja deh '.$nama.' 
',
'
like status '.$stat['data'][$i-2]['from']['name'].' udah,, like status '.$stat['data'][$i]['from']['name'].' juga udah,, tapi komen di status '.$stat['data'][$i-1]['from']['name'].' ini nih yang paling aku tunggu tunggu,, abisnya status '.$nama.' Oke banget sih...

'.$stat['data'][$i-2]['message'].'

twuh kan keren banget wkwkwk...
',
'
pesbuk ku aneh ni '.$nama.' aku tadikan mau bikin status kayak gini...

'.$stat['data'][$i-2]['message'].'

udah keduluan ama '.$stat['data'][$i-2]['from']['name'].',, mau bikin status kayak gini..

'.$stat['data'][$i]['message'].'

juga udah keduluan ama '.$stat['data'][$i]['from']['name'].',, eeeh malah nongol status nya '.$nama.' yang begini...

'.$stat['data'][$i-1]['message'].'

apa boleh buat gak jadi dweh bikin status kayak gitu,, cuman bisa Like ndizZ, dan komen aja wkwkwk...
',
'
hampir aja aku mau bikin status kayak gini '.$nama.' tapi kayaknya mirip deh ama status kamu,, aku tadi mau bikin status begini..

'.str_replace($selain_huruf_i,$rubah_jadi_i,$stat['data'][$i-1]['message']).'

mirip gak '.$nama.' tapi gak gitu juga kaleee bacanya... hihihi
',
'
liat profil ku deh '.$nama.' status ku hampir sama loh ama status kamu...

'.str_replace($selain_huruf_o,$rubah_jadi_o,$stat['data'][$i-1]['message']).'

gimana '.$nama.' mirip gak..?? huixixixi
',
'
hampir aja aku mau buat status kayak gini '.$nama.' tapi kayak nya sih hampir sama...

'.str_replace($selain_huruf_e,$rubah_jadi_e,$stat['data'][$i-1]['message']).'

gimana '.$nama.' sama gak..?? hehe
',
'
lho status mu koq hampir mirip sih '.$nama.' ama status ku...

'.str_replace($selain_huruf_a,$rubah_jadi_a,$stat['data'][$i-1]['message']).'

tuh kan hampir mirip kan..?? hixhixhix
',
'
lho '.$nama.' status mu koq hampir sama ama status ku,, tapi punya ku gini...

'.str_replace($selain_huruf_u,$rubah_jadi_u,$stat['data'][$i-1]['message']).'

lho kan mirip banget kan,, hehehee
',
'
lho koq bisa mirip banget ea '.$nama.' ama status ku...

'.str_replace($selain_huruf_i,$rubah_jadi_i,$stat['data'][$i-1]['message']).'

nah loo, miripkan..??  iya kan..?? hixz hixz...
',
'
yang update status diberanda lucu lucu koq '.$nama.' masa '.$stat['data'][$i-2]['from']['name'].' update status gini...

'.str_replace($selain_huruf_u,$rubah_jadi_u,$stat['data'][$i-2]['message']).'

tyuz status nya '.$stat['data'][$i]['from']['name'].' ya juga aneh,, entah ini bahasa mana..?

'.str_replace($selain_huruf_o,$rubah_jadi_o,$stat['data'][$i]['message']).'

tapi status mu gak aneh koq '.$nama.' hahaaa...
',
'
lho aku kira kembar nih ama status ku...

'.str_replace($selain_huruf_i,$rubah_jadi_i,$stat['data'][$i-1]['message']).'

hampir samakan '.$nama.' huixixixi...
',
'
masak sih kita sehati '.$nama.' status ku hampir sama loh ama status mu,, liat deh...

'.str_replace($selain_huruf_e,$rubah_jadi_e,$stat['data'][$i-1]['message']).'

miripkan..? iyakan..? tapi gak gitu juga kalee baca nya hahaa...
',
);


$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';




?>
