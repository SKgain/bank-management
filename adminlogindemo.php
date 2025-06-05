<?php
session_start();

if(isset($_POST['submit']))
{  

$con=mysqli_connect("localhost","root","","project");
$username=$_POST['AdminID'];
$password=$_POST['apass'];
$sql="SELECT * FROM admininfo  WHERE AdminID=? AND Pass=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ds", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);

$row=mysqli_fetch_assoc($result);
$_SESSION['AdminID'] =$row['AdminID'];
   
    if($row['AdminID']==$username && $row['Pass']==$password)
    {
        echo"Login Success";
        header("Location:userpanal.php");
       
    }

    else
       
    {
        echo"Login Failed";
    }

    
}
   

?>