<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        $ssid=$_POST['ssid'];
        $sem=$_POST['sem'];
        $sec=$_POST['sec'];
        $batch=$_POST['batch'];
        
        $sqlInsertIntoDB = "INSERT INTO `section`(`ssid`, `sem`, `section`, `batch`) VALUES ('$ssid','$sem','$sec','$batch')";
        if (mysqli_query($conn, $sqlInsertIntoDB)) {
            Print '<script>alert("Details uploaded successfully.");</script>';
            Print '<script>window.location.assign("home.php");</script>';
        } else {
            echo "<br />Failed to upload.<br />";
        }
    } else {
        # code…
    }
    
    //Close the connection
    if (mysqli_close($conn)) {
        //echo "<br />Connection Closed.";
    }
    ?>


<head>
<title>Section</title>
</head>

<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Add Section Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="se1" type="text" name="ssid" required />
                                    <label for="ssid">SSID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="se2" type="number" name="sem" min="1" max="8" required/>
                                    <label for="sem">Semester</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="se3" type="text" name="sec" maxlength="1"/>
                                    <label for="sec">Section</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="se4" type="number" name="batch" required/>
                                    <label for="batch">Batch</label>
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