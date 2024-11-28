<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';

    $userName=$_POST["userName"];
    $password=$_POST["password"];
    $conPassword=$_POST["conPassword"];

    //check for password
    $match=($password==$conPassword);

    //check whether user exists
    $existSql="SELECT * FROM `users` WHERE `UserName`='$userName'";
    $existResult=mysqli_query($conn,$existSql);
    $numExistRows=mysqli_num_rows($existResult);
    if($numExistRows>0){
      $exists=true;
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Error!</strong>User already exists.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }

    else{
      $exists=false;
    if( ($match==true)){
    $sql="INSERT INTO `users` ( `UserName`, `Password`, `Date`) VALUES ( '$userName', '$password',current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your account is created and you can login.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    } 
} 
else {
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Error!</strong>Password do not match .
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
}
  }

//ALTER TABLE `users` ADD UNIQUE(`UserName`);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User System-SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <?php require '_nav.php' ?>
    <div class="container col-6 my-5">
        <h1 class="text-center">SignUp to our website</h1>
        <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="userName" class="form-label">User Name</label>
    <input type="text" class="form-control" name="userName" id="userName" aria-describedby="text">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="mb-3">
    <label for="conPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="conPassword" id="conPassword">
    <div id="textsure" class="form-text">Make sure to type the same password</div>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>