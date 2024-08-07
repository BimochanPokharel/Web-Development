<?php
include("connectdb.php");
include("menu.php");


try{

$uname=$_POST['username'];
$pass=$_POST['password'];
$retype_pass=$_POST['retype_password'];

$status="pending";





$query="INSERT INTO `newaccountregistration`( `username`, `password`,`retype_password`,  `status`) VALUES ('$uname','$pass','$retype_pass','$status')";


$result=mysqli_query($con,$query);

if(!$result)
    echo "Sorry data not inserted not inserted";

else

    echo "Data inserted successfully";

}
catch(Exception $ex)
{
    die($ex->getMessage());
}










?>