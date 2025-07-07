<?php
//関数の命名
function html_escape($word){
    //処理したデータを返す
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}