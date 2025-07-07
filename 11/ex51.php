<?php
setcookie('email', '', time() - 3600);
var_dump($_COOKIE);
?>
<html>
    <body>
        <p>クッキーが削除されました。</p>
        <a href="ex49.php">戻る</a>
    </body>
</html>