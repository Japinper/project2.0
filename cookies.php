<?php
$value = 'true';
setcookie("Cookie", $value, time()+3600);  /* expira en 1 hora */
echo '<meta http-equiv="refresh" content="0; url=http://3.95.249.25">';
?>
