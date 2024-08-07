<?php


include "menu.php";
echo"<div class='main-content'><div class='title'></div> <div class='content'>";
$id=$_GET['id'];
$query="DELETE FROM `receive form data` WHERE ID=$id";


try
{
include"connectdb.php";
mysqli_query($con,$query);
echo"Data Deleted Successfully";
}



catch(Exception $ex)
{
die($ex->getMessage());
}

?>