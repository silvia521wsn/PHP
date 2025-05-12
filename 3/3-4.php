<?php
function f1(){
    $a = "ローカル変数";
    return $a;
} 
$a = f1();
function f2(){
    global $a;
    echo $a;
}
f2();