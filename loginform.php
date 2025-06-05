<!DOCTYPE html>
<html>
    <head>
        <title>login form- Nuxes Bank</title>
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
    echo"Registration Successful";
    //array_print($_POST);
}
else
echo"Login Failed";
?>

<br><br> <a href="userlogin.html"><button>Login</button></a>


<?php
$con=mysqli_connect("localhost","root","","project");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$Actype=$_POST['actype'];

$sql="INSERT INTO userinfo(Fname,Lname,email,pass,Dob,gen,Actype) VALUES(?,?,?,?,?,?,?)";
$stmt=mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"sssssss",$fname,$lname,$email,$password,$dob,$gender,$Actype);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($con);

?>


    </body>
</html>


