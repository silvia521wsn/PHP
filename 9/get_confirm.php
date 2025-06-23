<?php
$name = $_GET['name'];
$hobby = $_GET['hobby'];
echo $name,$hobby;
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>GET_受信ページ</h1>
<p>あなたの名前は<?php echo $name;?>です。</p>
<p>趣味は<?php echo $hobby;?>です。</p>
<p>こちらの情報でよろしいですか？</p>
<form action="get_complete.php" method="GET">
<input type="hidden" name="name" value="<?php echo $name;?>">
<input type="hidden" name="hobby" value="<?php echo $hobby;?>">
<input type="submit" value="登録">
</form>
</body>
</html>