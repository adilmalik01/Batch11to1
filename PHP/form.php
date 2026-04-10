<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name =   $_POST["name"];
    $user_email =  $_POST["email"];
    $user_message = $_POST["message"];



    


    echo "Name: " . $user_name . "<br>";
    echo "Email: " . $user_email . "<br>";
    echo "Message: " . $user_message . "<br>";

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM || HTML</title>
</head>

<body>





    <h1>Contact Us</h1>
    <form action="./form.php" method="post">

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Message:</label><br>
        <textarea name="message"></textarea><br><br>

        <button type="submit">Send</button>
    </form>




</body>

</html>