<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel-Nexus Bank </title>
  <link rel="icon" type="image/x-icon" href="logo.ico"> 
  <style>
    table {
      border-collapse: collapse; /* Ensures borders around all cells */
      border: 1px solid black; /* Adds a 1px black border to the table */
    }
    th, td {
      border: 1px solid black; /* Adds a 1px black border to each cell */
      padding: 5px; /* Adds padding for better readability */
    }
  </style>
</head>
<body style="background-color:rgb(176, 230, 181);">


<?php
  $con = mysqli_connect("localhost", "root", "", "project");
  $sql = "SELECT * FROM fundtransfer";
  $result = mysqli_query($con, $sql);

  echo "<table>";
  // Get field names (assuming the first row contains field names)
  $fields = mysqli_fetch_fields($result);

  // Display table header with field names
  echo "<tr>";
  foreach ($fields as $field) {
    echo "<th>" . $field->name . "</th>";
  }
  echo "</tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $col) {
      echo "<td>" . $col . "</td>";
    }
    echo "</tr>";
  }

  echo "</table>";
  mysqli_close($con);
?>
<br><br><a href="adminpanel.php"><button>Back</button></a><br><br>
</body>
</html>
