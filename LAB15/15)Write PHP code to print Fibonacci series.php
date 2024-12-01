<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>

<form method="post">
    <label for="terms">Enter the number of terms:</label>
    <input type="number" id="terms" name="terms" min="1" required>
    <input type="submit" name="submit" value="Generate Fibonacci Series">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $terms = intval($_POST['terms']);
    
    function fibonacci($n) {
        $fib_sequence = [0, 1];
        if ($n <= 0) {
            return [];
        } elseif ($n == 1) {
            return [0];
        } elseif ($n == 2) {
            return $fib_sequence;
        }
        
        for ($i = 2; $i < $n; $i++) {
            $fib_sequence[] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
        }
        
        return $fib_sequence;
    }

    $fibonacci_series = fibonacci($terms);

    echo "<h2>Fibonacci Series</h2>";
    echo implode(", ", $fibonacci_series);
}
?>

</body>
</html>
