<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';

    $update=false;
    $dep_id="";
    $fid="";
    $title="";
    $fname="";
    $mname="";
    $lname="";
    $des="";
    $qualifications="";
    $phone="";
    $email="";
    $address="";

    if (isset($_GET['edit']))
    {
	$id=$_GET['edit'];
	$update=true;
	$record=mysqli_query($conn, "SELECT * FROM `faculty` WHERE `fid`= '".$id."'");

	if(mysqli_num_rows($record)==1)
	{
	    $rec=mysqli_fetch_array($record);
	    $dep_id=$rec['dep_id'];
            $fid=$rec['fid'];
            $title=$rec['title'];
            $fname=$rec['fname'];
            $mname=$rec['m_init'];
            $lname=$rec['lname'];
            $des=$rec['designation'];
            $qualifications=$rec['qualifications'];
            $phone=$rec['phone'];
            $email=$rec['email'];
            $address=$rec['address'];
	}
    }

    if (isset($_POST['submit'])) 
    {
        $dep_id=$_POST['dep_id'];
        $emp_id=$_POST['emp_id'];
	$title=$_POST['title'];
        $fname=$_POST['fname'];
	$mname=$_POST['mname'];
        $lname=$_POST['lname'];
	$designation=$_POST['designation'];
        $qualifications=$_POST['qualifications'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        
        $sqlInsertIntoDB = "INSERT INTO `faculty`(`dep_id`, `fid`, `title`, `fname`, `m_init`, `lname`, `designation`, `qualifications`, `phone`, `email`, `address`) VALUES ('$dep_id','$emp_id','$title','$fname','$mname','$lname','$designation','$qualifications','$phone','$email','$address')";
        
        if (mysqli_query($conn, $sqlInsertIntoDB)) 
	{
            Print '<script>alert("Details uploaded successfully.");</script>';
            Print '<script>window.location.assign("home.php");</script>';
        } 
	else
	{
            echo "<br />Failed to upload.<br />";
        }  
    }

    if (isset($_POST['update'])) 
    {
        $dep_id=$_POST['dep_id'];
        $emp_id=$_POST['emp_id'];
	$title=$_POST['title'];
        $fname=$_POST['fname'];
	$mname=$_POST['mname'];
        $lname=$_POST['lname'];
	$designation=$_POST['designation'];
        $qualifications=$_POST['qualifications'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        
        $sqlInsertIntoDB = "UPDATE `faculty` SET `dep_id`='$dep_id', `fid`='$emp_id', `title`='$title', `fname`='$fname', `m_init`='$mname', `lname`='$lname', `designation`='$designation', `qualifications`='$qualifications', `phone`='$phone', `email`='$email', `address`='$address' WHERE `fid`='$emp_id'";
        
	if (mysqli_query($conn, $sqlInsertIntoDB))
	{
            Print '<script>alert("Details updated successfully.");</script>';
            Print '<script>window.location.assign("display_student.php");</script>';
        } 
	else
	{
            echo "<br />Failed to update.<br />";
        }
    }

    //Close the connection
    if (mysqli_close($conn)) {
        //echo "<br />Connection Closed.";
    }
?>

<head>
<title>Faculty</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Faculty Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s1" type="text" name="dep_id" value="<?php echo $dep_id; ?>" required />
                                    <label for="dep_id">Department ID</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="s2" type="text" name="emp_id" value="<?php echo $fid; ?>" required />
                                    <label for="emp_id">Faculty ID</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="s3" type="text" name="title" value="<?php echo $title; ?>" required />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s4" type="text" name="fname" value="<?php echo $fname; ?>" required/>
                                    <label for="fname">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s5" type="text" name="mname" value="<?php echo $mname; ?>" />
                                    <label for="mname">Middle Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s6" type="text" name="lname" value="<?php echo $lname; ?>" />
                                    <label for="lname">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s7" type="date" name="designation" value="<?php echo $des; ?>" required/>
                                    <label for="designation">Designation</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s8" type="text" name="qualifications" value="<?php echo $qualifications; ?>" />
                                    <label for="qualifications">Qualifications</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s9" type="text" name="phone" value="<?php echo $phone; ?>" />
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s10" type="text" name="email" value="<?php echo $email; ?>" />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s11" type="text" name="address" value="<?php echo $address; ?>" />
                                    <label for="address">Address</label>
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error!</div>
                                </div>
                                <!-- Submit Button-->
                                <div class="d-grid">
				  <?php if ($update==true): ?>
				    <button class="btn btn-primary btn-lg" type="submit" name="update">Update</button>
				  <?php else: ?>
				    <button class="btn btn-primary btn-lg" type="submit" name="submit">Submit</button>
				  <?php endif ?></div>
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