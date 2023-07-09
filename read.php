<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border='1'>
  <tr>
    <th>日付</th>
    <th>お名前</th>
    <th>email</th>
    <th>年齢</th>
    <th>突然雨が降ったら？</th>
    <th>ビニール傘の数</th>
  </tr>

<?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {

    $s = nl2br($str); // nl2br() ... 改行文字を追加
    $arr = explode(",", $s);
    echo "
    <tr>
        <td>".$arr[0]."</td>
        <td>".$arr[1]."</td>
        <td>".$arr[2]."</td>
        <td>".$arr[3]."</td>
        <td>".$arr[4]."</td>
        <td>".$arr[5]."</td>
    </tr>
    ";
}
fclose($file); // ファイルを閉じる

?>
</table>

</body>
</html>