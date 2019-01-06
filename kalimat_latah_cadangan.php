<?php

$komentari = array(
'
maap yaa,, robot tukang ngecat numpang lewat '.$nama.' mau ngecat status mu dulu nih...

'.str_replace($huruf,$alay,$stat['data'][$i-1]['message']).'

kikuk kikuk kikuk...
',
'
pengen nya sih aku tadi mau bikin status keq gini...

'.str_replace($huruf,$capslock,$stat['data'][$i-1]['message']).'

wadaw wadaw wadaw,, malah udah keduluan ama '.$nama.' yaa sudah lah aku kasih Like + komen buat '.$nama.'
',
);


$kirim_komen = ''.$komentari[rand(0,count($komentari)-1)].'';



?>
