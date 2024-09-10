<?php
   include('dbCon.php');
   require_once 'admin_session.php';
  
       $qry="SELECT * FROM faculty";
       $result = mysqli_query($conn, $qry);
       mysqli_close($conn);
   
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
                        <h1 class="fw-bolder">Faculty List</h1>
                    </div>
                    <div class="row gx-1 justify-content-center">
                        
                        <div class="col-xl-12">
                            <table class="table table-striped">
                                <thead>
                                   <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Qualifications</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
				    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while($row = mysqli_fetch_row($result))
                                    {
                                ?>
                                  <tr>
                                      <?php
                                        for ($x = 1; $x < 11; $x++) 
					{
                                            if ($x==3 || $x==4 || $x==5)
					    {
                                                continue;
					    }
                                            if ($x==2)
					    {
                                                echo "<td> $row[2] $row[3] $row[4] $row[5]</td>";
                                                continue;
					    }
                                      ?>
                                      <td><?php echo $row[$x];?></td>
                                  <?php } ?>
				  <td style="white-space:nowrap">
				  <?php 
				      echo "<a href=\"faculty.php?edit=$row[1]\">
						<button><i class=\"bi bi-arrow-repeat\"></i></button></a> 
					    <a href=\"delete.php?fid=$row[1]\" onClick=\"return confirm('Are you sure you want to delete?')\">
						<button><i class=\"bi bi-trash\"></i></button></a>";
				  ?>
			          </td>
                                  </tr>
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