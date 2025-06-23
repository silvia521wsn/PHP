<?php
$name = $_GET['name'];
$hobby = $_GET['hobby'];
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>GET_登録ページ</h1>
<p>こんにちは<?php echo $name; ?>さん</p>
<p>趣味は<?php echo $hobby;?>ですね</p>
<p>登録完了いたしました。</p>
<p></p>
</body>
</html>