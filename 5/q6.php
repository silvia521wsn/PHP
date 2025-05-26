<?php
$score = mt_rand(0, 102);
echo "得点は {$score} 点です。<br>";

if($score >= 0 && $score < 60) {
    echo "不合格";
} elseif ($score >= 60 && $score < 80){
    echo "平均点以上";
} elseif ($score >= 80 && $score < 100){
    echo "優秀点数";
} elseif ($score === 100){
    echo "満点、perfect!";
} else{
    echo "違います";
}
