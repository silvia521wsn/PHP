<?php
session_start();
$_SESSION = array();
$session_name = session_name();
if (isset($_COOKIE[$session_name]) === true){
    setcookie($session_name, '', time() - 3600);
}
session_destroy();
var_dump($_SESSION);
?>

<html>
    <body>
        <a href="ex52.php">戻る</a>
    </body>
</html>
