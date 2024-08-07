





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form To Add Item</title>
</head>
<body>


<div class="header">

<h1>Register For Sign Up</h1>



</div>


<form class="form1" action="insert.php" method="post" enctype="multipart/form-data"> 
    <div class="row">
        <label for="username">User Name:</label>

</div>
<div class="column">
        <input type="text" name="username" placeholder="Insert Item To Add in Store"/>
</div>




<div class="row">
        <label for="itemprice">Item Price:</label>
</div>
<div class="column">
        <input type="text" name="itemprice" placeholder="Set the price for Item"/>
</div>


<div class="row">
    <label for="country">Country:</label>
</div>

<div class="column">
    <select name="country">
        <option name='Nepal'>Nepal</option>
        <option name='China'>China</option>
        <option name='India'>India</option>
</select>


<div class="row">
    <label for="photo">Image:</label>
</div>


<div class="column">
    <input type="file" name="photo"/>
</div>


<div class="row">
    <label for="remarks">Remarks:</label>
</div>
<div class="column">
<textarea id="remarks" name="remarks" placeholder="Write something.." style="height:200px"></textarea>
</div>


<div class="submit">
    <input type="submit" name="Submit">
</div>





</form>
    
</body>
</html>
