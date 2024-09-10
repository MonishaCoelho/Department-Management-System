<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    if (isset($_POST['submit'])) {
        if ((!file_exists($_FILES['report']['tmp_name']) || !is_uploaded_file($_FILES['report']['tmp_name'])) || (!file_exists($_FILES['cert']['tmp_name']) || !is_uploaded_file($_FILES['cert']['tmp_name']))) {
            echo "<br />Please Select A File.";
        } else {
            
            $usn=$_POST['usn'];
            $title=$_POST['title'];
            $company_name=$_POST['company_name'];
            $position=$_POST['position'];
            $advisor_name=$_POST['advisor_name'];
            $stipend=$_POST['stipend'];
            $started=$_POST['started'];
            $ended=$_POST['ended'];
            
            
            $cert = explode('.', $_FILES['cert']['name']);
            $cert_ext = end($cert);
            $rep = explode('.', $_FILES['report']['name']);
            $rep_ext = end($rep);
            
	    $mysql_qry="SELECT count(*) FROM internships where USN='".$usn."'";
	    $result = mysqli_query($conn, $mysql_qry);
	    $row = mysqli_fetch_row($result);
	    $count = intval($row[0]);
	    $count=$count+1;

            move_uploaded_file($_FILES['report']['tmp_name'],"internship/reports/".$usn."_".$count.".".$rep_ext);
            move_uploaded_file($_FILES['cert']['tmp_name'],"internship/certificates/".$usn."_".$count.".".$cert_ext);
            
            $sqlInsertIntoDB = "INSERT INTO `internships`(`USN`, `Title`, `Company Name`, `Position`, `Advisor Name`, `Stipend`, `Started`, `Ended`) VALUES ('$usn','$title','$company_name','$position','$advisor_name','$stipend','$started','$ended')";
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
<title>Internship</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Add Internship Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in1" type="text" name="usn" required />
                                    <!--<div data-sb-feedback="name:required">This field is required.</div>-->
                                    <label for="usn">USN</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in2" type="text" name="title" required/>
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in3" name="company_name" type="text"/>
                                    <label for="company_name">Company Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in4" type="text" name="position"/>
                                    <label for="position">Position</label>
                                </div>
  
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in5" type="text" name="advisor_name" required/>
                                    <label for="advisor_name">Advisor Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in6" type="number" name="stipend" />
                                    <label for="stipend">Stipend</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in7" type="date" name="started" required />
                                    <label for="started">Start Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="in8" type="date" name="ended" required />
                                    <label for="ended">End Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="in9" name="desc"></textarea>
                                    <label for="desc">Description</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="file" name="report" required/>
                                    <label for="report">Report</label>
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