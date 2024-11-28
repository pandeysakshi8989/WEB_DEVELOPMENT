<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $login=false;
    $showError=false;
    
    include '_dbconnect.php';

    $userName=$_POST["userName"];
    $password=$_POST["password"];
    

    $sql="Select * from `homeuser` WHERE userName='$userName' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      $login=true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['userName']="admin";
      header("location: admin.php");
    }
   
else {
    $showError=true; 
 }

if($login){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> You are logged in.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }   
  if($showError){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Error!</strong>Invalid Credentials.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }   

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin System-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <?php require '_nav.php' ?>
    <div class="container col-6 my-5">
        <h1 class="text-center">Welcome to admin!</h1>
        <form action="adminlogin.php" method="post">
  <div class="mb-3">
    <label for="userName" class="form-label">User Name</label>
    <input type="text" class="form-control" name="userName" id="userName" aria-describedby="text">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>