<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIML</title>
    <link rel = "stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="Images/logo.png"></a>
            <div class = "nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
		            <li><a href="login.php">LOGIN</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">COURSES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class = "text-box">
        <h1>Department of Artificial Intelligence and Machine Learning</h1>
        <p>“Some people call this artificial intelligence, but the reality is this technology will enhance us. So instead of artificial intelligence, I think we'll augment our intelligence.” —Ginni Rometty
        </p>
        <a href="https://nmamit.nitte.edu.in/department-AI&ML.php#Overview" class="hero-btn">Visit us to know more</a>
    </div>
    </section>

    <!------ Course ------>
    <section class = "course">
        <h1>Courses</h1>
        <p>Courses offered in different years</p>
        <div class="row">
            <div class="course-col">
                <h3>2nd Year</h3>
                <p>All the fundamentals of AI and ML</p>
            </div>
            <div class="course-col">
                <h3>3rd Year</h3>
                <p>Advancement of AI and ML</p>
            </div>
            <div class="course-col">
                <h3>4th Year</h3>
                <p>Preparation and ready for placements AI and ML</p>
            </div>
        </div>
    </section>

    <!----- Campus----->
    <section class = "campus">
        <h1>About Us</h1>
        <p>Proudly dedicated to AIML's purpose, we stand as a testament to excellence, innovation, and the relentless pursuit of AIML goals, weaving a narrative that resonates with our passion for learning, innovation and development.</p>
        <div class="row">
            <div class="campus-col">
                <img src="Images/missi.jpg">
                <div class="layer">
                    <h3>MISSION</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="Images/missi.jpg">
                <div class="layer">
                    <h3>VISION</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="Images/missi.jpg">
                <div class="layer">
                    <h3>GOAL</h3>
                </div>
            </div>
        </div>
    </section>


<!---- Faculties---->
    <section class="faculty">
        <h1>Our Faculty</h1>
        <p>Driven and Motivated</p>
        <div class="row">
            <div class="faculty-col">
                <img src="Images/basketball.jpg">
                <h3>Head of Department</h3>
                <p>Dr.Sharada U Shenoy</p>
            </div>
            <div class="faculty-col">
                <img src="Images/sudeshsir.jpg">
                <h3>Asst Professor</h3>
                <P>Sudesh</p>
            </div>
            <div class="faculty-col">
                <img src="Images/disha.jpg">
                <h3>Asst Professor</h3>
                <p>Disha</p>
            </div>
        </div>
    </section>

    
   <!----testimonials---->
<section class="testimonials">
    <h1>Our Alumni</h1>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="testimonials-col">
                <!-- Check the path to your image file -->
                <img src="Images/user1.jpg" alt="Alumni Image 1">
                <div>
                    <h3>
                        Placed in ___
                    </h3>
                    <p>Someone 1</p>
                    <p>BATCH OF 2024</p>
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="testimonials-col">
                <!-- Check the path to your image file -->
                <img src="Images/user2.jpg" alt="Alumni Image 2">
                <div>
                    <h3>
                        Placed in ___
                    </h3>
                    <p>Someone 2</p>
                    <p>BATCH OF 2024</p>
                </div>
            </div>
        </div>
        <!-- Add more slides as needed -->

        <!-- Navigation buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <!-- Add more dots as needed -->
    </div>
</section>

    <!-- Display Student Count -->
<section class="student-count">
    <h1>Student Count</h1>
    <div class="row">
        <div class="student-count-col">
            <p>Total Students:</p>
            <?php

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "aiml";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT COUNT(*) as total_students FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $totalStudents = $row["total_students"];
                echo "<span class='count'>$totalStudents</span>";
            } else {
                echo "0";
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>
<br><br>
    
    
    <!------ Call to Action ------>
    <section class="cta">
        <h1>Enroll for our course</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
    </section>

    <!------ Footer ------>
    <section class="footer">
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>


<!------JavaScript for Toggle Menu ------>
<script>
    var navLinks = document.getElementById("navLinks");
    
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
</script>
</body>
</html>