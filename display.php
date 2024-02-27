<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name" >
        <input type="submit" value="submit_name">
    </form>

    <?php
     
     if(isset($_POST["name"])) {
        $name = $_POST["name"];
        echo "Hello $name";
    }
    ?>
</body>
</html>