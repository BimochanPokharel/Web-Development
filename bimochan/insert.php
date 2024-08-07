<?php
include("connectdb.php");
include("menu.php");


try{

$variable1=$_POST['itemname'];
$variable2=$_POST['itemprice'];
$variable3=$_POST['country'];
$photo=$_FILES['photo']['name'];
$variable4=$_POST['remarks'];





$query="INSERT INTO `receive form data`( `Item Name`, `Item Price`, `Country`,`photo`, `Remarks`) VALUES ('$variable1','$variable2','$variable3','$photo','$variable4')";




//move file t htdocs folder

move_uploaded_file($_FILES['photo']['tmp_name'],"photostorage/".$photo);


$con=mysqli_connect($server,$username,$password);
$db=mysqli_select_db($con,$db);
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