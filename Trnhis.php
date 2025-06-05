<!DOCTYPE html>
<html>
<head>
    <title>User Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
<body style="background-color:rgb(176, 230, 181);">
<a href="history.php"><button>Back</button></a><br><br>

<?php
session_start();
echo"<td>"." Hello..!"." ". $_SESSION['Fname']."</td>" ;
$AC=$_SESSION['AcNum'];

$con=mysqli_connect("localhost","root","","project");
$sql="SELECT * FROM fundtransfer WHERE AcNum=$AC";
$result= mysqli_query($con, $sql);

echo"<table>";
while($row= mysqli_fetch_assoc($result))
{ 
      echo"<tr>";
    foreach($row as $col)
    {
        echo"<td>"." "." ".$col." "." "."</td>";  
    }
    echo"</tr>";
}
echo"</table>";
?>
</body>
</html>
