<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: adminlogin.php");
    exit;
}
?>
<!--php script for form-->
<?php 

//server
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include '_dbconnect.php';

    $email=$_POST['email'];
    $service=$_POST['service'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $message=$_POST['message'];
    
//insert to databse
$sql="INSERT INTO `chneed` (`Email`,  `Service`, `Date`, `Time`,`Message`) VALUES ('$email','$service','$date', '$time', '$message')";

$result=mysqli_query($conn,$sql);

//check for table creation
if($result){
    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';   
}
else{
   // echo "<br>not successful...." .mysqli_error($conn); 
   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> Your entry has not been submitted successfully!
    We are facing some technical issue.Sorry for inconvience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';   
}
//echo var_dump($result);
echo "<br>";
}
//submit to databse
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Welcome:
        <?php echo $_SESSION['userName'];?>
</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Templates" name="keywords" />
    <meta content="Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!--bootsrap icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary m-1" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-dark m-1" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-secondary m-1" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
      <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
            <small class="py-2"
              ><i class="far fa-clock text-primary me-2"></i>Open:Mon
              - Fri : 10.00 am - 4.00 pm,Sat
              - Sun : 9.00 am - 1.00 pm 
            </small>
          </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
          <div
            class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5"
          >
            <div class="me-3 pe-3 border-end py-2">
              <p class="m-0">
                <i class="fa fa-envelope-open me-2"></i>healtheasy@gmail.com
              </p>
            </div>
            <div class="py-2">
              <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+123456789</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn bg-white btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-flex align-items-center justify-content-center"
          >
            <div class="input-group" style="max-width: 600px">
              <input
                type="text"
                class="form-control bg-transparent border-primary p-3"
                placeholder="Type search keyword"
              />
              <button class="btn btn-primary px-4">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Full Screen Search End -->

    <!--Login Navbar-->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0"
    >
      <a href="index.php" class="navbar-brand p-0">
        <h3 class="m-0 text-primary">
            <i class="fa fa-plus-square"></i>
           HealthEasy
        </h3>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <div class="navbar-nav ms-auto py-0">

          <a href="#" class="nav-item nav-link"> <h4 class="m-0 text-primary"><i class="bi bi-person-circle"></i></h4>
    <div class="container align-item-center">
    <?php echo $_SESSION['userName'];?> 
   </a>  </div>

   <a href="adminlogin.php" class="nav-item nav-link">Login</a>
          <a href="index.php" class="nav-item nav-link">Home</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Data Tables</a>
            <div class="dropdown-menu m-0">
                <a href="doctor.php" class="dropdown-item">Doctor</a>
                <a href="staff.php" class="dropdown-item">Staff</a>
                <a href="cost.php" class="dropdown-item">Price</a>
                <a href="other.php" class="dropdown-item">Others</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Web Pages</a>
            <div class="dropdown-menu m-0">
                <a href="appointment.php" class="dropdown-item">Appointment</a>
                <a href="sevice.php" class="dropdown-item">Services</a>
                <a href="contact.php" class="dropdown-item">Contact</a>
                <a href="offer.php" class="dropdown-item">Latest Offers</a>
                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                <a href="pricing.php" class="dropdown-item">Pricing</a>
            </div>
        </div>
        
        </div>

        <button
          type="button"
          class="btn text-dark"
          data-bs-toggle="modal"
          data-bs-target="#searchModal"
        >
          <i class="fa fa-search"></i>
        </button>
        <a href="logout.php" class="btn btn-primary py-2 px-4 ms-3"
          >LogOut</a
        >
      </div>
    </nav>
     <!--Login Navbar-->

        
  <!---Modification form-->
  <div class="container text-white">
    <div class=" row bg-success p-5">

      <div class="col-xl-4 col-lg-6 wow slideInUp " data-wow-delay="0.3s">
        <h3>What Changes Need?</h3>
      <form action="admin.php" method="post">
        <div class="row g-3">
          <div class="col-12">
            <input
              type="email" 
              class="form-control border-0 bg-light px-4"
              name="email" id="email"
              placeholder="Email of Staff"
              style="height: 55px"
            />
          </div>
          <div class="col-12">
            <input
              type="text"
              class="form-control border-0 bg-light px-4"
              name="service" id="service"
              placeholder="Service of Staff"
              style="height: 55px"
            />
          </div>
          <div class="col-12">
          <div class="date" id="date" data-target-input="nearest">
                      <input
                        type="date"
                        class="form-control bg-light border-0 datetimepicker-input px-4"
                        name="date" id="date"
                        placeholder="Deadline Date"
                        data-target="date"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
          </div>
          <div class="col-12 ">
                    <div class="time" id="time" data-target-input="nearest">
                      <input
                        type="time"
                        class="form-control bg-light border-0 datetimepicker-input"
                        name="time" id="time"
                        placeholder="Deadline Time"
                        data-target="time"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
                  </div>
          <div class="col-12">
            <textarea
              class="form-control border-0 bg-light px-4 py-3"
              name="message" id="message"
              rows="5"
              placeholder="What Changes Need"
            ></textarea>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">
              Sumbit
            </button>
          </div>
        </div>
      </form>
     </div>
 <!-- File Upload Start -->
    
        <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
            <div class=" container-fluid text-white pt-5 wow fadeInUp  "  data-wow-delay="0.1s"
            style="z-index: 1 ;height: 480px;" >
        <h3 class="text-center ">File Upload</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select file to upload:

        <div class="row g-3">

          <div class="col-12">
            <input type="file" 
             name="fileToUpload" id="fileToUpload">
          </div>

          <div class="col-12">
            <input type="email" 
            class="form-control border-0 bg-light px-4 py-3"
            name="email" id="email" placeholder="Email">
          </div>
          <div class="col-12">
          <select
                    class="form-select border-0 bg-light px-4 py-3"
                    name="type" id="type"
                    placehoder="Type"
                    style="height: 55px" 
                  >
                    <option selected>Select Type</option>
                    <option value="R">Report</option>
                    <option value="N">Notice</option>
                    <option value="O">Other</option>
                  </select>
          </div>
          <div class="col-12">
            <textarea
           class="form-control border-0 bg-light px-4 py-3"
           name="message" id="message"
           rows="5"
           placeholder="Message Regarding File"
         ></textarea>
          </div>

          <div class="col-12">
           <input type="submit" 
           value="Upload File" name="submit">
          </div>

        </div>
      </form>

     </div>
     <div>        
       <!-- File Upload End -->

    </div>
  </div>
  <!--end-->

     
     
    <!-- Newsletter Start -->
    <div class=" container-fluid text-white pt-5 wow fadeInUp  "  data-wow-delay="0.1s"
  style="z-index: 1 ;">
    <div class="row justify-content-evenly text-white">
    <div class="col-3">
        <a
        href="login.php"
        class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
        data-wow-delay="0.6s"
        >Login</a
      >
      <p> Existing User</p>
    </div>
    <div class="col-3">
        <a
        href="signup.php"
        class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
        data-wow-delay="0.6s"
        >SignUp</a
      >
      <p>New User?</p>
    </div>

    <div class="col-3">
        <a
        href="adminlogin.php"
        class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
        data-wow-delay="0.6s"
        >Admin</a
      >
    </div>
</div>                          
</div>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="offer.php"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Offers</a>
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="offer.php"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Offers</a>
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, ABC, UP</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>healtheasy@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+123456789</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="design.php">www.healtheasy.com</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="design.php">HealthEasy</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
