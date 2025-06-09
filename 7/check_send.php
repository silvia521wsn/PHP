<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>チェックボックス送信</title>
</head>
<body>
<form action="check_receive.php" method="post">
    <h1>セレクトを使ったフォーム</h1>
    <p>好きな色を選んでください(複数選択可)</p>
    <label><input type="checkbox" name="colors[]" value="赤"> 赤</label>
    <label><input type="checkbox" name="colors[]" value="橙"> 橙</label>
    <label><input type="checkbox" name="colors[]" value="黄"> 黄</label>
    <label><input type="checkbox" name="colors[]" value="緑"> 緑</label>
    <label><input type="checkbox" name="colors[]" value="青"> 青</label>
    <label><input type="checkbox" name="colors[]" value="藍"> 藍</label>
    <label><input type="checkbox" name="colors[]" value="紫"> 紫</label>
    <br><br>
    <button type="submit">送信</button>
</form>
</body>
</html>
