<?php
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents('idk.txt', $ip, FILE_APPEND);
?>
