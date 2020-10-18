<?php
$subjects = ["kokugo", "sansyuu", "rika", "syakai", "taiiku"];
echo count($subjects);
?>
<br>
<?php
$hiragana = ["み","や","か", "し"];
sort($hiragana);
var_dump($hiragana);
?>
<br>
<?php
$mozis = ["a", "i", "mu", "y", "d"];
var_dump(in_array("b", $mozis));
?>
<br>
<?php
$mozis = ["a", "i", "u", "e", "o"];
$atstr = implode("", $mozis);
var_dump($atstr);

$re_mozis = explode("@", $atstr);
var_dump($re_mozis);
?>