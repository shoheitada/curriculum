<?php
  $time = intval(date('H'));

  if (4 <= $time && $time <= 12) { 
    echo '今';
    echo $time;
    echo '時台です';
    echo '<br>';
    echo 'おはようございます';

  }elseif (12 <= $time && $time <= 20) { 
    echo '今';
    echo $time;
    echo '時台です';
    echo '<br>';
    echo 'こんにちは';

  } else { 
    echo '今';
    echo $time;
    echo '時台です';
    echo '<br>';
    echo 'こんばんは';

  }

?>
