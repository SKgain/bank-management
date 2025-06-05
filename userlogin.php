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
$username=$_POST['uacnm'];
$password=$_POST['upass'];
$sql="SELECT * FROM userinfo WHERE email=? and pass=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ds", $username,$password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);

$row=mysqli_fetch_assoc($result);

if($row)
{
    if($row['email']==$username && $row['pass']==$password)
    {
        echo"Login Success";
        $_SESSION['AcNum'] =$row['AcNum'];
        $_SESSION['Fname'] = $row['Fname'];
        $_SESSION['Lname'] = $row['Lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pass']=$row['pass'];
        $_SESSION['Actype'] = $row['Actype'];

        header("Location:userpanal.php");
       
    }

    else
       
    {
        echo"Wrong Password";
       
    }

}

else
       
{
    echo"Wrong Password Or Email";
   
}
            
}
   

?>
<br><br><br><a href="userlogin.html"><button>Try Again</button><br><br><br>
</body>
</html>