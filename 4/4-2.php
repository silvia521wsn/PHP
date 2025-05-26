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
    <h1>データ受信確認</h1>
    <p>★好きな科目★<?php echo $subject;?>科目です。</p>
    <p>☆科目担当☆<?php echo $charge;?>先生です。</p>
    <p>受信したデータは正しいですか？</p>
    <p>入力データを修正したい場合は、<br>
    戻るボタンを押して、再度入力してください</p>

    <form action="4-3.php" method="POST">
        <input type="hidden" name="subject" value="<?php echo $subject;?>">
        <input type="hidden" name="charge" value="<?php echo $charge;?>">
        <input type="submit" value="確認">
    </form>

    <form action="4-1.php" method="POST">
        <input type="submit" value="戻る">
    </form>    
</body>
</html>