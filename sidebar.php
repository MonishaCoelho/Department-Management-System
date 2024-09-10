<html>  
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/sidebars.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->

</head>
    
<body>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> 
          <a href="home.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Menu</span> </a>
             <!--<div class="nav_list">--> 
             
             <ul class="list-unstyled ps-0">
               <li class="mb-1">
                <a href="home.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
               </li>
               <li class="mb-1">
               <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name"><button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#student-collapse" aria-expanded="false">
          Student
        </button> </span></a>
        <div class="collapse" id="student-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 2rem;">
            <li><a href="student.php" class="link-light rounded">Add Student</a></li>
            <li><a href="display_student.php" class="link-light rounded">Student List</a></li>
	    <li><a href="report.php" class="link-light rounded">Report</a></li>
            <li><a href="project.php" class="link-light rounded">Add Project</a></li>
            <li><a href="mooc_course.php" class="link-light rounded">Add MOOC</a></li>
            <li><a href="internship.php" class="link-light rounded">Add Internship</a></li>
            <li><a href="marks.php" class="link-light rounded">Add Marks</a></li>
          </ul>
        </div>
       </li>
       <li class="mb-1">
            <a href="#" class="nav_link"> <i class='bx bx-buildings nav_icon'></i> <span class="nav_name"><button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dept-collapse" aria-expanded="false">Department</button></span> </a> 
              <div class="collapse" id="dept-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 2rem;">
            <li><a href="department.php" class="link-light rounded">Add Department</a></li>
            <li><a href="faculty.php" class="link-light rounded">Add Faculty</a></li>
            <li><a href="display_faculty.php" class="link-light rounded">Faculty List</a></li>
            <li><a href="course.php" class="link-light rounded">Add Course</a></li>
            <li><a href="section.php" class="link-light rounded">Add Section</a></li>
            <li><a href="teacher_activities.php" class="link-light rounded">Add Teacher Activity</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
            <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name"><button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#links-collapse" aria-expanded="false">Quick Links</button></span> </a> 
              <div class="collapse" id="links-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 2rem;">
            <li><a href="file/calendar.pdf" class="link-light rounded">Academic Calendar</a></li>
            <li><a href="file/syllabus.pdf" class="link-light rounded">Syllabus</a></li>
            <li><a href="file/timetable.pdf" class="link-light rounded">Class Time Table</a></li>
            <li><a href="file/see.pdf" class="link-light rounded">Exam Time Table</a></li>
          </ul>
        </div>
      </li>
    </ul>
  
                 
                <!--<a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
        </div>  
       <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
    </nav>
</div>

      <script src="js/sidebars.js"></script>
  </body>
</html>