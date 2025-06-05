
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
        <link rel="stylesheet" href="loginform.css">
    </head>
    <body style="background-color:rgb(202, 230, 176);">

    <?php
    session_start();
    ?> <div class="container">
        <h3>Delete User Account</h3>
    <?php echo"<td> ". $_SESSION['fname']."<p> Please give the information accurately..!!"."</p>"."</td>" ; ?>

        <form action="deleteuserStoD.php" method="POST">
        <div>
            <label for="AcNum">Account Number: </label><br>
            <input type="text" name="AcNum" placeholder="Enter The Account Number" required><br>
        </div>
        
        <div>
            <br><label for="submit"></label>
            <input type="submit" name="submit" value="Delete">

        </div>
        </form>
        <br><a href="adminpanel.php"><button>Back</button><br><br><br>
        <div></div>
</div>
    </body>
</html>