<?php
session_start();
$_SESSION['profile'] = array('user_name' => 'taro', 'location' => '関東');
$_SESSION['cart']['desk_01'] = 3;
$_SESSION['cart']['chair_07'] = 5;
?>

<html>
    <body>
        <h1>SESSIONの練習</h1>
        <p><a href="ex53.php">次のページへ</a></p>
        <p><a href="ex54.php">セッションデータの削除</a></p>
    </body>
</html>