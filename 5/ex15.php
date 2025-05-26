<?php
$film = $_POST['film'] ?? '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$film) {
        $error = '映画名を入力してください。';
    } elseif (mb_strlen($film) > 20) {
        $error = '20文字以内で入力してください。';
    } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龥a-zA-Z0-9\sー・]+$/u", $film)) {
        $error = '使用できない文字が含まれています。';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>バリデーション</title>
    <style>
        body { text-align: center; font-family: sans-serif; margin-top: 50px; }
    </style>
</head>
<body>
<h2>入力フォームを検証しよう</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($error !== '') {
        echo '<p style="color:red">'.$error.'</p>';
    } else {
        echo '<p>あなたの好きな映画は「'.htmlspecialchars($film).'」です。</p>';
    }
}
?>

<form method="post">
    好きな映画
    <input type="text" name="film" value="<?= htmlspecialchars($film) ?>"><br><br>
    <input type="submit" value="送信">
</form>

</body>
</html>
