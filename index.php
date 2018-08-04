<?php
/*
*debugging ini dilakukan semasa aplikasi masih dalam tahap development
*sementara ketika sudah live atau production semua error harus dimatikan
*bisa dengan $_ENV nya disetting.
*/
//====BASIC ERROR REPORTING=========
// ini_set('display_errors','on');
// error_reporting(E_ALL);
//
// $i = 0;
// misal kesalahan logika
// die(var_dump($i));
//
// $z = $i +2;
// echo $z;

//====ERROR LOG=====
function customLog($msg){
  $time = '[' . date('Y-m-d H:i:s') . ']';
  $text = $time . ' ' . $msg . "\r\n";
  error_log($text, 3, 'temp/errors.log');
}

$_SESSION['role_user'] = 'user_biasa';

if($_SESSION['role_user'] != 'admin'){
  customLog('ini bukan admin coba masuk');
}
