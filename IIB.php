
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
    ?> 
      <div class="container">
        <h3>Insert Initial Balance</h3>
        <form action="DepBalStoD.php" method="POST">
        <div>
            <label for="AcNum">Account Number: </label><br>
            <input type="text" name="AcNum"  placeholder="Ender Your Account Number" required><br>
        </div>
        <div>
            <label for="ammount">Ammount: </label><br>
            <input type="text" name="ammount"  placeholder="Ender The Ammount" required><br>
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
        <br><a href="adminpanel.php"><button>Back</button><br><br><br>
        <div></div>
</div>
    </body>
</html>