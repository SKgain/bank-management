<!DOCTYPE html>
<html>
<head>
    <title>User Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
<body style="background-color:rgb(176, 230, 181);">

<?php
session_start();
echo"<td>"." Hello..!"." ". $_SESSION['Fname']."</td>" ;
$AC=$_SESSION['AcNum'];
$con=mysqli_connect("localhost","root","","project");
$sql="SELECT ammount FROM depositedbal  WHERE AcNum=$AC";
$result= mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result))
{
    foreach($row as $col)
    {
        echo"<td>"."<p>Your Balance is: ".$col."</p>"."</td>";  

    }
}
?>
<a href="userpanal.php"><button>Back</button></a><br><br>
</body>
</html>
