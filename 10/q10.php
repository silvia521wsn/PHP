<?php
    $str1 = '今日はくもりです。';
    $str2 = '明日は晴れです。';
    $result1 = preg_match('/\A([あ-んア-ン]+)\z/', $str1);
    $result2 = preg_match('/\A([あ-んア-ン]+)\z/', $str2);
    var_dump($result1); 
    var_dump($result2); 