<?php
   require_once 'dbCon.php';
	
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from login where username = '$user_check'");
   
   $row = mysqli_fetch_row($ses_sql);
   
   $login_session = $row[0];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }
?>