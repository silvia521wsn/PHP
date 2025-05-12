<?php
$i = 1;
function f(){
    global $i;
    echo $i;
}
f();
