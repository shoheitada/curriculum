<?php
    $x = 5.5;
    echo ceil($x);
?>
<br>
<?php
    $x = 5.5;
    echo floor($x);
?>
<br>
<?php
    $x = 5.5;
    echo round($x);
?>
<br>
<?php
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が3の円の面積の計算
    circleArea(3);
?>
<br>
<?php
    echo mt_rand(50, 200);
?>
<br>
<?php
    $str = "tadashohei";
    echo strlen($str);
?>
<br>
<?php
    $str = "tadashohei";
    echo strpos($str, "i");
?>
<br>
<?php
    $str = "tadashohei";
    echo substr($str, -6, 6);
?>
<br>
<?php
    $str = "tadashohei";
    echo str_replace("tada", "TADA", $str);
?>
<br>
<?php
    $str = "多田翔平";
    echo mb_strlen($str);
?>
<br>
<?php
    $name = "多田";
    $limit_number = "2";

    printf("%sの残りの勉強できる期間はあと%s週間です", $name, $limit_number);
?>
<br>
<?php
    $limit_hour = 3;
    $limit_minute = 3;
    
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;
?>
