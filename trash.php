<?php

/*$servername1="localhost";
$username="root";
$password="kspl1234";
$dbname="user1";

//user data is
$name=$_POST["name"];
$password1=$_POST["password"];
$email=$_POST["email"];

//echo "username is $name his password is $password and his email is $email" ;
$conn=mysqli_connect($servername1,$username,$password,$dbname);
//echo '<pre>'; print_r($conn); exit();
if(!$conn)
{
    die("connection not established:".mysqli_connect_error());
}else{
    echo "Connected";
}

$sql = "INSERT INTO userdata (username, password, email)
VALUES ($name,$password1,$email)";

//$sql="insert into userdata values($name,$password1,$email);";
if(mysqli_query($conn,$sql))
{
    echo "details are saved" ;
}
else
{
echo "sorry,details are not saved "."error $sql".mysqli_error($conn);
}
mysqli_close($conn);*/