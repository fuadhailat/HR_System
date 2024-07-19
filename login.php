
<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate email and password
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }  else {
        // Perform login for admin
        if ($email == "admin@gmail.com" && $password == "admin123") {
            $_SESSION["user_type"] = "admin";
            header("Location: admin/index.php");
            exit();
        }

        // Perform login for participant
        $query = "SELECT * FROM conference_participant WHERE Pemail = '$email' AND Ppassword = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION["user_type"] = "participant";
            $_SESSION["email"] = $email;
            header("Location: participant/index.php");
            exit();
        }

        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	  <style>
    .rectangle {
      width: 35%;
      height: 95vh;
      background-color: white;
    }
  </style>
  <style>
.changed-font {
  font-family: Arial, sans-serif;
}
</style>
<style>
    body {
      background-color: #f0f0f0;
    }
  </style>
  <style>
    body {
      background-image: url("bg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	
    input[type="text"], input[type="password"] {
      border-radius: 10px;
      padding: 5px;
    }
 
  </style>
</head>
<body  >

<center>
  <div class="rectangle">
<br></br>

    <h2 style="font-family: Arial, sans-serif;" >Login Page</h2>
  <img src="logo2.png" alt="My Photo">


    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
	
	<h4>
        <label style="font-family: Arial, sans-serif;">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
		<br>
        <input type="text" name="email"  style="width: 300px; height : 40px;" placeholder="Enter the Email" required><br><br>
		
        <label style="font-family: Arial, sans-serif;">Password  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
		<br>
        <input type="password" style="width: 300px; height : 40px;" name="password" placeholder="Enter the password" required><br><br>
		<table >
		<tr>
		 <th> &nbsp </th>
		 </tr>
		 <tr>
		 <br>
		 </h4>
<form action="process-form.php" method="post">
  <!-- form fields go here -->
  <button style="background-color:pink; color: white; width: 200px; height : 40px;">Login</button>

		</tr>
		</table>
		
    </form>
	</div>
	</center>
</body>
</html>
