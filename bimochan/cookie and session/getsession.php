<?php
session_start();
if(!isset($_SESSION['token']))
{
    die ("Session is not created");
}
echo $_SESSION['token'];
echo $_SESSION['username'];




?>