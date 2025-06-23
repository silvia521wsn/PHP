<?php
    $dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $count = $stmt->rowCount();//行数取得
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){//1行ずつデータ取得
        $data[] = $row;        //配列$dataに行を格納
    }

    echo '処理が終了しました。';

}catch (PDOException $e){
    echo($e->getMessage());
    die();
}
var_dump($count);
var_dump($data);