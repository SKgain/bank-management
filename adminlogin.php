<!DOCTYPE html>
<html>
    <head>
        <title>login form- Nuxes Bank</title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
    <body style="background-color:powderblue;">


<?php
session_start();

if(isset($_POST['submit']))
{  

$con=mysqli_connect("localhost","root","","project");
$username=$_POST['AdminID'];
$password=$_POST['apass'];

$sql="SELECT * FROM admininfo  WHERE AdminID=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "d", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);

$row=mysqli_fetch_assoc($result);
if($row)
{
    
    if($row['AdminID']==$username && $row['Pass']==$password)
    {
        echo"Login Success";
        $_SESSION['AdminID'] =$row['AdminID'];
        $_SESSION['Password'] = $row['Pass'];
        $_SESSION['fname']=$row['fname'];
        header("Location:adminpanel.php");
       
    }

    else
       
    {
        echo"Wrong Password";
    }

}
else
       
    {
        echo"Unregistered Admin ID";
    }


}
  

?>
<br><br><a href="adminlogin.html"><button>Try Again</button></a>
</body>
</html>