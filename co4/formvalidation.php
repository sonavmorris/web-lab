<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="skyblue">
    <center>
        <form action="" method="POST">
            <h1>REGISTRATION FORM</h1>
            USERNAME:<input type="text" name="username"><br><br>
            PASSWORD:<input type="password" name="password"><br><br>
            PHONE NUMBER:<input type="number" name="phonenumber"><br><br>
            EMAILID:<input type="text" name="emailid"><br><br>
            <input type="submit" name="submit">
        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    $emailid=$_POST['emailid'];
    $uppercase=preg_match('@[A-Z]@',$password);
    $lowercase=preg_match('@[a-z]@',$password);
    $number=preg_match('@[0-9]@',$password);
    $number1=preg_match('@[0-9]@',$phonenumber);
    if($username=="")
    {
        echo"Please fill the username<br>";
    }
    if($password=="" && strlen($password)<8)
    {
        echo"please enter a  password<br>";
    }
    elseif(!$uppercase||!$lowercase||!$number)
    {
        echo"password is not strong<br>";
    }
    else
    {
        echo"password is strong<br>";
    }
    if($emailid=="")
    {
        echo"please fill the emailid<br>";
    }
    if($phonenumber=="")
    {
        echo"please fill the phonenumber<br>";
    }
    else if(strlen($phonenumber)<10)
    {
        echo"invalid phonenumber<br>";
    }
    else
    {
        echo"your phonenumber is valid<br>";
    }
}