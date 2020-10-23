<?php require_once("getData.php");
        $get_data = new getData();
        $user_data = $get_data->getUserData();
        $posts_data = $get_data->getPostData();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper"> <!-- 共通の処理 -->
        <header class="header clearfix"> 
           <div class="left">
              <img src="1599315827_logo.png" class="photo" alt="ロゴの写真"　 title="ロゴ">
           </div> 
            <div class="right-upper">
               <p>ようこそ<?php echo $user_data['last_name'].$user_data['first_name']?>さん</p>
            </div> 
            <div class="right-lower">
               <p>最終ログイン日:<?php echo $user_data['last_login']?></p>  
            </div> 
        </header>
        <main class="main">
        　　<table align="center">
　　　　　　　　<tr>
　　　　　　　　　<th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th>
               </tr>
               <tr>
                <?php
                    while($posts = $posts_data->fetch()):      
                        echo "<tr>";
                        echo '<td>' . $posts['id'] .'</td>';
                        echo '<td>' . $posts['title'] .'</td>';
                        if($posts['category_no'] == 1){
                            echo '<td>'."食事".'</td>';
                        }elseif($posts['category_no'] == 2){
                            echo '<td>'."旅行".'</td>';
                        }elseif($posts['category_no'] == 3){
                            echo '<td>'."その他".'</td>';
                        }
                        echo '<td>' . $posts['comment'] .'</td>';
                        echo '<td>' . $posts['created'] .'</td>';
                        echo '</tr>';
                        echo "\n";
                    endwhile;
                ?>
                </tr>
　　　　　　　</table>
        </main>
        <footer class="footer">
            <p>Y&I Group.Inc</p> 
        </footer>
   </div>
</body>
</html>
