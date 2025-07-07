<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$user_name = '王世寧';//ユーザの名前
$to      = 'k024c2100@g.neec.ac.jp';
$subject = 'メールテスト2';
$message =<<<EOM
{$user_name}さん、

このメールはテスト送信です。
http://{$_SERVER['SERVER_NAME']}
EOM;

$from = "ONLINE-TUTOR事務局 ";
$from_mail = "sample@sample.com";

$headers = '';//メールヘッダの初期化
$headers .= "Cc: another@another.com \r\n";
$headers .= "Content-Type: text/plain \r\n";
$headers .= "Return-Path: " . $from_mail . " \r\n";//エラー通知
$headers .= "From: " . $from ." \r\n";//差出人
$headers .= "Sender: " . $from ." \r\n";//送信者
$headers .= "Reply-To: " . $from_mail . " \r\n";//返信アドレス
$headers .= "Organization: " . $from . " \r\n";//送信者名

if(mb_send_mail($to, $subject, $message, $headers) === FALSE){
	echo 'メール送信に失敗しました。';
}else{
	echo 'メールを送信しました。';
}