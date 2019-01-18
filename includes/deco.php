<?php

$temps= 365*24*3600;
$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
setcookie('nom', "ok", time(), '/', $domain, false);
header("Location:..\index.php");


?>