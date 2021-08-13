<?php
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents('https://github.com/shutupurbad/test/blob/main/idk.txt', $ip, FILE_APPEND);
?>
