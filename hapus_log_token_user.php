<?php

error_reporting(0);


$file1 = 'log/log_token_user.txt';
if(unlink($file1));

$file2 = 'log/log_pengaturan_bot.txt';
if(unlink($file2));


$file3 = 'log/error_log';
if(unlink($file3));


?>
