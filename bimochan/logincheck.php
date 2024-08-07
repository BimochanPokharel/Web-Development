<?php
session_start();
include"connectdb.php";

$username=$_POST['Username'];
$password=$_POST['Password'];
$q="select *from `newaccountregistration` where username='$username' and password='$password' and status='active'";
$result=mysqli_query($con,$q);
if($row=mysqli_fetch_array($result))
{
    if(isset($_POST['remember']))
    {
        setcookie("username",$username,time()+60);
        setcookie("password",$password,time()+60);
    }
    $_SESSION['username']=$username;
    header("location:home1.php");
}
else
{
    echo"login fail";
}





?>