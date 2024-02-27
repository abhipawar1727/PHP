<html>
<head>
    <title>Armstrong Number Checker</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method='POST'>
        <h2>Please input a number:</h2>
        <input type="text" name="number">
        <input type="submit" value="Check Armstrong">
    </form>

    <?php
    if(isset($_POST["number"])) {
        $num = $_POST["number"]; 
        echo check_armstrong($num);
    }

    function check_armstrong($num) { 
        $temp = $num; 
        $sum = 0; 
        $digits = strlen($num); 

        while ($num != 0) {
            $digit = $num % 10;
            $sum += pow($digit, $digits);
            $num = (int)($num / 10);
        }

        if ($sum == $temp) {
            return "$temp is an Armstrong number";
        } else {
            return "$temp is not an Armstrong number";
        }
    }
    ?>
</body>
</html>
