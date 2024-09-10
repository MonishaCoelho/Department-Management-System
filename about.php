<?php
	require_once 'dbCon.php';
	require_once 'admin_session.php';
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AIML</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">
      <?php include "sidebar.php";?>

        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-8">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">Department Management System</h1>
                            <p class="lead fw-normal text-muted mb-4">The system is a web-based application that can be accessed throughout the department of an organization. This system may be used for monitoring the overall activities and managing the various student and faculty records. The main aim of this system is to maintain and facilitate easy access to information.</p>
                            <!--<a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

        <section class="py-5 bg-light">
            <div class="container px-5 my-0">
                <div class="text-center">
                    <h2 class="fw-bolder">Faculty</h2>
                    <p class="lead fw-normal text-muted mb-5">Department of Artificial Intelligence and Machine Learning</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-3 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/hod.jpg" alt="..." />
                            <h5 class="fw-bolder">Dr. Sharada U Shenoy</h5>
                            <!-- <div class="fst-italic text-muted">Founder &amp; CEO</div> -->
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/sudesh.jpg" alt="..." />
                            <h5 class="fw-bolder">Mr. Sudesh Rao</h5>
                            <!-- <div class="fst-italic text-muted">CFO</div> -->
                        </div>
                    </div>
		    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/disha.jpg" alt="..." />
                            <h5 class="fw-bolder">Ms. Disha D N</h5>
                            <!-- <div class="fst-italic text-muted">CTO</div> -->
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/mahesh.jpg" alt="..." />
                            <h5 class="fw-bolder">Mr. Mahesh B L</h5>
                            <!-- <div class="fst-italic text-muted">Operations Manager</div> -->
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/rakshitha.jpg" alt="..." />
                            <h5 class="fw-bolder">Ms. Rakshitha</h5>
                            <!-- <div class="fst-italic text-muted">CTO</div> -->
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-profile rounded-circle mb-4 px-4" src="./assets/swathi.jpg" alt="..." />
                            <h5 class="fw-bolder">Ms. Swathi Pai M</h5>
                            <!-- <div class="fst-italic text-muted">CTO</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>