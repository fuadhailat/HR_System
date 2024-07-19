<?php
session_start();
if ($_SESSION["user_type"] !== "admin") {
    header("Location: ../login.php");
    exit();
}

include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];

    // Perform search query
    $query = "SELECT * FROM salaries WHERE FullName LIKE '%$search%' ";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $participants = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $message = "No salaries found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search salaries</title>
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
    <h2>Search salaries</h2>
				                               <hr style="width:100%;text-align:left;margin-left:0">
<br></br>
<h2>
    <form method="POST" action="">
        <label>Search:</label>
        <input type="text" name="search" required>
        <input type="submit" value="Search">
    </form>
    <?php if (isset($participants)) { ?>
        <h3>Search Results: &nbsp &nbsp &nbsp </h3>
        <?php foreach ($participants as $participant) { ?>
            <p><?php echo $participant["FullName"] . " " . $participant["MonthlySalary"] . " " . $participant["DiscountValue"]  . " " . $participant["DiscountType"]; ?></p>
            <!-- Display other participant information as needed -->
        <?php } ?>
    <?php } ?>
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
	</h2>
	<br></br>
				                               <hr style="width:100%;text-align:left;margin-left:0">
<br></br>
    <a href="salaries.php">Go Back</a>
	</center>
</body>
</html>
