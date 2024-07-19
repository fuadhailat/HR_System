<?php
session_start();
if ($_SESSION["user_type"] !== "admin") {
    header("Location: ../login.php");
    exit();
}

include("../config.php");

// Function to display all participants
function displayParticipants() {
    global $conn;
    $query = "SELECT * FROM attendancerecord";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2><table>
                <tr>
                    <th>First Name</th>
                    <th>Date</th>
                    <th>Time Attendance</th>
                    <th>Time To Leave</th>
                    <th>Absence</th>
                    
                </tr></h2>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo " <tr>
                    <td>".$row['FirstName']."</td>
                    <td>".$row['Date']."</td>
                    <td>".$row['TimeAttendance']."</td>
                    <td>".$row['TimeToLeave']."</td>
                    <td>".$row['Absence']."</td>
                    

                </tr>";
        }

        echo "</table>";
    } else {
        echo "No participants found.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>HR System Admin Home</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
 </style>
</head>
<body background="photo.png" >

<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Medaan Agency</span>
                    <span class="profession">HR System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="attendancerecord.php">
						<i class='bx bx-wallet icon' ></i>

                            <span class="text nav-text">Attendancerecord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="category.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="penalties.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Penalties</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="rewards.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Rewards</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="salaries.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Salaries</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="staffevaluation.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Staffevaluation</span>
                        </a>
                    </li>

                </ul>
            </div>

            
        </div>

    </nav>

   
    <script src="script.js"></script>

<center>
<br></br>
    <h2 style="color:black;">Welcome Admin !</h2>
<h2>
	<br>
	<hr style="width:100%;text-align:left;margin-left:0">
	
   <a style="text-decoration:none" href="add_attendancerecord.php">Add Employees</a> &nbsp &nbsp
   <a style="text-decoration:none" href="delete_attendancerecord.php">Delete Employees</a> &nbsp &nbsp
   <a style="text-decoration:none" href="update_attendancerecord.php">Update Employees</a> &nbsp &nbsp
   <a style="text-decoration:none" href="search_attendancerecord.php">Search Employees</a> &nbsp &nbsp
    <hr style="width:100%;text-align:left;margin-left:0">

  </h2>

   <h3>
    <h2 style="color:black;">Attendance Record</h2>
	
    <?php displayParticipants(); ?>
</h3>
<br></br>
	<table >
  <tr>
    <th><h2> <a  href="../logout.php">Logout</a></h2></th>
   
  </tr>
  </table>

    <a href="index.php">Go Back</a>

   
	</center>
</body>
</html>