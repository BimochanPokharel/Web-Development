<?php
include("menu.php");
include("connectdb.php");
$id=$_GET['id'];
$q="SELECT * FROM `receive form data` WHERE id=$id ";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>



<div class="main-content">
   
    <div class="content">
        <form action="update.php?id=<?php echo $id;?> "method="post" enctype="multipart/form-data">
            <label>Item Name</label>
            <input type="text" name="itemname" value="<?php  echo $row[1];?>">

        <br>
            <label>Price</label>
            <input type="text" name="price" value="<?php  echo $row[2];?>">

            <br>

            <label>Country</label>
            <select name="country" name="country" value="<?php echo $row[3];?>">
        <option name='Nepal'>Nepal</option>
        <option name='China'>China</option>
        <option name='India'>India</option>
</select>
            

            <label>photo</label>
            
            <input type="file" name="photo">

            <br>

            <label>remarks</label>
            <input type="text" name="remarks" value="<?php echo $row[5]; ?>">
            <br>


            <input type="submit" value="Update" name="" class="btn success">

</form>
</div>
</div>