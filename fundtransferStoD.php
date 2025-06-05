
<!DOCTYPE html>
<html>
    <head>
        <title>User Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
    <body style="background-color:rgb(202, 230, 176);">

    <?php
    session_start();
    
    if(isset($_POST['submit']))
    {  
        echo"Transfer Successful";
        
    }
else
echo"Transfer Failed";

$con=mysqli_connect("localhost","root","","project");

        $AcNum=$_POST['AcNum'];
        $toAcNum=$_POST['toAcNum'];
        $ammount=$_POST['ammount'];
        $date=$_POST['ftdate'];
        $sql="INSERT INTO fundtransfer(AcNum,toAcNum,ammount,ftdate) VALUES(?,?,?,?)";
        $stmt=mysqli_prepare($con,$sql);
        
        mysqli_stmt_bind_param($stmt,"ddds",$AcNum,$toAcNum,$ammount,$date);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($con);
?>
    </body>
</html>
