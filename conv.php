<?php
$a = file_get_contents('index_utf8.html');
//$string = iconv('cp1251', 'utf-8', $a);
$string = iconv('utf-8', 'cp1251', $a);

var_dump(file_put_contents('index.html', $string));
?>
