<!DOCTYPE html>
<html>
<head>
  <title>Admin panel-Nexus Bank </title>
  <link rel="icon" type="image/x-icon" href="logo.ico">
  <style>
   
    body {
      background-color: #f5f5f5; /* Light gray background */
      font-family: sans-serif;
      margin: 0;
      padding: 10px;
      
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 75vh;
    
    }
   

    .admin-panel {
      width: 80%;
      margin: 0 auto;
      background-color: white;
      border: none; /* Removes border for a cleaner look */
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      padding: 20px;
    }

    .header {
      display: flex; /* Makes the header a horizontal layout */
      justify-content: space-between; /* Distributes elements horizontally */
      align-items: center; /* Aligns elements vertically */
      padding-bottom: 10px; /* Adds some space below the header */
      border-bottom: 1px solid #ddd; /* Light border to separate header */
    }

    h2 {
      font-size: 24px;
      margin: 0;
      color: #333; /* Darker text color for headings */
    }

    h3 {
      font-size: 18px;
      margin-top: 10px; /* Adds some space above subheadings */
      margin-bottom: 10px;
      color: #666; /* Less prominent text color for subheadings */
      text-align: center; /* Aligns the content to the right */
    }

    nav {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    nav li {
      display: inline-block;
      margin-right: 20px;
      background-color: #284177;
    }

    nav li a {
      text-decoration: none;
      color: #333; /* Darker text color for menu items */
      padding: 10px 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: #fafafa; /* Very light background color */
      transition: background-color 0.2s ease-in-out; /* Smooth transition on hover */
    }

    nav li a:hover {
      background-color: white; /* Slightly darker background on hover */
      color: #333; /* Text color remains the same */
      background-color: #87ceeb;
    }

    .logout-button {
      float: right; /* Positions the logout button to the right */
      margin-top: 10px; /* Adds some margin from the top */
      text-decoration: none;
      color: white;
      background-color: #3b5998; /* Dark blue background for logout button */
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      transition: background-color 0.2s ease-in-out; /* Smooth transition on hover */
    }

    .logout-button:hover {
      background-color: #284177; /* Even darker blue on hover */
    }
  </style>
</head>
<body style="background-color:rgb(176, 230, 181);">
  <?php
    session_start();
  ?>
  <div class="admin-panel">
    <div class="header">
    <h2>Welcome, Mr/Mis<?php echo"<td> ". $_SESSION['Fname']."</td>" ; ?></h2>
    <a href="adminlogout.php" class="logout-button">Logout</a>
    </div>
    <br><h3><u>Dash Board</u></h3>
    <br><br><br><nav>
    <li><a href="userAI.php">Account Information</a></li>
            <li><a href="Balance.php">Balance</a></li>
            <li><a href="DepBal.php">Deposit Balance</a></li>
            <li><a href="fundtransfer.php">Fund Transfer</a></li>
</nav>
</body>
</html>