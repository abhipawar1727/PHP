<html>
<head> 
    <title>Word to Digit Converter</title>
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
        word_digit($a); 
    }

    function word_digit($word) {
        $warr = explode(',', $word);
        $result = "";
        foreach($warr as $value) {
            switch(trim($value)) {
                case 'zero': $result .= '0'; break;
                case 'one': $result .= '1'; break;
                case 'two': $result .= '2'; break;
                case 'three': $result .= '3'; break;
                case 'four': $result .= '4'; break;
                case 'five': $result .= '5'; break;
                case 'six': $result .= '6'; break;
                case 'seven': $result .= '7'; break; 
                case 'eight': $result .= '8'; break;
                case 'nine': $result .= '9'; break;
            }
        }
        echo $result;
    }
    ?>
</body>
</html>
