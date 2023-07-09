<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/survey.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<title>Survey</title>

</head>

<header>
	<h1>アンケートにご協力お願いいたします。</h1>
</header>
<body>
	<form action="write.php" method="post">
	お名前: <input type="text" name="name" class="input"><br>
	EMAIL: <input type="text" name="mail" class="input"><br>
	<div class="input"> 
	🔶年齢: 
		<input type="radio" id="age1" name="q1" value="-19" />
		<label for="contactChoice1">20歳未満</label>

		<input type="radio" id="age2" name="q1" value="20-39" />
		<label for="contactChoice2">20歳〜40歳未満</label>

		<input type="radio" id="age3" name="q1" value="40-" />
		<label for="contactChoice3">40歳以上</label><br>
	</div>

	<div class="input">
	🔶質問① <br>
	外出中に急にパラパラと雨が降ってきました。目的地まであと10分歩かなければならず、すぐそばにコンビニがあります。あなたの行動に一番近いのはどれですか？<br>
		<input type="radio" id="rain1" name="q2" value="buy" />
		<label for="contactChoice1">すぐにコンビニでビニール傘を買う。</label><br>

		<input type="radio" id="age2" name="q2" value="ride" />
		<label for="contactChoice2">タクシーを探して（またはタクシーを呼んで）タクシーに乗る。</label><br>

		<input type="radio" id="age3" name="q2" value="go" />
		<label for="contactChoice3">多少の雨なら濡れても構わないので、そのまま行く。</label><br>
	</div>

	<div class="input">
	🔶質問②<br>
	あなたのご自宅や職場に、あなたが購入したビニール傘が現在何本ありますか？<br>
		<input type="radio" id="kasa1" name="q3" value="0" />
		<label for="contactChoice1">0本	</label>

		<input type="radio" id="kasa2" name="q3" value="1-2" />
		<label for="contactChoice2">1〜2本</label>

		<input type="radio" id="kasa3" name="q3" value="3-" />
		<label for="contactChoice3">3本以上</label><br>
	</div>

	<input type="submit" value="送信">
</form>
<ul id="privacy">
<a href="">プライバシーポリシー</a></ul>
</ul>
</body>
</html>

<script>
	$("#privacy").on("click", function(){
		alert("個人情報守ります！");
	})

</script>