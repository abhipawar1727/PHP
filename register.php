<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>

    <?php
    if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $un = $_POST["username"];
        $e = $_POST["email"];
        $pass = $_POST["password"];
        echo "Username: $un<br>";
        echo "Email: $e<br>";
        echo "Password: $pass<br>";
    }
    ?>
</body>
</html>
