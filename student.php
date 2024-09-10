<?php
   
    include('dbCon.php');
    require_once 'admin_session.php';

    $update=false;
    $usn="";
    $f_name="";
    $m_name="";
    $l_name="";
    $dob="";
    $ssid="";
    $phone="";
    $email="";
    $address="";

    if (isset($_GET['edit']))
    {
	$id=$_GET['edit'];
	$update=true;
	$record=mysqli_query($conn, "SELECT * FROM `student` WHERE `usn`= '".$id."'");

	if(mysqli_num_rows($record)==1)
	{
	    $rec=mysqli_fetch_array($record);
	    $usn=$rec['usn'];
            $f_name=$rec['fname'];
            $m_name=$rec['mname'];
            $l_name=$rec['lname'];
            $dob=$rec['dob'];
            $ssid=$rec['ssid'];
            $phone=$rec['phone'];
            $email=$rec['email'];
            $address=$rec['address'];
	}
    }

    if (isset($_POST['submit'])) 
    {
        $usn=$_POST['usn'];
        $first_name=$_POST['first_name'];
        $m_name=$_POST['m_name'];
        $last_name=$_POST['last_name'];
        $dob=$_POST['dob'];
        $ssid=$_POST['ssid'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        
        $sqlInsertIntoDB = "INSERT INTO `student`(`usn`, `fname`, `mname`, `lname`, `dob`, `ssid`, `phone`, `email`, `address`) VALUES ('$usn','$first_name','$m_name','$last_name','$dob','$ssid','$phone','$email','$address')";
        
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
        $usn=$_POST['usn'];
        $first_name=$_POST['first_name'];
        $m_name=$_POST['m_name'];
        $last_name=$_POST['last_name'];
        $dob=$_POST['dob'];
        $ssid=$_POST['ssid'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        
        $sqlInsertIntoDB = "UPDATE `student` SET `usn`='$usn' , `fname`='$first_name', `mname`='$m_name', `lname`='$last_name', `dob`='$dob', `ssid`='$ssid', `phone`='$phone', `email`='$email', `address`='$address' WHERE `usn`='$usn'";
        
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
<title>Student</title>
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Enter Student Details</h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s1" type="text" name="usn" value="<?php echo $usn; ?>" required />
                                    <label for="usn">USN</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s2" type="text" name="first_name" value="<?php echo $f_name; ?>" required/>
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s3" type="text" name="m_name" value="<?php echo $m_name; ?>" />
                                    <label for="m_name">Middle Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s4" type="text" name="last_name" value="<?php echo $l_name; ?>" />
                                    <label for="last_name">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s5" type="date" name="dob" value="<?php echo $dob; ?>" required/>
                                    <label for="dob">Date of Birth</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s6" type="text" name="ssid" value="<?php echo $ssid; ?>" required/>
                                    <label for="stipend">SSID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s7" type="text" name="phone" value="<?php echo $phone; ?>" />
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s8" type="text" name="email" value="<?php echo $email; ?>" />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="s9" type="text" name="address" value="<?php echo $address; ?>" />
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
				  <?php endif ?>
				</div>
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