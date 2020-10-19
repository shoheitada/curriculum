<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$port =$_POST['port'];
$gengo =$_POST['gengo'];
$comand =$_POST['comand'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if($port == $answer1){
	$result1 = "正解！";
}else{
	$result1 = "残念･･･";
}

if($gengo == $answer2){
	$result2 = "正解！";
}else{
	$result2 = "残念･･･";
}

if($comand == $answer3){
	$result3 = "正解！";
}else{
	$result3 = "残念･･･";
}
?>
<link rel="stylesheet" href="style.css">
<body>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result1 ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result2 ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result3 ?>
</body>