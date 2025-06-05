<!DOCTYPE html>
<html>
  <head>
    <title>User Panel-Nexus Bank </title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
  </head>
  <body style="background-color:rgb(202, 230, 176);">

    <?php
      session_start();

      $con = mysqli_connect("localhost", "root", "", "project"); // Connect to database

      if (isset($_POST['submit'])) {
        $AcNum = $_POST['AcNum'];
        $toAcNum = $_POST['toAcNum'];
        $transferAmount = $_POST['ammount'];
        $Password = $_POST['pass'];
        $date = $_POST['ftdate'];

        //check password
        $currentpassword = $_SESSION['pass'];

        if ($currentpassword == $Password) {

          // Check if enough balance exists
          $sql_check_balance = "SELECT ammount FROM depositedbal WHERE AcNum = ?";
          $stmt_check_balance = mysqli_prepare($con, $sql_check_balance);
          mysqli_stmt_bind_param($stmt_check_balance, "d", $AcNum);
          mysqli_stmt_execute($stmt_check_balance);
          $result_check_balance = mysqli_stmt_get_result($stmt_check_balance);

          // Check if data is retrieved successfully
          if ($row = mysqli_fetch_assoc($result_check_balance)) {
            $currentAmount = (int) $row['ammount'];

            if ($currentAmount >= $transferAmount) {
              // Update depositedbal table (subtract transfer amount)
              $sql_update_deposited = "UPDATE depositedbal SET ammount = ammount - ? WHERE AcNum = ?";
              $stmt_update_deposited = mysqli_prepare($con, $sql_update_deposited);

              // Check for successful statement preparation
              if ($stmt_update_deposited) {
                mysqli_stmt_bind_param($stmt_update_deposited, "dd", $transferAmount, $AcNum);
                mysqli_stmt_execute($stmt_update_deposited);
              } else {
                echo "Error preparing statement for depositedbal update: " . mysqli_error($con);
              }

              // Insert data into fundtransfer table (assuming successful update)
              if (mysqli_stmt_affected_rows($stmt_update_deposited) > 0) { // Check if update was successful
                $sql = "INSERT INTO fundtransfer(AcNum, toAcNum, ammount, ftdate) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $sql);
                mysqli_stmt_bind_param($stmt, "ddds", $AcNum, $toAcNum, $transferAmount, $date);
                mysqli_stmt_execute($stmt);

                echo "Transfer of TK " . $transferAmount . " from Account Number " . $AcNum . " to " . $toAcNum . " Successful.";
              } else {
                echo "Error updating depositedbal table. Transfer failed."; // Handle update failure
              }
            } else {
              echo "Insufficient funds. You have TK " . $currentAmount . ". transfer amount cannot exceed your current balance.";
            }
          } else {
            // Handle case where no data is retrieved from the query
            echo "Insufficient funds.";
          }

          mysqli_stmt_close($stmt_check_balance);
        } else {
          echo "Wrong Password";
        }

        // Close statements only if successfully prepared
        if (isset($stmt_update_deposited)) {
          mysqli_stmt_close($stmt_update_deposited);
        }
        if (isset($stmt)) {
          mysqli_stmt_close($stmt);
        }
        mysqli_close($con);
        echo '<br><br><a href="userpanal.php"><button>Back</button></a><br><br>';
      }
    ?>
  </body>
</html>
