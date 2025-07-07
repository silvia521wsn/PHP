<?php

mb_language("Japanese");//日本語に対応させる
mb_internal_encoding("UTF-8");

$user_name = '王世寧';//ユーザネームの設定
$to      = 'k024c2100@g.neec.ac.jp';//送信先設定
$subject = 'メールテスト1';//メールタイトル設定
//本文記述
$message = <<<EOM
{$user_name}さん、
このメールはテスト送信です。
http://{$_SERVER['SERVER_NAME']}
EOM;

$headers = 'From:sample@sample.com' . "\r\n";
mb_send_mail($to, $subject, $message, $headers);