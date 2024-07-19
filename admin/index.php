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
    $query = "SELECT * FROM Conference_participant";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2><table>
                <tr>
                    <th>id</th>
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    
                   
					<th>Phone</th>
                    <th>Gender</th>
					<th>Email</th>
					<th>Password</th>
                </tr></h2>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo " <tr>
                    <td>".$row['Pid']."</td>
                   
                    <td>".$row['Pfname']."</td>
                    <td>".$row['Plname']."</td>
                    
                  
					 <td>".$row['Pssn']."</td>
                    <td>".$row['Psex']."</td>
					<td>".$row['Pemail']."</td>
					<td>".$row['Ppassword']."</td>

                </tr>";
        }

        echo "</table>";
    } else {
        echo "No participants found.";
    }
}

function displayParticipant() {
    global $conn;
    $query = "SELECT * FROM Conference_participant";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2><table>
                <tr>
                    <th>id</th>
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    
                   
					<th>Phone</th>
                    <th>Gender</th>
					<th>Email</th>
					<th>Password</th>
                </tr></h2>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo " <tr>
                    <td>".$row['Pid']."</td>
                   
                    <td>".$row['Pfname']."</td>
                    <td>".$row['Plname']."</td>
                    
                  
					 <td>".$row['Pssn']."</td>
                    <td>".$row['Psex']."</td>
					<td>".$row['Pemail']."</td>
					<td>".$row['Ppassword']."</td>

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
    <style>
table, th, td {
  border: 1px solid pink;
  border-collapse: 0;
        border-radius: 10px;

}
.white-text {
      color: black;
    }
	table {
      border: 2px solid black; /* Change the color and style as desired */
	  color: pink;
	        border-collapse: 0;
			      border-radius: 10px;


    }
    
    th, td {
      border: 3px solid black; /* Change the color and style as desired */
      padding: 10px;
	  color: black;
    }
	.rectangle {
      width: 10%;
      height: 10vh;
      background-color: white;
      border-radius: 10px;

    }
	
    tr:nth-child(odd) {
      background-color: #e0e0e0;
    }
    
    tr:nth-child(even) {
      background-color: white;
    }
     tr:first-child {
      background-color: black;
    }
	tr:first-child {
      color: black;
    }
	tr:first-child th,
    tr:first-child td {
      color: white;
    }
	
	 hr {
      border: none;
      border-top: 1px solid black;
      margin: 10px 0;
    }
    
 </style>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body background="bg22.jpg" >


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
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Attendancerecord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="category.php">
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="penalties.php">
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Penalties</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="rewards.php">
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Rewards</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="salaries.php">
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Salaries</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="staffevaluation.php">
                        <i class="bx bx-star icon"></i>
                            <span class="text nav-text">Staffevaluation</span>
                        </a>
                    </li>
					
					
					
					
					<li>
					<center>
                    <span class="text nav-text"><a class="rectangle" style="text-decoration:none;color:blue"  href="../logout.php"> &nbsp Logout &nbsp </a></span>							                 
                     </center>
                     </li>
                        

                </ul>
            </div>

            
        </div>

    </nav>

   
    <script src="script.js"></script>

<center>
<br>
    <p style="font-size: 25px;" >Welcome Admin !</p> 
	<br>

	
	
		  

	
		
                           

	
	<hr style="width:50%;text-align:left;margin-left:5">
	<br>
<h2>
   <span class="rectangle"> &nbsp <i class='bx bx-user' ></i><a style="text-decoration:none ;color:blue ;font-size: 15px;" href="add_participant.php">&nbsp Add Employees &nbsp </a></span> &nbsp &nbsp &nbsp &nbsp
   <span class="rectangle"> &nbsp <i class='bx bx-user' ></i><a style="text-decoration:none;color:blue ;font-size: 15px; " href="delete_participant.php"> &nbsp Delete Employees &nbsp </a></span> &nbsp &nbsp &nbsp &nbsp 
   <span class="rectangle"> &nbsp <i class='bx bx-user' ></i><a style="text-decoration:none;color:blue ;font-size: 15px; " href="update_participant.php"> &nbsp Update Employees &nbsp </a></span> &nbsp &nbsp &nbsp &nbsp 
   <span class="rectangle"> &nbsp <i class='bx bx-user' ></i><a style="text-decoration:none;color:blue ;font-size: 15px; " href="search_participant.php">&nbsp Search Employees &nbsp </a></span> &nbsp &nbsp &nbsp &nbsp 
   </h2>
   <br>

   
   <span style="font-size: 10px;">
<?php  displayParticipants(); ?>
	<?php>
   </span>
 
  </form>   
	</center>
	<center>
	
	</center>
	
</body>
</html>
