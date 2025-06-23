<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>POSTでデータを送信する</h1>
        <p>プロフィールを登録しよう</p>
        <form action="post_receive.php" method="POST">
            <label>お名前：</label>
            <input type="text" name="name">
            <br><br>

            <label>性別：</label>
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女
            <br><br>

            <label>血液型：</label>
            <select name="blood">
                <option value="">ー</option>
                <option value="A">A型</option>
                <option value="B">B型</option>
                <option value="O">O型</option>
                <option value="AB">AB型</option>
            </select>
            <br><br>

            <label>ひとこと：</label><br>
            <textarea name="message" rows="4" cols="50"></textarea>
            <br><br>

            <input type="submit" value="確認">
        </form>
    </body>
</html>
