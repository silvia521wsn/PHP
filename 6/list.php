<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <ul>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 !== 0) {
                echo "<li style='background-color: red; color: white;'>$i</li>";
            } else {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
