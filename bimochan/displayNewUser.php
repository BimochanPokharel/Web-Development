
<style>
    table{
        padding:1rem;
        margin-top:0.5rem;
        width:70%;
        margin-left:15%;
    
    }
    a{
        text-decoration:none;
    }
    .btndelete{
        border:1px solid black;
        background-color:red;
        color:white;

    }
    .btnsuccess
    {
        border:1px solid black;
        background-color:green;
        color:white;

    }
    </style>



<?php

include("menu.php");

include("connectdb.php");

try{
$q="SELECT `ID`, `username`, `status` FROM `newaccountregistration`";

$result=mysqli_query($con,$q);

echo "<table border=1 class='display_table'>";

echo "<tr><th>Id<th>Username<th>status<th colspan=2>Action</tr>";

while($row=mysqli_fetch_array($result, MYSQLI_NUM)){

$id=$row[0];

if($row[2]=="pending")
{
echo "<tr style='color:black'>";
}
else if($row[2]=="active"){

echo "<tr style='color:green'>";

}else{

echo "<tr style='color:red'>";

}

foreach($row as $value){

echo "<td>";

echo $value;

echo "</td>";

}



echo "<td><a href='suspendUser.php?id=$id' class='btn delete' >Suspend</a></td>";

echo "<td><a href='activateUser.php?id=$id' class='btn success' >Activate</a></td>";
 echo "</tr>";

}
}
catch(Exception $ex)
{
    die($ex->getMessage());
}
?>

