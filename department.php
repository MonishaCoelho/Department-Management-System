<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $dep_id=$_POST['dep_id'];
        $office=$_POST['office'];
        $hod=$_POST['hod'];
        
        $sqlInsertIntoDB = "INSERT INTO `department`(`name`, `id`, `office`, `hod_id`) VALUES ('$name','$dep_id','$office,'$hod')";
        if (mysqli_query($conn, $sqlInsertIntoDB)) {
            Print '<script>alert("Details uploaded successfully.");</script>';
            Print '<script>window.location.assign("home.php");</script>';
        } else {
            echo "<br />Failed to upload.<br />";
        }
    } else {
        
    }
    
    //Close the connection
    if (mysqli_close($conn)) {
        //echo "<br />Connection Closed.";
    }
    ?>

<html>
<head>
<title>Department</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Department Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="d1" type="text" name="name" required />
                                    <label for="name">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="d2" type="text" name="dep_id" required/>
                                    <label for="dep_id">Department ID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="d3" type="text" name="office" required/>
                                    <label for="office">Office(location)</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c4" type="text" name="hod" required/>
                                    <label for="hod">H.O.D ID</label>
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error!</div>
                                </div>
                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit" name="submit"
                                        value="Upload">Submit</button></div>
                            </form>
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