<!----php form start-->
<?php 
//connect to database
include '_dbconnect.php';

//delete starts
if(isset($_GET['delete'])){
  $snoDelete=$_GET['delete'];
  //delete
$sql="DELETE FROM `staff` WHERE `Serial`='$snoDelete'";
$result=mysqli_query($conn,$sql);
if($result){
  echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Deleted successfully!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
  </button>
  </div>"; 
}
else{
   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> Your entry has not been deleted successfully!
    We are facing some technical issue.Sorry for inconvience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';   
}
echo "<br>";
}
//
if ($_SERVER['REQUEST_METHOD']=='POST'){
 

  if(isset($_POST['snoEdit'])){
    //update
    $snoEdit=$_POST['snoEdit']; 
    $Name=$_POST['NameEdit'];
  $Work=$_POST['WorkEdit'];
  $Day=$_POST['DayEdit'];

  $sql="UPDATE `staff` SET `Name` = '$Name', `Work` = '$Work',`Day` = '$Day' WHERE `staff`.`Serial` = '$snoEdit'";
$result=mysqli_query($conn,$sql);

//check for table creation
if($result){
  echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Updated successfully!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
  </button>
  </div>"; 
}
else{
   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> Your update has not been submitted successfully!
    We are facing some technical issue.Sorry for inconvience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';   
}
echo "<br>";
  }//update ends
  //insert
  else{
    $Name=$_POST['Name'];
    $Work=$_POST['Work'];
    $Day=$_POST['Day'];

//insert to databse
$sql="INSERT INTO `staff` (`Name`, `Work`,`Day`) VALUES ('$Name', '$Work', '$Day')";
$result=mysqli_query($conn,$sql);

//check for table creation
if($result){
  echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Inserted successfully!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
  </button>
  </div>"; 
}
else{
   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> Your entry has not been submitted successfully!
    We are facing some technical issue.Sorry for inconvience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';   
}
echo "<br>";
}
}
//submit to databse
?>
      <!--php end-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-Staff</title>

      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
  </head>

  <body>
    <!---Edit -Modal-->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModal">Edit Staff</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action="staff.php" method="post">
        <input type="hidden" name="snoEdit" id="snoEdit">
            <div class=" form-group">
              <label for="NameEdit" class="form-label">Name Edit</label>
              <input type="text" class="form-control" name="NameEdit" id="NameEdit" aria-describedby="NameEdit">
            </div>
            <div class=" form-group">
              <label for="WorkEdit" class="form-label">Work Edit</label>
              <input type="text" class="form-control" name="WorkEdit" id="WorkEdit" aria-describedby="WorkEdit">
            </div>
            <div class=" form-group">
              <label for="DayEdit" class="form-label">Day Edit</label>
              <input type="text" class="form-control" name="DayEdit" id="DayEdit" aria-describedby="DayEdit">
            </div>
            <button type="submit" class="btn btn-primary">Update Staff</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!---end-->
    <!--Nav start-->
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
    <div class="container align-item-center">admin
   </a>  </div>

   <a href="adminlogin.php" class="nav-item nav-link">Login</a>
          <a href="index.php" class="nav-item nav-link">Home</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Data Tables</a>
            <div class="dropdown-menu m-0">
                <a href="doctor.php" class="dropdown-item">Doctor</a>
                <a href="staff.php" class="dropdown-item active">Staff</a>
                <a href="#" class="dropdown-item">Price</a>
                <a href="#" class="dropdown-item">User Login</a>
                <a href="#" class="dropdown-item">Appointment</a>
                <a href="#" class="dropdown-item">Contact</a>
                <a href="#" class="dropdown-item">Feedback</a>
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
      <!--Nav end-->

      <!--form start-->
      <div class="container bg-outline-dark">
        <form  action="staff.php" method="post">
        <div class="mb-3 mt-3">
                <h2>Add a Staff</h2>
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="Name" id="Name" aria-describedby="Name">
</div>
<div class="mb-3 ">
              <label for="Work" class="form-label">Work</label>
              <input type="text" class="form-control" name="Work" id="Work" aria-describedby="Work">
</div>
<div class="mb-3 ">
              <label for="Day" class="form-label">Day</label>
              <input type="text" class="form-control" name="Day" id="Day" aria-describedby="Day">
</div>    
            <button type="submit" class="btn btn-primary">Add Staff</button>
            </div>
          </form>
      </div>
      <!--form end-->

       

      <!--table start-->
      <div class="container my-4">
      <table class="table table-primary table-striped" id="myTable">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Work</th>
            <th scope="col">Day</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
       
        <tbody>
<!---php script table-->
         <?php
         //connect to databsase
         include '_dbconnect.php';
//fetch data
$sql="SELECT * FROM `staff`";
$result=mysqli_query($conn,$sql);

$sno=0;
//display
while($row=mysqli_fetch_assoc($result)){
  $sno=$sno+1;
  echo "<tr>
  <th scope='row'>".$sno."</th>
  <td>".$row['Name']."</td>
  <td>".$row['Work']."</td>
  <td>".$row['Day']."</td>
  <td> <button class='edit btn btn-sm btn-primary' id=".$row['Serial'].">Edit</button>
  <button class='delete btn btn-sm btn-primary' id=d".$row['Serial'].">Delete</button>
</tr>";
}
?>                  
        </tbody>
       
      </table>
    </div>
    <hr>
      <!---table end-->

      <!--Script-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
       crossorigin="anonymous"></script>
       <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
     <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    

      <script>
      $(document).ready( function (){
    let table = new DataTable('#myTable')});
    </script>
    <script>
    edits=document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit",);
        tr=e.target.parentNode.parentNode;
        Name=tr.getElementsByTagName("td")[0].innerText;
         Work=tr.getElementsByTagName("td")[1].innerText;
         Day=tr.getElementsByTagName("td")[2].innerText;
         console.log(Name,Work,Day);
         NameEdit.value=Name;
         WorkEdit.value=Work;
         DayEdit.value=Day;
         snoEdit.value=e.target.id;
         console.log(e.target.id);
         $('#editModal').modal('toggle');
      })
    })
    deletes=document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("delete",);
        snoDelete=e.target.id.substr(1,);
         if(confirm("Press a button!")){
          console.log("yes");
          window.location=`staff.php?delete=${snoDelete}`;
         }
         else{
          console.log("no");
         }
      })
    })
   </script>

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