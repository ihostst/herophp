<?php


error_reporting(0) ;

include('curl.php');

include('pilih_token_user.php');

if($kmn == 'kmn_on'){ exit ; }


$kotak = array('̲̅̅A̲̅','̲̅̅B̲̅','̲̅̅C̲̅','̲̅̅D̲̅','̲̅̅E̲̅','̲̅̅F̲̅','̲̅̅G̲̅','̲̅̅H̲̅','̲̅̅I̲̅','̲̅̅J̲̅','̲̅̅K̲̅','̲̅̅L̲̅','̲̅̅M̲̅','̲̅̅N̲̅','̲̅̅O̲̅','̲̅̅P̲̅','̲̅̅Q̲̅','̲̅̅R̲̅','̲̅̅S̲̅','̲̅̅T̲̅','̲̅̅U̲̅','̲̅̅V̲̅','̲̅̅W̲̅','̲̅̅X̲̅','̲̅̅Y̲̅','̲̅̅Z̲̅','̲̅̅a̲̅','̲̅̅b̲̅','̲̅̅c̲̅','̲̅̅d̲̅','̲̅̅e̲̅','̲̅̅f̲̅','̲̅̅g̲̅','̲̅̅h̲̅','̲̅̅i̲̅','̲̅̅j̲̅','̲̅̅k̲̅','̲̅̅l̲̅','̲̅̅m̲̅','̲̅̅n̲̅','̲̅̅o̲̅','̲̅̅p̲̅','̲̅̅q̲̅','̲̅̅r̲̅','̲̅̅s̲̅','̲̅̅t̲̅','̲̅̅u̲̅','̲̅̅v̲̅','̲̅̅w̲̅','̲̅̅x̲̅','̲̅̅y̲̅','̲̅̅z̲̅',);


if( is_dir ('log')) ;
else mkdir ('log') ; 

if(file_exists('log/komen_log')){
$log = file_get_contents('log/komen_log');
}
else
{
$log ='';
}


$me = json_decode(auto('https://graph.fb.me/me?access_token='.$access_token.'&fields=id'),true);
$xx = $me['id']."\r\n";
file_put_contents('log/idSaya', $xx);
$cek_id_saya = file_get_contents('log/idSaya');


$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,type,message,from,comments&access_token='.$access_token.'&offset=0&limit=7'),true);
//print_r ($stat);


for($i=1; $i<=count($stat['data']); $i++){

$id_t = explode('_',$stat['data'][$i-1]['id']);
$id_teman=$id_t[0];

$id_s = explode('_',$stat['data'][$i-1]['id']);
$id_status=$id_s[1];



if(preg_match("/$id_teman/",$cek_id_saya)){
continue ;
}

if( preg_match("/$id_status/", $log)){
continue ;
}

$x = $id_status."\r\n";
$y = fopen('log/komen_log','a');
fwrite($y,$x);
fclose($y);

auto('https://graph.beta.facebook.com/'.$id_status.'/likes?access_token='.$access_token.'&method=post');

print_r ('terkirim<br/>');


}

?>
