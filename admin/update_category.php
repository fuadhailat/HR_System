<?php
session_start();
if ($_SESSION["user_type"] !== "admin") {
    header("Location: ../login.php");
    exit();
}

include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FullName = $_POST["FullName"];
    $JobTitle = $_POST["JobTitle"];
    $EmployeeGrade = $_POST["EmployeeGrade"];
    $Occupation = $_POST["Occupation"];
	$Number_of_months_of_service_in_the_company = $_POST["Number_of_months_of_service_in_the_company"];
	$Number_of_months_of_experience = $_POST["Number_of_months_of_experience"];
    

    // Perform validation
    // ... Implement your validation code here ...

    // Update participant in the database
    $query = "UPDATE category 
              SET FullName = '$FullName', JobTitle = '$JobTitle', EmployeeGrade = '$EmployeeGrade', Occupation = '$Occupation' 
			  ,Number_of_months_of_service_in_the_company='$Number_of_months_of_service_in_the_company',Number_of_months_of_experience='$Number_of_months_of_experience'
              WHERE FullName = '$FullName'";

    if (mysqli_query($conn, $query)) {
        $success = "category updated successfully.";
    } else {
        $error = "Error updating category: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update category</title>
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

    <h2>Update category</h2>
	
			                               <hr style="width:100%;text-align:left;margin-left:0">
<br></br>
    <?php if (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label>Full Name: &nbsp    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="FullName" required><br><br>
        <label>Job Title:  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="JobTitle" required><br><br>
        <label>Employee Grade: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="EmployeeGrade" required><br><br>
        <label>Occupation: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="Occupation" required><br><br>
        <label>Number of months of service in the company: &nbsp    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="Number_of_months_of_service_in_the_company" required><br><br>
		<label>Number of months of experience: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="Number_of_months_of_experience" required><br><br>
           
        </select><br></br>
		<br>
        <input type="submit" value="Update category">
    </form>
	<br></br>
			                               <hr style="width:100%;text-align:left;margin-left:0">

    <a href="category.php">Go Back</a>
	</center>
</body>
</html>
