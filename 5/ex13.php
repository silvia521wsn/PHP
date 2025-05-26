<?php
$attend = mt_rand(0, 1);
$place = 'b';
echo "パーティーに参加しますか？<br>";
if($attend === 1) {
    echo "参加";
    echo "<br>";
    if($place === 'a'){
        echo "A会場";
    }elseif($place === 'b'){
        echo "B会場";
    }
} else{
    echo "不参加";
}