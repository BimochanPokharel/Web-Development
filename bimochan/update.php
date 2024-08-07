<?php


include("menu.php");




try
{
    $id=$_GET['id'];
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $photo=$_FILES['photo']['name'];
    $country=$_POST['country'];
    $remarks=$_POST['remarks'];

    include("connectdb.php");
    if($_FILES['photo']['name']=="")
    {
        $query="UPDATE `receive form data` SET `Item Name`='$itemname',`Item Price`='$price',`Country`='$country',`Remarks`='$remarks' WHERE id=$id";
    }
    else
    {
        $query="UPDATE `receive form data` SET `Item Name`='$itemname',`Item Price`='$price',`Country`='$country',`photo`='$photo',`Remarks`='$remarks' WHERE id=$id";
        //move file to htdocs folder

        move_uploaded_file($_FILES['photo']['tmp_name'],"photostorage/".$photo);
    }

    $result=mysqli_query($con,$query);
    if(!$result)
    {
        die("error");
    }
    else 
    {
        echo "Data Updated successfully";
    }

}


    catch(Exception $ex)
    {
        die($ex->getMessage());
    }



    

?>


