
<!DOCTYPE html>
<html>
    <head>
        <title>User Panel-Nexus Bank </title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
        <link rel="stylesheet" href="loginform.css">
    </head>
    <body style="background-color:rgb(202, 230, 176);">

    <?php
    session_start();
    ?> 
    <div class="container">
    <h3>Deposit Balance</h3>
    <?php echo"<td> ". $_SESSION['Fname']."<p> Please give the information accurately..!!"."</p>"."</td>" ; ?>
       
    
        <form action="DepBalStoDdemo.php" method="POST">
        <div>
            <label for="AcNum">Account Number: </label><br>
            <input type="text" name="AcNum" value="<?= htmlspecialchars($_SESSION['AcNum']) ?>"required><br>
        </div>
        <div>
            <label for="ammount">Ammount: </label><br>
            <input type="text" name="ammount" placeholder="Enter The Ammount" required><br>
        </div>
        <div>
            <label for="date">Date: </label><br>
            <input type="date" name="dpdate" required><br><br>
        </div>
        <div>
            <label for="submit"></label>
            <input type="submit" name="submit" value="Deposit">
            <input type="reset" name="submit" value="Clear"><br>

        </div>
        </form>
        <br><a href="userpanal.php"><button>Back</button><br><br><br>
        <div></div>
</div>
    </body>
</html>