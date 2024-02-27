<html> 
<head>
    <title>Sum of Digits</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head> 
<body>
    <form method='POST'> 
        <h2>Please input a number:</h2>
        <input type="text" name="number">
        <input type="submit" value="submit number">
    </form>

    <?php
    if(isset($_POST["number"])) {
        $a = $_POST["number"]; 
        echo sum_of_digits($a);
    }

    function sum_of_digits($num) { 
        $tempnum = $num; 
        $sum = 0; 

        while ($num != 0) {
            $rem = $num % 10;
            $sum += $rem;
            $num = (int)($num / 10);
        }

        return "Sum of digits $tempnum is $sum";
    }
    ?>
</body>
</html>
