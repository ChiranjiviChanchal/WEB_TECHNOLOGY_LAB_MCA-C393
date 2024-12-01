<html> 
<head> 
    <title>Pattern</title> 
</head> 
<body> 
    <form method="post"> 
        <button type="submit" name="print">Print Pattern</button> 
    </form> 
    <?php 
    if (isset($_POST['print'])) { 
        for ($i = 1; $i <= 5; $i++) echo str_repeat("*", $i) . "<br>"; 
    } 
    ?> 
</body> 
</html>