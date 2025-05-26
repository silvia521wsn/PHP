<html>
    <head>
        <meta charset="UTF-8">
        <title>課題：データ送受信</title>
    </head>

    <body>
        <h1>データ受け渡し練習</h1>
        <p>以下のデータを次のページに渡す</p>
        <!-- ここにフォームを追加します -->
        <form action="4-2.php" method="POST">
            <label>好きな科目</label> <input type="text" name="subject">
            <br>
            <label>科目担当</label> <input type="text" name="charge">
            <br>
            <input type="submit" value="送信">
        </form>
    </body>
</html>