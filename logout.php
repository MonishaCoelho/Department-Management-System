<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Logging out</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<?php
   session_start();
   //require_once 'header.php';
   
   if(session_destroy()) {
   			echo "<div class='alert alert-success'>";
	        echo "<strong>Successfully logged out. Redirecting to login page.</strong>";
	        echo "</div>";
      header("Refresh: 1;URL = index.php");
   }
?>