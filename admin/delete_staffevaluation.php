<?php
session_start();
if ($_SESSION["user_type"] !== "admin") {
    header("Location: ../login.php");
    exit();
}

include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FullName = $_POST["FullName"];

    // Delete participant from the database
    $query = "DELETE FROM staffevaluation WHERE FullName = '$FullName'";

    if (mysqli_query($conn, $query)) {
        $success = "Employees deleted successfully.";
    } else {
        $error = "Error deleting Employees: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Employees</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title>
</head>
<body background="photo.png">

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
    <h1>Delete Employees</h1>

		                               <hr style="width:100%;text-align:left;margin-left:0">
<br></br>
    <?php if (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label>Full Name:  &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="FullName" required><br></br>
		<br></br>
        <input type="submit" value="Delete Employees">
		<br></br>
				                               <hr style="width:100%;text-align:left;margin-left:0">

		<br></br>
    </form>
    <a href="staffevaluation.php">Go Back</a>
	</center>
</body>
</html>
