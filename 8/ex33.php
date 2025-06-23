<?php
$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '田中三郎', 28, 'sample5@sample5.com')";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    echo '接続に成功しています';
}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}