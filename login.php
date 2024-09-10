<?php
	require_once 'dbCon.php';
	//require_once 'header.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>

<body>
    <div class="main-wrapper">
        <div class="login-wrapper">
           <img class="logo" src="assets/profile_.png" alt="Logo">
           <h1 class="title">Login Here</h1>
     
           <form action="login.php" method="post" class="form-signin" role="form">
	
	   <?php
               session_start();
   	       if($_SERVER["REQUEST_METHOD"] == "POST")
               {
                   $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
                   $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
                   $sql = "SELECT * FROM login WHERE username = '$user_name' and password = '$password'";
                   $result = mysqli_query($conn,$sql);
      
                   if(mysqli_num_rows($result)==1) {
                       
                       $_SESSION['login_user'] = $user_name;
                       $row = mysqli_fetch_row($result);
		       $user_type=$row[2];
                       header("location: home.php");
                   }
                   else {
                       echo "<div class='alert alert-danger'>";
                       echo "<p style=\"color: #6120AE;text-align: center;\">Username or Password is invalid.</p>";   
                       echo "</div>";
      	           }
   	       }
	   ?>

           <div class="form-group">
               <input type="text" name="user_name" required>
               <i class="fa fa-user"></i>
               <label for="user_name">Enter Username</label>
           </div>
           <div class="form-group">
               <input type="password" name="password" required>
               <i class="fa fa-lock"></i>
               <label for="password">Enter Password</label>
           </div>
           <input class="btn" type="submit" value="login">
           </form>
       </div>
   </div>

</body>
</html>