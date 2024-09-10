<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
            $course_code=$_POST['course_code'];
            $course_title=$_POST['course_title'];
            $faculty_id=$_POST['faculty_id'];
            $credits=$_POST['credits'];
            $hours=$_POST['hours'];
            $sem=$_POST['sem'];
        
            $sqlInsertIntoDB = "INSERT INTO `course`(`course_code`, `title`, `fid`, `credits`, `hours`, `sem`) VALUES ('$course_code','$course_title','$faculty_id','$credits','$hours','$sem')";
        
        if (mysqli_query($conn, $sqlInsertIntoDB)) {
            Print '<script>alert("Details uploaded successfully.");</script>';
            Print '<script>window.location.assign("home.php");</script>';
        }
        else {
            Print '<script>alert("Failed to upload.");</script>';
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
<title>Course</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Course Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c1" type="text" name="course_code" required />
                                    <label for="course_code">Course Code</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c2" type="text" name="course_title" required/>
                                    <label for="course_title">Course Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c3" name="faculty_id" type="text" required/>
                                    <label for="faculty_id">Faculty ID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c4" name="credits" min="1" max="4" required/>
                                    <label for="credits">Credits</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c5" name="hours" min="1" required/>
                                    <label for="hours">Hours per Week</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="c6" name="sem" min="1" max="8" required/>
                                    <label for="sem">Semester</label>
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