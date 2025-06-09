<?php
$colors = isset($_POST['colors']) ? $_POST['colors'] : [];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>チェックボックスデータ送信</title>
</head>
<body>
<h1>受信ページ</h1>
<h3>好きな色</h3>

<?php if (count($colors) > 0): ?>

    <ul>
        <?php foreach ($colors as $color): ?>
            <li><?php echo htmlspecialchars($color, ENT_QUOTES, 'UTF-8'); ?></li>
        <?php endforeach; ?>
    </ul>

    <?php
    // htmlspecialcharsで安全にエスケープした後の配列を作る
    $safe_colors = array_map(function($c) {
        return htmlspecialchars($c, ENT_QUOTES, 'UTF-8');
    }, $colors);

    // 色を「と」で結ぶ用に一旦カンマでつなぎ、そのあと「,」を「と」に置換（カンマの最後は「と」）
    // 例：赤,青,緑 → 赤と青と緑
    // implodeは「,」でつなぐけど、カンマを「と」に変える方法にします。

    $text = implode('と', $safe_colors);
    ?>

    <p>あなたの好きな色は<?php echo $text; ?>です。</p>

<?php else: ?>
    <p>色が選択されていません。</p>
<?php endif; ?>

</body>
</html>
