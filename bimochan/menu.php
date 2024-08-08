<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:loginpage.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
<ul>
<li><a href="home1.php">Home</a></li>
<li><a href="insertitem.php">Insert Item</a></li>
<li><a href="viewitem.php">View Item</a></li>
<!-- <li><a href="newaccountregistration.php">New User Registration</a></li> -->
<li><a href="displayNewUser.php">Display Login User</a></li>
<li style="float:right;"><a href="logout.php">Log Out</a></li>
<li style="float:right; padding-top:15px; font-weight:bold;">Welcome:<?php echo $_SESSION['username']?></li>


<!-- <li><a href="delete.php">Delete Item</a></li> -->
    <h1>Hello</h1>
</ul>

</div>







    
</body>
</html>
