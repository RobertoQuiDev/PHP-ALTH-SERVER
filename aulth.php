<?php

ignore_user_abort(true);
set_time_limit(1800);
$daym = "merci a vous tous";
$acv = "1.67 dc 45 d4 69";
$statusac = "up";
$alpha = 'true';

if (!isset($_SESSION)) {
    session_start();
}
// anti flood
// if($_SESSION['last_session_request'] > time() - 2){
//     header("location: https://google.com");
//     exit;
// }
// $_SESSION['last_session_request'] = time();

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$key = $_GET['key'];

if (!empty($key)){
}else{
die('wsh tes con ?  ses le serveur a Roberto');}
//Alpha lifetime

$rkey = base64_decode($key);


if ($rkey == "054235307becb30e2fb7a3c25b36a2ca67f97290") { if ($ip == "174.118.104.157") { $command = 'Roberto#8622'; $rem = strtotime('2024-08-01 14:00:00') - time() ; ; };; }
if ($rkey == "054235307becb30e2fb7a3c25b36a2ca67f97290") { if ($ip == "191.101.17.99") { $command = 'Roberto#8622'; $rem = strtotime('2024-08-01 14:00:00') - time() ; ; };; }
if ($rkey == "054235307becb30e2fb7a3c25b36a2ca67f97290") { if ($ip == "162.252.134.233") { $command = 'Roberto#8622'; $rem = strtotime('2021-10-21 10:00:00') - time() ; ; };; }
if ($rkey == "0c6ca9c62f4a3e1c32ca71640af569a6a6f2e1f1") { if ($ip == "191.101.17.105") { $command = 'Roberto#8622'; $rem = strtotime('2025-10-21 10:00:00') - time() ; ; };; }
if ($rkey == "e4dd961739868fa03f08dbce20fc58ef8298fb3a") { if ($ip == "191.101.17.110") { $command = 'Roberto#8622'; $rem = strtotime('2025-10-21 10:00:00') - time() ; ; };; }
if ($rkey == "054235307becb30e2fb7a3c25b36a2ca67f97290") { if ($ip == "127.0.0.1") { $command = "Roberto#8622"; $rem = strtotime('2024-10-21 10:00:00') - time() ; ; };; }
if ($rkey == "c44db31618865e74ecb158f9c961c7964a949504") { if ($ip == "191.101.17.100") { $command = "Roberto#8622"; $rem = strtotime('2024-10-21 10:00:00') - time() ; ; };; }
if ($rkey == "0de82b88bf7ea96455cf86f43b629e57ee417f16") { if ($ip == "51.68.10.88") { $command = "Roberto#8622"; $rem = strtotime('2024-10-21 10:00:00') - time() ; ; };; }

if($rem)
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);;

if (!empty($command)){
}else{die($ip); }

if (!empty($rem)){
}else{
die('wsh tes con ?  il a pas de temp');}

$arr = array('aulth' => $command, 
            'daym' => $daym,
            'ip' => $ip,
            'eday' =>  $day,
            'eheur' => $hr,
            'emin' => $min,
            'esec' => $sec,
            'acversion' => $acv, 
            'status' => $statusac, 
            'isalpha' => $alpha); 

echo json_encode($arr)."\n";





