<!DOCTYPE html>
<html>
    <head>
        <title>User Panel- Nuxes Bank</title>
        <link rel="icon" type="image/x-icon" href="logo.ico"> 
    </head>
    <body style="background-color:powderblue;">

    <?php

$con = mysqli_connect("localhost", "root", "", "project"); // Connect to database

if (isset($_POST['submit'])) {
  $AcNum = $_POST['AcNum'];
  $updateAmount = $_POST['ammount'];
  $date = $_POST['dpdate'];

  // Retrieve current amount for the account
  $sql_get_amount = "SELECT ammount FROM depositedbal WHERE AcNum = ?";
  $stmt_get_amount = mysqli_prepare($con, $sql_get_amount);
  mysqli_stmt_bind_param($stmt_get_amount, "d", $AcNum);
  mysqli_stmt_execute($stmt_get_amount);
  $result_get_amount = mysqli_stmt_get_result($stmt_get_amount);
  
 if($row = mysqli_fetch_assoc($result_get_amount))
 {
  $currentAmount = (int) $row['ammount']; // Convert retrieved amount to integer

  // Update query with prepared statement
  $sql = "UPDATE depositedbal SET ammount = ?, dpdate = ? WHERE AcNum = ?";
  $stmt = mysqli_prepare($con, $sql);
  $newAmount = $currentAmount + $updateAmount; // Calculate new amount
  mysqli_stmt_bind_param($stmt, "dss", $newAmount, $date, $AcNum);
  $result = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  if ($result) {
    echo "Amount for Account Number " . $AcNum . " successfully updated to tk " . $newAmount . ".";
  } else {
    echo "Error updating amount: " . mysqli_error($con);
  }

 }
 else {
  echo "Error....!!!~For a new account at first you have to go to the back to deposit initial amount.";
}
  

  mysqli_stmt_close($stmt_get_amount);
  
}

mysqli_close($con); // Close connection

?>
<br><br><a href="userpanal.php"><button>Back</button></a><br><br>


    </body>
</html>


