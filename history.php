<!DOCTYPE html>
<?php 
  session_start();
   
  ?>
<html>
<head>
        <title>User Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
    <body style="background-color:rgb(176, 230, 181);">
    <?php
    echo"<td>"." Hello..!"." ". $_SESSION['Fname']."</td>" ;
    ?>
        <ul type="disk">
            <li><a href="Dephis.php"><button>Deposit History</button></a></li><br>
            <li><a href="Trnhis.php"><button>Transfer History</button></a></li>
        </ul>
        <br><a href="userpanal.php"><button>Back</button><br><br><br>
    </body>
</html>