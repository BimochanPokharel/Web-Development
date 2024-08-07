<?php

$uname="";
$pass="";
if(isset($_COOKIE['username']))
{
    $uname=$_COOKIE['username'];
    $pass=$_COOKIE['password'];

}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    



<div class="login-page">

        <form action="logincheck.php" method="post">
            <div class="h1">
                <h1>Login Page</h1>
            </div>
          

            <div class="icon">
                <i class="fa fa-sign-in" style="font-size:36px; padding-left: 240px; "></i>
            </div>
            
            <div class="username">
          <label for="username">Username:</label>
            <input type="text" id="username" name="Username" placeholder="Email or Phone..." value="<?php echo $uname;   ?>" required>
        </div>


        <div class="password">
          <label for="password">Password:</label>
            <input type="password" id="password" name="Password" placeholder="Enter your password..." value="<?php echo $pass;  ?>" required>
        </div>

        <div class="remember">
            <input type="checkbox" name="remember">Remember Me?<br>
</div>


        <div class="submit">
          <input type="submit" id="submit" value="Submit">

        </div>

            <div class="sign-up">
                <button><a href="newaccountregistration.php">Sign Up New Account</a></button>
                <button><a href="#">Forgot Password?</a></button>
            </div>  

            

        </form>
</div>
    
    
</body>
</html>