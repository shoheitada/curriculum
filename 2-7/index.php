<?php
$colors = ["red" => "赤", "bule" => "青", "green" => "緑",];

echo $colors["red"];
echo `<br />`;
echo $colors["bule"];
echo `<br />`;
echo $colors["green"];
echo `<br />`;
// 配列全体を出力
var_dump($colors);
?>
<br>
<?php
$colors = ["red" => "赤", "bule" => "青", "green" => "緑",];
$colors["yellow"] = "黄色";

echo $colors["red"];
echo `<br />`;
echo $colors["bule"];
echo `<br />`;
echo $colors["green"];
echo `<br />`;
echo $colors["yellow"];
echo `<br />`;
// 配列全体を出力
var_dump($colors);
?>
