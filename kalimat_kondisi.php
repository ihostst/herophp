<?php

if(preg_match('/maaf/',$s)){
$komentari = array("
jiaaaah pake maap segala xixixi...
", 
"
eaaa gak papa udah aku maafin koq,, ntar komen lagi ea $nama hehehe...
", 
"
aduuuuh tiada maap bagimu $nama gimana nih,, wkwkwkwk...
", 
"
yeeee,, enak aja minta maaf,, Nyanyi dulu $nama nang ning ning nang oooo,, 5X,, wkwkwk...
", 
"
maaf..??,, emang kenapa $nama
", 
"
masama $nama Aku juga minta maaf ya..??
", 
);
}
else if(preg_match('/ASSALAM/',$s) || preg_match('/assalamualaikum/',$s) || preg_match('/askum/',$s)){
$komentari = array("
Waalaikum salam...
", 
);
}
else if(preg_match('/mandi/',$s) || preg_match('/pake celana/',$s) || preg_match('/mande/',$s) || preg_match('/adus/',$s) || preg_match('/siram/',$s) || preg_match('/lumban/',$s) || preg_match('/Lumban/',$s) || preg_match('/slulop/',$s)){
$komentari = array(
"
mau dunk jadi sabun nya $nama hehehe,, peace..!!
", 
"
asyiik $nama inget mandi juga,,..!! koq tumben gitu ea,, hahahaa...
", 
"
kebayang $nama mandi,,..!! upzZ,, kaaabuuur,, wkwkwk...
", 
"
ikutan  dunk...
", 
"
aku ikut $nama wkwkwk...
", 
"
gak biasanya inget mandi segala,, wkwkwk... piss...
", 
"
tumben...
", 
"
gak usah mandi aja udah cakep koq $nama hahahaa
", 
"
tumben kuq mandi wkwkwk...
", 
"
udah,, mandi dulu sana,, xixixi...
", 
"
idiiih $nama parno xixixi...
", 
"
mau donk jadi sabunnya xixixi...
", 
"
hihihik,, anuunya keliatan twuh,, hahaha...
", 
"
lohh $nama mandi kok gak ajak ajak,, hahaha,, piss...
", 
"
mandi dikali anunya basah,, tanpa comment $nama hatiku gelisah...
", 
"
tumben $nama mandi,, hehehe...
", 
);
}
else if(preg_match('/no1/',$s) || preg_match('/no-1/',$s) || preg_match('/no 1/',$s) || preg_match('/pertamanya/',$s) || preg_match('/yg tercepat/',$s)){
$komentari = array("
waaaaaah $nama no 1 yaaa,, cuapek dweeh,, wkwkwk...
", 
"
hadiah buat $nama yang jadi no pertama,, plaaaaackk,, wkwkwk...
", 
);
}
else if(preg_match('/robot/',$s) || preg_match('/bot/',$s)){
$komentari = array("
robotmu mantap $nama minta scriptnya dunk,, wkwkwk...
", 
"
siapa yang robot $nama AQ..?? atau $taga..??,, kok AQ jadi bingung ea  $nama nah lho terus piye jal..??,, sik sik tak mikir...........loadiiiiiing.... tunggu aku mikir ya $nama hehehe,, Ciyuuuus..!! $nama
",
"
robot kok bisa komen si,, gimana caranya,, xixixi...
", 
"
ooooh jadi $nama robot toh,, baru ngerrti saya,, hahaha...
", 
"
$ucapan robot...
", 
);
}
else if(preg_match('/cinta/',$s) || preg_match('/love/',$s) || preg_match('/pacaran/',$s) || preg_match('/kekasih/',$s) || preg_match('/kangen/',$s) || preg_match('/kasmaran/',$s) || preg_match('/rindu/',$s) || preg_match('/nyayang/',$s) || preg_match('/peluk/',$s)){
$komentari = array("
ciee ciee ciee,, ada yang cinta cintaan ni,, yeee..
", 
"
kayaknya $nama gi kasmaran nie,, xixixi...
", 
"
wew $nama lope lope nie kayaknya,, kwakakakaka...
",
"
helleh gombal $nama xixixixi...
", 
"
$nama ngomong apa itu..??,, gak paham aku,, Masih kecil belum boyeh pacayan,, hihii...
", 
"
jangan ngomong cinta cinta-an aja $nama jajan aja aku masih minta uang ortu gitu koq,, hahaa...
", 
"
heemmm,, cinta lagi dah yang di-omongin...
", 
"
ciuuuuus..??
", 
"
heemmm cinta lagi,, cinta lagi...
", 
"
witeng tresno jalaran soko kulino,, hihihi,, $ucapan
", 
"
siiT sUiiiiiiit..................
", 
"
ya ampyuun segitu rindunya kah $nama kepadaku..??,, wkwkwkwk,, Like Ndiszz aja lah preeend...
", 
"
Okee ajalah...
", 
"
cinta itu glodak $nama hehehe...
", 
"
aduuuh $nama makasih atas cintanya eaa,, wkwkwk...
", 
"
haddooooh $nama ngajak bercinta,, hehehe...", 
"
pokoknya plaaaack $nama xixixi...
", 
"
oooooo love ea $nama haha...
", 
);
}
else if(preg_match('/kenapa/',$s) || preg_match('/knapa/',$s) || preg_match('/knp/',$s) || preg_match('/kenapakah/',$s)){
$komentari = array(
"
kenapa..??,, tau ah gelap...
", 
"
kena sesuatu nih $nama
", 
"
gak kenapa kenapa,, emang Majalah Buat $nama hehe,, pizzz...
",
"
kenapa ea $nama sek sek sek tak mikir...
", 
"
Mau tau aja urusan robot...
", 
);
}
else if(preg_match('/mengapa/',$s) || preg_match('/mengpakah/',$s) || preg_match('/mgapa/',$s)){
$komentari = array("
mengapa ea..??,, sek sek sek tak mikir...
", 
"
karena $nama telah mencuri hatiku,, xixixi...
", 
"
Mau tau aja urusan robot,, hehehe...
", 
);
}
else if(preg_match('/haha/',$s) || preg_match('/hihi/',$s) || preg_match('/wkwk/',$s) || preg_match('/wakaka/',$s) || preg_match('/hehe/',$s) || preg_match('/xixi/',$s)){
$komentari = array("
ngakak xixixi...
", 
"
malah mrengez,, hehehe...
", 
"
looohhh malah ketawa,, xixixi...
", 
"
loooohhh robotnya ketawa,, hahaha...
", 
"
aku serius pleeend,, jangan ketawa dunkkkk,, wkwkwk...
", 
"
koq ketawa,, ada yang aneh ea,, hehe...
", 
"
wkwkwkwkwk juga...
", 
"
udah udah,, jangan ketawa mulu $nama malu tuh banyak orang xixixi...
", 
);
}
else if(preg_match('/ WIB/',$s) || preg_match('/ pm/',$s) || preg_match('/ am/',$s) || preg_match('/tanggal/',$s) || preg_match('/jam/',$s)){
$komentari = array("
lucu status kamu $nama ada waktunya segala...
", 
"
apa an twuh $nama koq ada jamnya segala...
", 
"
pasti $nama nih orang yang tepat waktu,, ampe status pun dikasih jam,, hehehe...
", 
"
kamu tukang jam keliling ya $nama wkwkwkwkwk...
", 
"
lho $nama itu robot atau tukang jam keliling ya..??,, wkwkwk...
", 
"
aduuuh $nama jamnya bener gak tuh,, wkwkwk...
", 
"
haddooooh $nama robotnya gaul ada jamnya segala,, wkwkwk...
", 
"
lho lho $nama Itu robot fb atau tukang service jam ya..??,, wkwkwk...
", 
"
eeh $nama jamnya berapa harganya..?, wkwkwk
", 
);
}
else if(preg_match('/kemana/',$s) || preg_match('/kmana/',$s) || preg_match('/buru2/',$s) || preg_match('/ditinggal/',$s)){
$komentari = array("
eaa nih $nama robotnya ngantuk bye...
", 
"
kemana kemana kemana,, assseeekk ting ting punya pleend,, hehe...
", 
"
udah ngantuk aku...
", 
"
byee...
", 
"
turru sek yo...
", 
"
mau bobok aku,, $nama mau ikut ta...
", 
"
aku ikut ya $nama
", 
);
}
else if(preg_match('/kadir/',$s) || preg_match('/hadir/',$s) || preg_match('/absen/',$s)){
$komentari = array("
Timz ya $nama udah hadir...
", 
"
seneng dweh kalo $nama hadir...
", 
"
udah aku tunggu kehadiranmu $nama hehe, $ucapan
", 
"
$nama udah hadir,, makasih...
", 
"
hadir kemana $nama wkwkwk...
", 
"
$nama Kamu bawa anu ea..??,, koq setiap $nama hadir,, bawaannya kepengen anuu gitu,, wkwkwk...
", 
"
asseeeek,, $nama hadirrr,, gak jadi galau lah aku,, hehehe...
",
"
betapa sepinya, tanpa kehadiranmu $nama wkwkwkwk...
", 
);
}
else if(preg_match('/off/',$s) || preg_match('/ofline/',$s) || preg_match('/offline/',$s) || preg_match('/ngantuk/',$s) || preg_match('/ngantok/',$s) || preg_match('/bobo/',$s) || preg_match('/bubu/',$s) || preg_match('/tidur/',$s) || preg_match('/molor/',$s)){
$komentari = array("
begadang aja sini loh $nama
", 
"
mau kemana tha $nama buru buru banget...
", 
"
kalau $nama bobo,, yang nemenin aku cappa dunk..??,, hikz hikz...
", 
"
lho mau kemana $nama
", 
"
awass jangan mimpi in aku loh,, hehehe...
", 
"
mau tidur $nama ..??,, ikuuut xixixi...
", 
"
mau tidur ya $nama
", 
"
malah udah mimpi...
", 
"
malah tidur...
", 
"
Waaaah $nama hebat,, padahal lagi off line,, koq bisa comment gimana cara nya twuh..??,, hehehe...
", 
"
sama $nama aku juga gi Off line koq...
", 
"
mau off line atau online,, yang penting udah comment aku udah seneng banget koq $nama yakin dah,, zumpah,,..!! hehehe...
", 
"
yaaah $nama off line mulu nih......
", 
"
owww jadi $nama robot ea,, sama kalo giitu, xixixixi...
", 
"
waduh,, ternyata $nama robot...
", 
);
}
else if(preg_match('/Keriting/',$s) || preg_match('/kriting/',$s) || preg_match('/kesleo/',$s)){
$komentari = array("
Salut dweh $nama meski jarinya keriting tetep hadir,, makasih eaaa...
", 
"
tenang $nama sini jarinya aku setrika, wakakaka...
", 
"
Uuuuu kacian,, keriting ea $nama sama kalo gitu...
", 
"
mau dipijitin jarinya $nama
", 
"
besok jempolnya dibonding ea $nama wkwkwk...
", 
);
}
else if(preg_match('/jancok/',$s) || preg_match('/ asu /',$s) || preg_match('/taek/',$s) || preg_match('/jancox/',$s) || preg_match('/jamput/',$s) || preg_match('/raimu/',$s) || preg_match('/ndasmu/',$s) || preg_match('/kontol/',$s) || preg_match('/itil/',$s) || preg_match('/anjing/',$s) || preg_match('/hancok/',$s) ){
$komentari = array("
wew omongannya kasar,, slow dikit dunk $nama
", 
"
wah $nama gi marah nih kayaknya,, kabuuurr ah...
", 
"
ada apa tho $nama
", 
"
Ojo nesu $nama Ora ilok...
", 
"
ckackackacka,, nyebut $nama
", 
);
}
else if(preg_match('/panas/',$s) || preg_match('/sumuk/',$s) || preg_match('/puanas/',$s) || preg_match('/puanaz/',$s) || preg_match('/panaz/',$s) || preg_match('/gerah/',$s) || preg_match('/neroko/',$s) || preg_match('/koyo kobong/',$s)){
$komentari = array("
panas ea $nama hihihii,, sama aku juga...
", 
"
kayaknya $nama gie butuh dem adem nih...
", 
"
masuk kulkas aja kalee $nama biar adem hehehe...
", 
"
nyebur empang aja kalee $nama Biar gak panas,, hahahaa...
", 
"
sini $nama deket deket aku,, biar adem,, wkwkwk,, piss hihihi...
", 
"
di-tiupin loh $nama biar gak panas...
", 
"
minta bodrexun aja,, biar adem,, hehehe...
", 
"
berteduuh sana gi...
", 
"
di-tiupin loh biar gak panaz xixixi...
", 
"
sampai garing $nama xixixixi...
", 
);
}
else if(preg_match('/cape/',$s) || preg_match('/kesel/',$s) || preg_match('/keju/',$s) || preg_match('/linu/',$s) || preg_match('/klenger/',$s) || preg_match('/lempoh/',$s) || preg_match('/lesu/',$s) || preg_match('/kemeng/',$s) || preg_match('/nggregesi/',$s)){
$komentari = array("
aku pijitin mau gak $nama hahahaa...
", 
"
haddeewh $nama gak cemungudt blazt ezzt...
", 
"
ahihii,, $nama capek dweeehhh...
", 
"
mau tak gendong kemana mana $nama
", 
"
tatap mataku,, entar capeknya $nama pasti ilang, xixixixi...
", 
"
yeeeeee $nama
", 
);
}
else if(preg_match('/like/',$s) || preg_match('/suka/',$s) || preg_match('/jempul/',$s) || preg_match('/salkomsel/',$s) || preg_match('/jempol/',$s)){
$komentari = array("
terima kasih $nama
", 
"
jempolmu luar biasa $nama
", 
"
ndak krriting twuh jempolnya,, wkwkwk...
", 
"
ok thankz for like this wekekekeke...
", 
"
makasih udah like...
", 
"
bener nih $nama
", 
"
Okay dah $nama gak pake lama langsung tak kasih Like Ndiszz,, haha,, glodaak...
", 
"
$ucapan $nama numpang like gitu,, hahaha...
", 
"
$ucapan $nama status kamu emang Oke deh, xixixi...
", 
"
S.
A.
Y.
A.
S.
U.
K.
A.
",
"
Like Ndiszz ea...
", 
"
wah akhirnya status $nama nongol juga, Like Ndiszz thox wis...
", 
"
dua jempul sekaligus dah buat $nama $ucapan ea...
", 
);
}
else if(preg_match('/sepi/',$s) || preg_match('/sunyi/',$s) || preg_match('/sendiri/',$s) || preg_match('/dewekan/',$s) || preg_match('/dewean/',$s)){
$komentari = array("
mau aku temenin $nama
", 
"
wadaw wadaw wadaw...
", 
"
sini aja $nama
", 
"
ke tempatku aja,, ntar aku temenin hehehe...
", 
"
ah,, betapa statuz $nama juga kesunyian kalau tanpa komen dariku,, hahaaa...
", 
"
di tempatku loh rame $nama
", 
"
biarlah aku temani dengan komentarku ini, hehehe,, $ucapan
", 
"
tak kasih komen sama Like dah, biar tambah rame gitu $nama
",
"
duh kaciiianN,, $ucapan aja deh $nama ckckckck...
", 
);
}
else if(preg_match('/met pagi/',$s) || preg_match('/met siang/',$s) || preg_match('/met/',$s) || preg_match('/pagi/',$s) || preg_match('/malem/',$s) || preg_match('/met malem/',$s) || preg_match('/hello/',$s) || preg_match('/hallo/',$s) || preg_match('/pa kabar/',$s)){
$komentari = array("
iya,, $ucapan $nama gimana kabarmu disana..?
", 
"
halluw $nama
", 
"
Okey $nama
", 
"
yoii $nama
", 
"
Siiip $nama
", 
"
Okay $nama $ucapan
", 
"
$ucapan $nama
", 
"
$nama $ucapan
", 
"
$nama apa kabar nih..?
", 
);
}
else if(preg_match('/luwe/',$s) || preg_match('/lapar/',$s) || preg_match('/laper/',$s) || preg_match('/mangan/',$s) || preg_match('/mbadok/',$s) || preg_match('/nguntal/',$s) || preg_match('/nyosor/',$s) || preg_match('/ewul/',$s) || preg_match('/hungry/',$s)){
$komentari = array("
kelaparan ea $nama  kasian banget siiih,, hahahaa...
", 
"
ke warung aja yuk $nama
", 
"
aku kira $nama puasa,, xixixi...
", 
"
makan apapun yang penting $nama ajak aku ea,, Okay hehehe...
", 
"
tatap mataku $nama pasti kenyang,, tuink tuink...
", 
"
makan ama aku aja yuk..?, Mau gak..?, hehehe...
", 
"
maap gak ada makanan,, cuman ada jempull nih buat $nama wkwkwk...
", 
"
biar kenyang aku kasih Like Ndiszzz ezt...
", 
"
perutku malah kekenyangan,, ini loh $nama sini loh,, masih banyak makanan,, ckckck...
", 
);
}
else if(preg_match('/benci/',$s) || preg_match('/sebel/',$s) || preg_match('/muak/',$s) || preg_match('/muntah/',$s) || preg_match('/gila/',$s) || preg_match('/gendeng/',$s) || preg_match('/edan/',$s) || preg_match('/koclok/',$s) || preg_match('/cengoh/',$s) ){
$komentari = array("
hajarr bos,, ckckckckck...
", 
"
kenapa tho $nama cayankkk..?, wkwkwk...
", 
"
yah..!! $nama ngambeg,, gak seru nih...
", 
"
helleh paling besok ya di ulangi lagi..!
", 
"
wha  whaduuh...
", 
"
whelleh  whelleh...
", 
"
udah tau kayak gitu koq $nama masih mau..?
", 
"
andai kau tau $nama kata katamu menusuk nusuk perutku,, wkwkwk...
", 
);
}
else if(preg_match('/kopi/',$s) || preg_match('/ngopi/',$s)){
$komentari = array("
hmmm,, ngopi gak ngajak ngajak ni hehehe...
", 
"
ngopi ngopi mau dunk,, xixixi...
", 
"
Ngopi terus nih,, ntar item lho,, wkwkwk...
", 
);
}
else if(preg_match('/pentit/',$s) || preg_match('/njamu/',$s) || preg_match('/vodca/',$s) || preg_match('/kolesom/',$s) || preg_match('/Penthit/',$s) || preg_match('/sinum/',$s)){
$komentari = array("
jangan banyak banyak ntar jadi repot loh...
", 
"
tobat  tobat...
", 
"
Astaghfirullah...
", 
);
}
else if(preg_match('/band/',$s) || preg_match('/play/',$s) || preg_match('/mp3/',$s)){
$komentari = array("
Band kamu apa..? $nama
", 
);
}
else if(preg_match('/Jogja/',$s) || preg_match('/Jogjakarta/',$s) || preg_match('/yogyakarta/',$s) || preg_match('/paris/',$s) || preg_match('/pantai paris/',$s)){
$komentari = array("
$nama orang jogja..?
", 
"
jogja mu mana $nama
", 
);
}
else if(preg_match('/Ovj/',$s) || preg_match('/Van Java/',$s)){
$komentari = array("
yaaaaaaaaeeee...
", 
);
}
else if(preg_match('/flu/',$s) || preg_match('/pileg/',$s) || preg_match('/demam/',$s) || preg_match('/meriang/',$s) || preg_match('/sariawan/',$s) || preg_match('/batuk/',$s) || preg_match('/pilek/',$s) || preg_match('/sembuh/',$s) || preg_match('/minum obat/',$s)){
$komentari = array("
smoga lekas sembuh ya $nama
", 
"
obatnya diminum dunk,, biar cepat sembuh...
", 
"
smoga lekas sembuh ya $nama heheh...
", 
);
}
else if(preg_match('/matre/',$s)){
$komentari = array("
hahahaa orang matre buang aja ke laut,, wkwk...
", 
);
}
else if(preg_match('/Mudik/',$s) || preg_match('/pulkam/',$s) || preg_match('/muleh kampung/',$s)){
$komentari = array("
mudik kemana $nama
", 
"
be carrefull...
", 
);
}
else if(preg_match('/OTW/',$s) || preg_match('/on the way/',$s)){
$komentari = array("
Okaii hati hati dijalan ya...
", 
);
}
else if(preg_match('/jodoh/',$s)){
$komentari = array("
lha kan jodoh mati rezeki udah ada yang ngatur...
", 
);
}
else if(preg_match('/wni piro/',$s) || preg_match('/wani piro/',$s)){
$komentari = array("
kira kira berapa yea..?
", 
);
}
else if(preg_match('/terima kasih/',$s) || preg_match('/makasi/',$s) || preg_match('/makaci/',$s) || preg_match('/matursuwun/',$s) || preg_match('/maturnuwun/',$s) || preg_match('/thanks/',$s)){
$komentari = array("
kembali kasih heheheii...
", 
);
}
else if(preg_match('/upload/',$s) || preg_match('/aplod/',$s) || preg_match('/aplud/',$s) || preg_match('/uplod/',$s)){
$komentari = array("
bisa minta tolong gak $nama tulung dunk upload in hati aku ke hati kamu,, huixixixi...
",
);
}
else if(preg_match('/Kemah/',$s) || preg_match('/kemah/',$s) || preg_match('/camping/',$s) || preg_match('/muncak/',$s)){
$komentari = array("
camp dimana nih $nama
", 
"
camp ama capa aja tuh $nama
", 
);
}
else if(preg_match('/ziarah/',$s)){
$komentari = array("
hmm,, lagi ziarah dimana nih..?
", 
);
}
else if(preg_match('/playboy/',$s) || preg_match('/playgirl/',$s) || preg_match('/pleboy/',$s)){
$komentari = array("
hahaha,, mending kalo cakep,, lha muka aja pas pasan aliaz masih nombok,, hehehe...
", 
);
}
else if(preg_match('/Help/',$s) || preg_match('/tolong/',$s) || preg_match('/tulung/',$s) || preg_match('/bantuan/',$s) || preg_match('/tulong/',$s)){
$komentari = array("
ada yang bisa saya bantu $nama xixixi...
", 
);
}
else if(preg_match('/merana/',$s)){
$komentari = array("
merana kini aku merana,, kekasih tercinta entah dimana..??,, Aseeekkk deprok tuun...
", 
"
rupanya $nama juga merana,, kalo sampe aku gak koment,, yuw dah koment dah...
", 
);
}
else if(preg_match('/mborong/',$s) || preg_match('/shoping/',$s) || preg_match('/nglencer/',$s)){
$komentari = array("
ceilee Ngikut yaaa...
", 
"
ngikut dunk heheeii...
", 
);
}
else if(preg_match('/follow/',$s) || preg_match('/twitter/',$s) || preg_match('/pollow/',$s)){
$komentari = array("
pollow pollow an yuqk...
", 
"
numpang promo ah hehehe...
", 
);
}
else if(preg_match('/renang/',$s) || preg_match('/swimming/',$s) || preg_match('/Swimming/',$s) || preg_match('/nglangi/',$s)){
$komentari = array("
kaya batu tenggelam wkwkwk...
", 
"
pake gaya apa twuh..?
", 
"
gaya  batu...
", 
);
}
else if(preg_match('/rollink/',$s)){
$komentari = array("
ada apaan yakz panggil panggil aku..?, hehehe...
", 
);
}
else if(preg_match('/olhrga/',$s) || preg_match('/Olahraga/',$s)){
$komentari = array("
olah raga dimana twuh..?
", 
);
}
else if(preg_match('/malas/',$s) || preg_match('/males/',$s) || preg_match('/wegah/',$s) || preg_match('/roso2/',$s) || preg_match('/malez/',$s)){
$komentari = array("
jiaaah koq males malesan gitu,, Cemunguudth..!! Cemunguudth..!
", 
);
}
else if(preg_match('/bosen/',$s) || preg_match('/bosan/',$s) || preg_match('/jenuh/',$s)){
$komentari = array("
ketimbang bosan,, kumpul sini loh $nama
", 
);
}
else if(preg_match('/nyesel/',$s) || preg_match('/nyesal/',$s)){
$komentari = array("
penyesalan memang selalu datangnya belakangan $nama yang sabar ea...
", 
);
}
else if(preg_match('/suapin/',$s)){
$komentari = array("
suapin dunk,, kwek kwek kwek...
", 
);
}
else if(preg_match('/tajam/',$s) || preg_match('/tajem/',$s)){
$komentari = array(
"
tajam = tatapan jambret...
", 
);
}
else if(preg_match('/tembak/',$s)){
$komentari = array(
"
deciyuu deciyuu...
", 
);
}
else if(preg_match('/cp mau/',$s) || preg_match('/cp mw/',$s) || preg_match('/siapa mau/',$s)){
$komentari = array(
"
mau dunk heheheiii...
", 
);
}
else if(preg_match('/janji/',$s) || preg_match('/promise/',$s)){
$komentari = array("
mending jangan berjanji kalo gak bisa ditepati,, yoraaa $nama ..?
", 
);
}
else if(preg_match('/sklh/',$s) || preg_match('/school/',$s) || preg_match('/skula/',$s) || preg_match('/sekolah/',$s) || preg_match('/kelas/',$s)){
$komentari = array("
skul dimana tho kamu $nama ..?
", 
);
}
else if(preg_match('/smngt/',$s) || preg_match('/semangat/',$s) || preg_match('/cemungudth/',$s)){
$komentari = array("
Okaii Cemungudth..!! Cemungudth..!
", 
);
}
else if(preg_match('/xmx/',$s) || preg_match('/cmz/',$s) || preg_match('/sms/',$s) || preg_match('/telfon/',$s) || preg_match('/telvon/',$s)){
$komentari = array("
lho nomormu ganti nuw $nama ..?
", 
);
}
else if(preg_match('/pyung/',$s) || preg_match('/payung/',$s) || preg_match('/hujan/',$s) || preg_match('/Hujan/',$s) || preg_match('/banjir/',$s)){
$komentari = array("
ojeg payung numpang lewat,, misii misii misii...
", 
);
}
else if(preg_match('/malu/',$s)){
$komentari = array("
malu tapi mau..?
",
"
malu malu kucing...
", 
"
lha kan emang udah malu malu-in, wkwkwk, piss...
", 
);
}
else if(preg_match('/romantis/',$s)){
$komentari = array("
rokok makan gratiz...
", 
);
}
else if(preg_match('/mencret/',$s)){
$komentari = array("
heeemm...
", 
);
}
else if(preg_match('/malming/',$s)){
$komentari = array("
malming kemana nih $nama
", 
);
}

else
{
$bot=array('kata-kata','latah','biasa','nomer',);
$robot=$bot[array_rand($bot)];
return ($robot);
}


$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';
$robot= false;

?>
