<?php
	require_once 'dbCon.php';
	require_once 'admin_session.php';
?>

<!DOCTYPE html>
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
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/side.css" rel="stylesheet" />
</head>


<body class="d-flex flex-column h-100" id="body-pd">
    <?php include "header.php";?>
    <main class="flex-shrink-0">

        <!-- Navigation-->
        <?php require_once "sidebar.php";?>
        <!-- Header-->
        <header class="bg-dark ">
            <div class="container ">
                <img class="img-fluid rounded-3 my-3 mb-4" src="assets/admissions.jpg"
                    alt="..." />
            </div>
        </header>

        <!-- Features section
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">A better way to start AI</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-collection"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-building"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is
                                    just a bit more text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <div class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-8">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">Department of AIML</h1>
                            <p class="lead fw-normal text-muted mb-4">Bachelor of Technology in Artificial Intelligence & Machine Learning equips students with the skills and knowledge required to analyse, design and control intelligent systems.The main objective of offering this program is developing professionals who are skilled in the area of AI & ML. This program enables students to gain in-depth understanding of fundamental subjects in Computer Science and deals with technologies like image processing, machine learning, natural language processing, neural networks, deep learning, reinforcement learning and big data analytics. This course is designed for both academic and skill based education to create a bright career for the students

Centre of Excellence in AI and ML is equipped with the latest computers and state of the art amenities facilitating research work and projects for the students and research scholars in addition to regular curricular activities.</p>
                            <a class="btn btn-primary btn-lg" href="https://nmamit.nitte.edu.in/department-AI&ML.php#Overview">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <!-- Footer-->
    <footer class="bg-dark py-3 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Made in 2023</div>
                </div>
                <!--<div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>-->
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

</body>

</html>