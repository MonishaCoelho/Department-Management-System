<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        if ((!file_exists($_FILES['cert']['tmp_name']) || !is_uploaded_file($_FILES['cert']['tmp_name']))) {
            Print '<script>alert("Please Select A File!");</script>';
        } else {
            
            $usn=$_POST['usn'];
            $subject=$_POST['subject'];
            $cname=$_POST['cname'];
            
            $cert = explode('.', $_FILES['cert']['name']);
            $cert_ext = end($cert);
            
            move_uploaded_file($_FILES['cert']['tmp_name'],"mooc/certificates/".$usn."_".$cname.".".$cert_ext);
            
            $sqlInsertIntoDB = "INSERT INTO `mooc_course`(`USN`, `subject`, `course_name`) VALUES ('$usn','$subject','$course_name')";
            if (mysqli_query($conn, $sqlInsertIntoDB)) {
                Print '<script>alert("Details uploaded successfully.");</script>';
                Print '<script>window.location.assign("home.php");</script>';
            } else {
                echo "<br />Failed to upload.<br />";
            }
        }
        
    }
    else {
    }
    //Close the connection
    if (mysqli_close($conn)) {
        //echo "<br />Connection Closed.";
    }
    ?>



<head>
<title>MOOC</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>

        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Add MOOC Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="mo1" type="text" name="usn" required/>
                                    <label for="usn">USN</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="mo2" type="text" name="subject"/>
                                    <label for="subject">Subject</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="mo3" name="cname" type="text" required/>
                                    <label for="cname">Course Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="file" name="cert" required/>
                                    <label for="cert">Certificate</label>
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
