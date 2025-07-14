<?php
session_start();

$items = [
    'desk' => '業務用デスク',
    'chair' => '快適椅子',
];

$cart = $_SESSION['cart'] ?? [];

if (isset($_GET['clear'])) {
    $_SESSION['cart'] = [];
    header('Location: cart.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $qty = (int)$_POST['qty'];
    if ($qty > 0) {
        $_SESSION['cart'][$code] = $qty;
    }
    header('Location: cart.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ショッピングカート</title>
</head>
<body>
    <h1>ショッピングカート</h1>
    <p><a href="shop.php">商品一覧へ</a> | <a href="cart.php?clear=1">カートをすべて空に</a></p>
    <table border="1">
        <tr><th>商品</th><th>個数</th><th>数量</th><th>変更</th><th>削除</th></tr>
        <?php foreach ($cart as $code => $qty): ?>
            <tr>
                <td><?= htmlspecialchars($items[$code]) ?></td>
                <td><?= $qty ?>個</td>
                <td>
                    <form action="cart.php" method="post" style="display:inline;">
                        <input type="hidden" name="code" value="<?= $code ?>">
                        <input type="number" name="qty" value="<?= $qty ?>" min="1" required>
                </td>
                <td>
                        <button type="submit">変更</button>
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="code" value="<?= $code ?>">
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
