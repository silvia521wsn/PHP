<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$blood = $_POST['blood'];
$message = $_POST['message'];
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>受信ページ</h1>
    <p>あなたの名前は <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?> さんです。</p>
    <p>性別は <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?> です。</p>
    <p>血液型は <?php echo htmlspecialchars($blood, ENT_QUOTES, 'UTF-8'); ?> 型です。</p>
    <p>ひとことメッセージ：</p>
    <p><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></p>
    <p>よろしくお願いいたします。</p>
</body>
</html>
