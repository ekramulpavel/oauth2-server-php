<?php
$ip = $_SERVER['REMOTE_ADDR'];
// display it back
echo "<h2>Client IP Demo</h2>";
echo "Your IP address : " . $ip;
echo "<br>Your hostname : ". gethostbyaddr($ip) ;
?>