<?php
    $dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    //例えば全画面からPOSTされたデータだと仮定
    $name = '太田美香';
    $age = 32;
    //tryとcatchで、エラーが発生した時も、PG全体を止め内容にする
    try{
        //データベースに接続
        $dbh = new PDO($dsn, $user, $password);
        //エラーレポートの仕方を指定、ERRMODE_EXCEPTIONの代わりにSILENTでもOK
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user (name, age) VALUE (:name, :age)";//(:name, :age)で値を指定、$sqlに格納    
        $stmt = $dbh->prepare($sql);//すぐSQLを実行せず、待機
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);//文字列
        $stmt->bindValue(':age', $age, PDO::PARAM_INT);  //数字
        $stmt->execute();
        echo '処理が終了しました。';

    }catch (PDOException $e){//例外を検知
        echo($e->getMessage());//例外表示
        die();                 //処理停止
    }