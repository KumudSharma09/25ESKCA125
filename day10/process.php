<?php

include("header.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    if(empty($name) || empty($email) || empty($mobile) || empty($gender) || empty($password))
    {
        echo "<h2>All fields are required.</h2>";
    }
    else
    {
        echo "<h2>Registration Successful</h2>";

        echo "<b>Name :</b> $name <br><br>";
        echo "<b>Email :</b> $email <br><br>";
        echo "<b>Mobile :</b> $mobile <br><br>";
        echo "<b>Gender :</b> $gender <br><br>";
        echo "<b>Password :</b> $password <br><br>";
    }
}
else
{
    echo "<h2>Invalid Request!</h2>";
}

include("footer.php");

?>