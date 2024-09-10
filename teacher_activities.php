<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        $emp_id=$_POST['emp_id'];
        $title=$_POST['title'];
        $type=$_POST['type'];
        $started=$_POST['started'];
        $ended=$_POST['ended'];

	if (file_exists($_FILES['cert']['tmp_name']) || is_uploaded_file($_FILES['cert']['tmp_name']))
	{
	    $cert = explode('.', $_FILES['cert']['name']);
            $cert_ext = end($cert);
	    move_uploaded_file($_FILES['cert']['tmp_name'],"teacher_activities/certificate/".$emp_id."_".$title.".".$cert_ext);
	}
    
        $sqlInsertIntoDB = "INSERT INTO `teacher_activities`(`fid`, `title`, `type`, `started`, `ended`) VALUES ('$emp_id','$type','$title','$started','$ended')";
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

<head>
<title>Teacher Activities</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Teacher Activity Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="ta1" type="text" name="emp_id" required />
                                    <label for="emp_id">Faculty ID</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="ta2" type="text" name="title" required />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="ta3" type="text" name="type"/>
                                    <label for="type">Type</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="ta4" type="date" name="started"/>
                                    <label for="started">Start Date</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="ta5" type="date" name="ended"/>
                                    <label for="started">End Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="file" name="cert"/>
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