<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$navegador = get_browser(null, true);

echo ($navegador["browser"]);
?>