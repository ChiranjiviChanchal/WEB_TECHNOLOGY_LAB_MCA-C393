<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h2>Largest Number Calculation Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "The largest number is: " . $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "The largest number is: " . $num2;
        } else {
            echo "The largest number is: " . $num3;
        }
    } else {
        echo "Please submit the form.";
    }
    ?>
</body>
</html>
