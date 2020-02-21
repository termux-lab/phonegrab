<?php
$phone = $_GET['phone'];
$ok = "phone: $phone <br>";
$f = fopen("phones.html", "a+");
fwrite($f, $ok);
fclose($f);
?>
