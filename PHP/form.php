<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password =  $_POST["password"];



    echo "email : " . $email . "<br>";
    echo "password : " . $password . "<br>";
};





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM || HTML</title>
</head>

<body>





    <form action="./form.php" method="post">
        <label>email :</label>
        <input type="email" name="email" id="email">

        <br><br>

        <label>password :</label>
        <input type="password" name="password" id="password">

        <br><br>

        <input type="submit" value="submit">
    </form>




</body>

</html>