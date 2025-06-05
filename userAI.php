<!DOCTYPE html>
<html>
    <head>
    <title>User panel-Nexus Bank</title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
</head>
<body style="background-color:powderblue;">
<?php
session_start();
?>
<table border="1">

    <tr>
    <?php
        echo"<td>"."<p> Account Number: ".$_SESSION['AcNum']."</p>"."<p> First Name: ". $_SESSION['Fname'] ."</p>"."<p> Last Name: ".$_SESSION['Lname']."</p>"."<p> Email: ".$_SESSION['email']."</p>"."<p> Account Type: ". $_SESSION['Actype']."</p>". "</td>";
    ?> 

   

           
    </tr>

</table>
<br><a href="userpanal.php"><button>Back</button><br><br><br>
</body>
</html>


