<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
$q1 = h($_POST["q1"]);
$q2 = h($_POST["q2"]);
$q3 = h($_POST["q3"]);


//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$q1.",".$q2.",".$q3;  //現在の日付時刻表示のテンプレート
//File書き込み
$file = fopen("data/data.txt","a");	// fopen: ファイル読み込み  dataフォルダの中のdata.txtファイル
fwrite($file, $str."\n");  //fwrite:ファイルに追記
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>アンケートへのご協力ありがとうございました。</h1>


<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>