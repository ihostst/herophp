<?php

//Cek CPU Load
$load = sys_getloadavg();
$cpu_load = $load['0'];
print_r($cpu_load);

$limit = '25';
if($load['0'] >=$limit)
{
header('HTTP/1.1 503 Too busy, try again later');
die('<center><h2><br/>mohon maaf server over load, mohon tunggu, silahkan ulangi beberapa saat lagi !<br/><hr/></h2></center>');
}

?>
