<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';
    
    $result=NULL;
    $usn="";
    $sem=NULL;

    if (isset($_POST['generate'])) 
    {
	$usn=$_POST['usn'];
        $sem=$_POST['sem'];
        
        $gen = "SELECT m.usn, m.course_code, c.title, m.cie, m.see, c.credits, m.grade_point FROM marks m ,course c WHERE usn='$usn' AND m.course_code=c.course_code AND c.sem=$sem";
        
        $result = mysqli_query($conn, $gen);
        mysqli_close($conn);
    }
?>

<head>
<title>Student</title>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<link href="css/styles.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>
        <section class="py-5">
            <div class="container px-0">
                <div class="bg-light rounded-3 py-4 px-1 px-md-3 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Student Report</h1>
                    </div>
                    <div class="row gx-1 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
			    <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="r1" type="text" name="usn" value="<?php echo $usn; ?>" required />
                                    <label for="usn">USN</label>
                                </div>
				<div class="form-floating mb-3">
                                    <input class="form-control" id="r2" name="sem" min="1" max="8" value="<?php echo $sem; ?>" required/>
                                    <label for="sem">Semester</label>
                                </div>
				<div class="d-grid"><button class="btn btn-primary btn-lg" type="submit" name="generate">Generate Report</button></div>
			    </form>
			</div>
                        <div class="col-xl-12">
                            <table class="table table-striped">
                                <thead>
                                   <tr>
                                    <th>USN</th>
                                    <th>Course Code</th>
                                    <th>Title</th>
                                    <th>CIE</th>
                                    <th>SEE</th>
                                    <th>Credits</th>
				    <th>GP<th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while($result!=NULL and $row = mysqli_fetch_row($result))
                                    {
                                ?>
                                  <tr>
                                    <?php
                                      for ($x = 0; $x < 7; $x++) {
                                    ?>
                                      <td><?php echo $row[$x];?></td>
                                      <?php } ?>
				      
                                <?php
                                    }
                                ?>
                                 </tbody>
                            </table>
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