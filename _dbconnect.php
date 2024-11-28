<?php 
//connecting to database
$server="localhost";
$username="root";
$password="";
$database="healtheasy";

//create connection
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
   die(mysqli_connect_error());
   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <br>We are facing some technical issue.Sorry for inconvience.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; 
}

?>