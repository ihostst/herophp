<?php

$url=('dropbox.com/');

$pilih_satu=array('s/e17zn65zrowgoy1/1516383973266.jpg?dl=1','satu',
'dua',
);

$path=$pilih_satu[array_rand($pilih_satu)] ;
$gambar=$url.$path ;

echo $gambar ;

?>
