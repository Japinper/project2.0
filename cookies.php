<?php
$value = 'true';
setcookie("Cookie", $value, time()+3600);  /* expira en 1 hora */
echo '<meta http-equiv="refresh" content="0; url=https://www.youtube.com/watch?v=BtLSaxRnIhc">';
?>
