<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Lowercase to Uppercase</title>
</head>
<body>
    <h2>Enter a lowercase string to convert to uppercase:</h2>
    <form action="" method="post">
        <input type="text" name="lowercaseString">
        <input type="submit" value="Convert">
    </form>

    <?php
    if(isset($_POST['lowercaseString'])) {
        $lowercaseString = $_POST['lowercaseString'];

        $uppercaseString = strtoupper($lowercaseString);

        echo "<p>Lowercase string: $lowercaseString</p>";
        echo "<p>Uppercase string: $uppercaseString</p>";
    }
    ?>
</body>
</html>
