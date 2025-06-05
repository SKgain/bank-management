<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel- Nuxes Bank</title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
    <body style="background-color:powderblue;">

    <?php

//function array_print($array)
//{
   // echo"<pre>";
   // print_r($array);
   // echo"</pre>";
//}
if(isset($_POST['submit']))
{
    echo"Successfully Deleted";
    //array_print($_POST);
}
else
echo"Unsuccessfull";
?>
<?php
$con=mysqli_connect("localhost","root","","project");

$AcNum=$_POST['AcNum'];

$sql="DELETE FROM userinfo WHERE AcNum=?";
$stmt=mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"d",$AcNum);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($con);

?>
<br><br><a href="adminpanel.php"><button>Back</button></a><br><br>


    </body>
</html>


