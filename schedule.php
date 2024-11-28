
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Schedule & Price
</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Templates" name="keywords">
    <meta content="Templates" name="description">

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
    
      <!--table start-->
      <div class="container my-4">
        <h3>Doctor Schedule</h3>
      <table class="table table-primary table-striped" id="DoctorTable">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Profession</th>
            <th scope="col">Day</th>
          </tr>
        </thead>
       
        <tbody>
<!---php script table-->
         <?php
         //connect to database
include '_dbconnect.php';
//fetch data
$sql="SELECT * FROM `doctor`";
$result=mysqli_query($conn,$sql);

$sno=0;
//display
while($row=mysqli_fetch_assoc($result)){
  $sno=$sno+1;
  echo "<tr>
  <th scope='row'>".$sno."</th>
  <td>".$row['Name']."</td>
  <td>".$row['Profession']."</td>
  <td>".$row['Day']."</td>
</tr>";
}

?>                  
        </tbody>
       
      </table>
      <a href="dashboard.php">Click to go back</a>
    </div>

      <!--table start-->
      <div class="container my-4">
      <h3>Staff Schedule</h3>
      <table class="table table-primary table-striped" id="StaffTable">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Work</th>
            <th scope="col">Day</th>
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
</tr>";
}
?>                  
        </tbody>
       
      </table>
      <a href="dashboard.php">Click to go back</a>
    </div>
      <!---table end-->

         <!--table start-->
         <div class="container my-4">
        <h3>Price</h3>
      <table class="table table-primary table-striped" id="CostTable">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Cost</th>
          </tr>
        </thead>
       
        <tbody>

<!---php script table-->
         <?php
         //connect to database
include '_dbconnect.php';
//fetch data
$sql="SELECT * FROM `price`";
$result=mysqli_query($conn,$sql);

$sno=0;
//display
while($row=mysqli_fetch_assoc($result)){
  $sno=$sno+1;
  echo "<tr>
  <th scope='row'>".$sno."</th>
  <td>".$row['Name']."</td>
  <td>".$row['Type']."</td>
  <td>".$row['Cost']."</td>
</tr>";
}

?>                  
        </tbody>
       
      </table>
      <a href="dashboard.php">Click to go back</a>
    </div>

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
    let table = new DataTable('#DoctorTable')});
    </script>
    <script>
      $(document).ready( function (){
    let table = new DataTable('#StaffTable')});
    </script>
     <script>
      $(document).ready( function (){
    let table = new DataTable('#CostTable')});
    </script>
     <!-- JavaScript Libraries -->
      <!--Script-->
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