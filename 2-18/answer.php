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
function result1($port,$answer1){
	if($port == $answer1){
		print "正解！";
	}else{
		print "残念･･･";
    }
}

function result2($gengo,$answer2){
	if($gengo == $answer2){
		print "正解！";
	}else{
		print "残念･･･";
    }
}

function result3($comand,$answer3){
	if($comand == $answer3){
		print "正解！";
	}else{
		print "残念･･･";
    }
}
?>
<link rel="stylesheet" href="style.css">
<body>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result1($port,$answer1);?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result2($gengo,$answer2);?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result3($comand,$answer3);?>
</body>