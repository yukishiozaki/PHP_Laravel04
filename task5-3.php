<?php
/* 複数の配列を結合し一つの配列を作る、同一データがある場合、後ろのデータで上書き*/

$data = array("O" => "orange", "A" => "apple", "P" => "peach");
$add_data = array("S" => "strawberry", "A" => "avocado");
$result = array_merge($data, $add_data);
print_r($result);
