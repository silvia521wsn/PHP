<?php
session_start();

$items = [
    'desk' => '業務用デスク',
    'chair' => '快適椅子',
];

$cart = $_SESSION['cart'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $qty = (int)$_POST['qty'];
    $cart[$code] = $qty;
    $_SESSION['cart'] = $cart;
    header('Location: shop.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>商品一覧</title>
</head>
<body>
    <h1>商品一覧</h1>
    <p><a href="cart.php">カートを見る</a></p>
    <table border="1">
        <tr><th>商品</th><th>数量</th><th>ボタン</th></tr>
        <?php foreach ($items as $code => $name): ?>
            <tr>
                <td><?= htmlspecialchars($name) ?></td>
                <td>
                    <form action="shop.php" method="post" style="display:inline;">
                        <input type="hidden" name="code" value="<?= $code ?>">
                        <input type="number" name="qty" value="1" min="1" required>
                </td>
                <td>
                    <?php if (isset($cart[$code])): ?>
                        追加済み
                    <?php else: ?>
                        <button type="submit">カートに追加</button>
                    <?php endif; ?>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
