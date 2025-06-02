<html>
<head>
    <meta charset="utf-8">
    <title>生年月日form</title>
</head>
<body>
    <h1>生年月日入力フォーム</h1>
    
    <form action="#" method="post">
        <label>西暦</label>
        <select name="year">
            <?php
            for ($year = 1950; $year <= date("Y"); $year++) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>

        <select name="month">
            <?php
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value=\"$month\">$month</option>";
            }
            ?>
        </select>

        <select name="day">
            <?php
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value=\"$day\">$day</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>
