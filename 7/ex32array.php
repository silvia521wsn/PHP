<?php
$array = array(
    1 => array(
        'Name' => '鈴木',
        'Hobby' => 'テニス', 
        'Email' => 'suzuki@example.com'
    ),
    2 => array(
        'Name' => '山田',
        'Hobby' => 'パソコン', 
        'Email' => 'yamada@example.com'
    ),
    3 => array(
        'Name' => '斉藤',
        'Hobby' => '水泳', 
        'Email' => 'saito@example.com'
    ),
);

foreach ($array as $row) {
    foreach ($row as $key => $value) {
        echo $key.":".$value."<br>";
    }
    echo "<br>";
}
