<?php
$a = file_get_contents('index.html');
$string = iconv('cp1251', 'utf-8', $a);
var_dump(file_exists('index_utf8.html'), is_writable('index_utf8.html'));
var_dump(file_put_contents('index_utf8.html', $string));
?>
