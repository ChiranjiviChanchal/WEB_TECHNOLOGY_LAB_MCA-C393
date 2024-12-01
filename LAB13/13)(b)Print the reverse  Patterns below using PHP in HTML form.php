<!DOCTYPE html>
<html>
<head>
    <title>Print Pattern</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>

<form method="post">
    <input type="submit" name="printPattern" value="Print Pattern">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['printPattern'])) {
    echo '<pre>';
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '* ';
        }
        echo "\n";
    }
    echo '</pre>';
}
?>

</body>
</html>
