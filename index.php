<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title></title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <h3>
              Prof.Ramkrishna More
            </h3>
            <span> college</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
             <!-- <li class="nav-item">
                <a class="nav-link" href="course.php"> Courses </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.php"> Events </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="login.php">Student Login</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        WELCOME TO OUR COLLEGE PLACEMENT SYSTEM
                      </h1>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         
    </section>
    <!-- end slider section -->
  </div>

 
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="side_img">
      <img src="images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/a-1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/a-2.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                About Our College
              </h3>
              <p>
                The College has a full-fledged Placement Cell which has a specially designated Placement Officer and faculty from various departments as placement coordinators. The Placement cell coordinates with HR departments of various Corporates/MNCs and organizes recruitment at the college campus. 


              </p>
              <h4>
               Vision
              </h4>
              <p>To groom students with Competencies and Employability Skills to become part of Top Notch Companies
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  

 

  <!-- login section -->

  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <div class="login_form">
            <h5>
              Student Login 
            </h5>
            <form action="check.php" method="post">
              <div>
                <input type="hidden" name="usertype" value="S">
                <input type="string" placeholder="username" name="uname" />
              </div>
              <div>
                <input type="password" placeholder="Password" name="pwd" />
              </div>
              <button type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end login section -->

  <!-- event section -->
  <section class="event_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h3>
          Events
        </h3>
        <p>
          Upcoming Placement Drive To Feed Your Brain
        </p>
      </div>
      <div class="event_container">
        <div class="box">
          <div class="img-box">
            <img src="images/event-img.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              Wipro Drive (BCA Student)
            </h4>
            <h6>
              8:00 AM - 5:00 PM 
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
                15
              </span>
              March
            </h3>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/event-img.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              Infosys Drive (BBA Students)
            </h4>
            <h6>
              8:00 AM - 5:00 PM 
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
                15
              </span>
              February
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end event section -->

  

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                Contact Us
              </h3>
              <p>
               Please Fill This Form In A Decent Manner
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <h5>
              Get In Touch
            </h5>
            <form action="contact-form.php" method="post">
              <div>
                <input type="text" placeholder="Full Name" name="Name" id="name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="Number" id="number" />
              </div>
              <div>
                <input type="email" placeholder="Email Address" name="Email" id="email" />
              </div>
              <div>
                <input type="text" placeholder="Message" class="input_message" name="Message" id="message" />
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="course.php"> Courses </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.php"> Events </a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginadmin.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2020 All Rights Reserved By
     
    </p>
  
  </footer>

   
  <footer class="container-fluid footer_section">
  
     
  
  </footer>
 
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


  <?php
  $con=mysqli_connect("localhost","root","","placementdb");
  $qry="select * from placement_tbl where expDate>'".date("Y-m-d")."'";
  
  $run=mysqli_query($con,$qry);
  while ($rows=mysqli_fetch_array($run))
  {
    echo "<div class=\"jobbox\">";
    echo "<h3>".$rows['JobID'].". ".$rows['JobDesc']."</h3>"." <p><font color=red> Last Date for Applying :".$rows['ExpDate']."</font></p>" ;
    echo "<b>Company:</b>".$rows['CompanyName']."<br>";
    echo "<b>Location:</b>".$rows['Location']."<br>";
    echo "<b>Date of Interview:</b>".$rows['InterviewDate']."<br>";
    echo "<b>Stream:</b>".$rows['Stream']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Salary Package:</b>".$rows['SalPackage']."<br>";
    echo "<b>Qualification:</b>".$rows['Qualification']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Other Requirements:</b>".$rows['OtherReq']."<br>";
    echo "</div>";
  }
  
  ?>

</body>

</html>