<!doctype html>
<html>
<head>
<title>Times Table</title>
</head>

<body>
    <?php
        $n = isset($_GET['n']) ? (int) $_GET['n'] : 0;

        echo "<h1>Multiplication Table for $n</h1>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 1; $i <= 15; $i++) {
            echo "<tr><td>$i</td><td>x</td><td>$n</td><td>=</td><td>" . ($i * $n) . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
