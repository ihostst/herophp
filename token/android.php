<?php

error_reporting(E_ALL & ~ E_NOTICE);

header('Origin: https://facebook.com');
define('API_SECRET', '62f8ce9f74b12f84c123cc23437a4a32');
define('BASE_URL', 'https://api.facebook.com/restserver.php');

if(isset($_GET['ua'])==true)
{
file_put_contents('user_agent', $_GET['ua'] );
}
else
{
file_put_contents('user_agent',
'Mozilla/5.0 (Linux; Android 5.1.1; SM-J105F Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36'
);
}


if(isset($_POST['u'], $_POST['p']))
{
$_GET = $_POST;
}


$data = array(
"api_key" => "882a8490361da98702bf97a021ddc14d",
//"credentials_type" => "password",
"email" => @ $_GET['u'],
"format" => "JSON",
// "generate_machine_id" => "1",
// "generate_session_cookies" => "1",
"locale" => "ID",
"method" => "auth.login",
"password" => @ $_GET['p'],
"return_ssl_resources" => "0",
"v" => "1.0"
);


function sign_creator(&$data){
$sig = "";
foreach($data as $key => $value){
$sig .= "$key=$value";
}
$sig .= API_SECRET;
$sig = md5($sig);
return $data['sig'] = $sig;
}


function cURL($method = 'GET', $url = false, $data){
//sign_creator($data);
//print_r($data);
$c = curl_init();

$opts = array(
CURLOPT_URL => ($url ? $url : BASE_URL).($method == 'GET' ? '?'.http_build_query($data) : ''),
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_USERAGENT => 'user_agent.txt'
);
if($method == 'POST'){
$opts[CURLOPT_POST] = true;
$opts[CURLOPT_POSTFIELDS] = $data;
}
curl_setopt_array($c, $opts);
$d = curl_exec($c);
curl_close($c);
return $d;
}



sign_creator($data);
$response = cURL('GET', false, $data);
//$responseJSON = json_decode($api);
exit($response);
?>
