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



$query="SELECT * FROM `receive form data`";
$con=mysqli_connect($server,$username,$password);
$db=mysqli_select_db($con,$db);
$result=mysqli_query($con,$query);


echo"<table border=1px ><tr>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Country</th>
<th>Photo</th>
<th>Remarks</th>
<th colspan=2>Action</th>
</tr>
";

while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
    $id=$row[0];
    echo"<tr>";
    foreach($row as $value)
    {
    echo"<td>";
    echo "$value";
    echo"</td>";
    }
    echo"<td><a href='delete.php?id=$id' class='btndelete' onClick=return.confirm(\"Are you sure to delete?\")'>Delete</a></td>";
    echo"<td><a href='fulldetail.php?id=$id' class='btnsuccess'onclick' return.confirm(\"Are you sure to view?\")'>View Full Detail</a></td>";
    echo"</tr>";
}
print_r($row);




?>