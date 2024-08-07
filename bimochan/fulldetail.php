<style>

    .itemdisplay>img
    {
        border:2px solid black;
        /* border-radius:0%; */
        width:150px;
        height:150px;
    }

</style>
<?php

include("menu.php");
include("connectdb.php");

$id=$_GET['id'];
$q="SELECT * FROM `receive form data` WHERE ID=$id";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
// print_r($row);

?>


<div class="main-content">
    <div class="title"><h1>View Item</h1</div>
    
    <div class="content">
        <div class="itemDisplay">
            <img src="photostorage/<?php echo $row[4];?>" alt="photo"></div>
            <h3>Id:<?php echo $row[0];?></h3>
            <h3>Item Name:<?php echo $row[1];?></h3>
            <h3>Price:<?php echo $row[2];?></h3>
            <h3>Country:<?php echo $row[3];?></h3>
            <h3>Remarks:<?php echo $row[5];?></h3>

</div>
<a href='editItem.php?id=<?php echo $id;?> 'class="btn success">&nbsp;&nbsp;&nbsp;Edit &nbsp;&nbsp;&nbsp;</a>
</div>