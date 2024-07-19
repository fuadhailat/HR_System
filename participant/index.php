<?php
session_start();
if ($_SESSION["user_type"] !== "participant") {
    header("Location: ../login.php");
    exit();
}

include("../config.php");

// Retrieve participant information
$participantId = $_SESSION["email"];
$query = "SELECT * FROM Conference_participant WHERE Pemail = '$participantId'";

$result = mysqli_query($conn, $query); //------------------------->
$participant = mysqli_fetch_assoc($result); // ------------------->


// Update participant information
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bod = $_POST["bod"];
    $project_name = $_POST["project_name"];
    $sex = $_POST["sex"];
	
	
    // Perform validation
    // ... Implement your validation code here ...

    // Update participant in the database
    $query = "UPDATE Conference_participant 
              SET Pfname = '$fname', Plname = '$lname', Pbod = '$bod', P_project_name = '$project_name', Psex = '$sex'
              WHERE Pemail = '$participantId'";

    if (mysqli_query($conn, $query)) {
        $success = "Participant information updated successfully.";
        // Refresh participant information
        $participant = [
		
            "Pid" => $participantId,
            "Pssn" => $participant["Pssn"],
            "Pfname" => $fname,
            "Plname" => $lname,
            "Pbod" => $bod,
            "P_project_name" => $project_name,
            "Psex" => $sex,
		
        ];
    }
      else {
        $error = "Error updating participant information: " . mysqli_error($conn);
     }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HR Dashboard</title>
</head>
<body background="photo.png">
<h2>
<center>
	<img src="images.png" alt="Italian Trulli">


    <h2>Hello Employee : <?php echo $participant["Pfname"] . " " . $participant["Plname"]; ?></h2>
	
    <?php if (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?> 
	
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <h3>Employee Information :</h3>
	
    <p>Employee ID: <?php echo $participant["Pid"]; ?></p>
    <p>Phone: <?php echo $participant["Pssn"]; ?></p>
	<p>The number of absence days per month: <?php echo $participant["P_project_name"]; ?></p>

    <form method="POST" action="">
        <label>First Name: &nbsp &nbsp </label>
        <input type="text" name="fname" value="<?php echo $participant["Pfname"]; ?>" required><br><br>

        <label>Last Name: &nbsp &nbsp </label>
        <input type="text" name="lname" value="<?php echo $participant["Plname"]; ?>" required><br><br>

        <label>Starting Date: &nbsp &nbsp &nbsp &nbsp &nbsp </label>
		<input type="date" name="bod" value="<?php echo $participant["Pbod"]; ?>" required><br><br>
		
        
       
		
        
        <label>Gendar: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <select name="sex">
            <option value="Male" <?php if ($participant["Psex"] === "Male") echo "selected"; ?>>Male</option>
			
            <option value="Female" <?php if ($participant["Psex"] === "Female") echo "selected"; ?>>Female</option>
            <option value="Other" <?php if ($participant["Psex"] === "Other") echo "selected"; ?>>Other</option>
        </select>
		<br></br>
		
		
				                               <hr style="width:100%;text-align:left;margin-left:0">

		
		
        <input type="submit" value="Update Information">
    </form>
<br>
				                               <hr style="width:100%;text-align:left;margin-left:0">

   <table >
  <tr>
    <th><h2> <a style="text-decoration:none" href="../logout.php">Logout</a></h2></th>
   
  </tr>
  </table>
	</center>
	</h2>
</body>
</html>
