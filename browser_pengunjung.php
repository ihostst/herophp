<?php

if(is_dir('log'));
else mkdir ('log');

$perangkat=$_SERVER['HTTP_USER_AGENT'];
file_put_contents('log/browser_pengunjung.txt', $perangkat."\r\n", FILE_APPEND);

print_r('<hr>Browser Anda : '.$perangkat.'<hr>');

?>
