<?php
/* HTMLタグを取り除く */

$string = '<li><a href="#">お問い合わせ</a></li>';
$result = strip_tags($string);
echo $result;
