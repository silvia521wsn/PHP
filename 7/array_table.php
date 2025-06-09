<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>二次元配列表</title>
</head>

<?php
$array = array(
    1 => array(
        'Name' => '鈴木',
        'Hobby' => 'テニス', 
        'Email' => 'suzuki@example.com'
    ),
    2 => array(
        'Name' => '山田',
        'Hobby' => 'パソコン', 
        'Email' => 'yamada@example.com'
    ),
    3 => array(
        'Name' => '斉藤',
        'Hobby' => '水泳', 
        'Email' => 'saito@example.com'
    ),
);
?>

<table border="1">
    <tr>
        <?php foreach ($array[1] as $key => $value): ?>
            <th><?php echo htmlspecialchars($key); ?></th>
        <?php endforeach; ?>
    </tr>
    
    <?php foreach ($array as $row): ?>
        <tr>
            <?php foreach ($row as $value): ?>
                <td><?php echo htmlspecialchars($value); ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
