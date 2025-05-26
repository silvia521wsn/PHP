<?php
    $subject = $_POST['subject'];
    $charge = $_POST['charge'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>課題：データ送受信</title>
    </head>
    <body>
        <h1>受信データ確認</h1>
        <p>★あなたのすきな科目は★<?php echo $subject;?>ですね</p>
        <p>☆その科目の担当は☆<?php echo $charge;?>先生ですね</p>
        <p>データ送受信できました！</p>
    </body>
</html>