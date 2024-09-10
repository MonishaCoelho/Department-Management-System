<?php 
   include('dbCon.php');
   require_once 'admin_session.php';

   if (isset($_POST['submit']))
   {
       $user_name = $_POST['user_name'];
       $password = $_POST['password'];
       if($user_name != NULL && $password != NULL) 
       {
           $sql = "UPDATE `login` SET `password`='$password' WHERE `username`='$user_name'";
           $result = mysqli_query($conn,$sql);
           if($result) 
           {
               echo "<div class='alert alert-success'>";
               echo "<strong>Password changed successfully.</strong>";
               echo "</div>";
               header("Refresh: 1;URL = home.php");
           }
           else {
               echo "<div class='alert alert-danger'>";
               echo "<strong>Error!</strong> in update.Please try again.";
               echo "</div>";
           }
       }
   }
?>

<head>
    <title>Change Password</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5 px-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-5 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter new password</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-sm-8 col-xl-5">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    Enter username:
                                    <input class="form-control" type="text" name="user_name" required />
                                </div>
 				<div class="form-floating mb-3">
                                    Enter password:
                                    <input class="form-control" type="text" name="password" required />
                                </div>
                                <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit" name="submit" value="Upload">Submit</button></div>
                            </form>
                            <br>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="home.php">Go Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>