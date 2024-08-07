<?php

include("menu.php");

// $itemname=$_POST['itemname'];

try{

$id=$_GET['id'];

include("connectdb.php");

$query="UPDATE `newaccountregistration` SET `status`='suspend' WHERE id=$id";

$result=mysqli_query($con, $query);

if(!$result){

die("error");

}else{

echo "Status Updated successfully";

}

}

catch(Exception $ex){ die($ex->getMessage());

}

?>

