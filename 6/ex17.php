<?php
$score = 82;

switch (true) {
    case ($score >= 0 && $score < 60):
        echo "不合格";
        break;
    case ($score >= 60 && $score < 80):
        echo "平均点以上";
        break;
    case ($score >= 80 && $score < 100):
        echo "優秀点数";
        break;
    case ($score === 100):
        echo "満点、perfect!";
        break;
    default:
        echo "違います";
        break;
}
