<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>GET_データ送信練習_form</h1>
        <p>次のページにデータを渡し確認</p>
        <!-- ここにフォームを追加します -->
        <form action="get_confirm.php" method="GET">
            <label>お名前</label> <input type="text" name="name">
            <label>趣味</label> <input type="text" name="hobby">
            <input type="submit" value="確認">
        </form>
    </body>
</html>