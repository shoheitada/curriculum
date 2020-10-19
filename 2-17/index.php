<?php

$inc = 1;
$add_num = 0;
while($add_num <= 40){
    $num =mt_rand(1,6); 
    $add_num += $num;
    echo $inc;
    echo '回目=';
    echo $num;
    echo '<br>';
    if($add_num >= 40){
        echo '合計';
        echo $inc;
        echo '回でゴールしました';     
    break;
    }
      $inc++;     
}
?>