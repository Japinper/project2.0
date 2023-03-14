<?php
$value = 'true';
setcookie("Cookie", $value, time()+3600);  /* expira en 1 hora */
echo '<meta http-equiv="refresh" content="0; url=http://192.168.204.120">';
?>
