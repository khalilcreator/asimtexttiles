<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">   
    <link rel="shortcut icon" href="images/ico/favicon.ico">

     <!-- Custom Stylesheet -->
     <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>LOGIN</title>
</head>
<body>

<?php
 include "connection.php";
  if(isset($_POST["login"])){
   $uname= $_POST['uname'];
   $password = $_POST['password'];
    $log = mysqli_query($link,"SELECT uid from admin where uname='$uname' and password='$password'");    
    if (mysqli_num_rows($log)>=1) {
         while($row = mysqli_fetch_array($log))
         {
          echo"helo";
      // if($password=='iamadmin'){
         $_SESSION['hlo']= $row['uid'];
         echo $_SESSION['hlo'];
         echo "<script>window.location.href='index.php';</script>";
        
      }
    }else{
      echo "<script>window.location.href='../index.php';</script>";
     
    }
  }
  

?>

<div class="container  mt-5 mb-5 ">
      <form class="bg-light p-4 m-auto" action="#" method="post">
        <div class="row mb-3 ">
        <p class="my-5 font-bold fs-2">USER INFO</p>
          <div class="col-lg-2">
            <p>USER NAME</p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="USER NAME" name="uname" required>
          </div>
        </div>

          <div class="row mb-3">
          <div class="col-lg-2 my-2">
            <p>PASSWORD</p>
          </div>
          <div class="col-lg-5 my-2">
            <input type="password" class="form-control" placeholder="PASSWORD" name="password" required>
          </div>
          
          <div>
          <button type="save" class="btn btn-custom btn-lg btn-block mt-5 border border-info" name="login"> Login</button>
          </div>
          <div class=" my-2">
          <span>Need an account? <a href="../home.php">Click Here</a></span>  
          </div>
          
      </form>
    </div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>