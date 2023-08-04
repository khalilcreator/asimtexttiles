<?php 
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Dashboard</title>
  <!-- Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- for icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="css/mystylesheet.css" />
</head>

<body>
  <?php
 if(empty($_SESSION['hlo'])){
  echo "<script>window.location.href='login.php'</script>";
}else{
   
  ?>
<?php include "slidertop.php"; ?>
        <section>
            <div class="container">
                <h1 class=" fw-bolder text-center">Asim <span style="color:#12AD2B">Textiles</span>  </h1>
                <div class="row">
                    <div class="col-6 col-lg-3 mt-5">
                        <div class="small-box bg-info">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mt-5">
                        <div class="small-box bg-success">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mt-5">
                        <div class="small-box bg-warning">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mt-5">
                        <div class="small-box bg-danger">
                        </div>
                    </div>
                </div>
        
                <div class="row">
                     <div class="col-md-10 mx-auto">
                       <p class="fs-5">Welcome to the admin panel of asim textiles faisalabad.The admin panel of asim textiles Faisalabad is
                          designed to be user-friendly and intuitive, with a clean and simple interface that makes it easy for even
                          non-technical users to manage website content and functionality.The admin panel of asim textiles Faisalabad
                          is a powerful tool that allows authorized users to manage various aspects of the company's website and online presence. 
                          From this panel, administrators can add, edit, and delete content, including text, images, and multimedia files. 
                       </p>
                     </div>
                </div>
            </div>
        </section>

    </div>
</div>
   <?php   
   }
   ?>


  <!-- End your project here-->

  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
   <!-- Bootstrap -->
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <!-- Chart js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
   

     $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
          });
  </script>
</body>

</html>