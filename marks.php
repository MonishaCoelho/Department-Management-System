<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        $usn=$_POST['usn'];
        $course_code=$_POST['course_code'];
        $see=$_POST['see'];
        $gp=$_POST['gp'];
        $cie=$_POST['cie'];
        
        $sqlInsertIntoDB = "INSERT INTO `marks`(`usn`, `course_code`, `cie`, `see`, `grade_point`) VALUES ('$usn','$course_code','$cie','$see','$gp')";
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
<title>Marks</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Student Marks</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="m1" type="text" name="usn" maxlength="10" required />
                                    <label for="usn">USN</label>
                                </div>
 				<div class="form-floating mb-3">
                                    <input class="form-control" id="m2" type="text" name="course_code" required />
                                    <label for="course_code">Course Code</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="m3" type="number" name="cie" min="0" max="50" required />
                                    <label for="cie">CIE</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="m4" type="number" name="see" min="0" max="50" required />
                                    <label for="see">SEE</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="m5" type="number" name="gp" step="any"/>
                                    <label for="gp">Grade Point</label>
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