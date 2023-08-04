<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- custom css -->
 <link rel="stylesheet" href="../CORVIT/Css/mystylesheet.css">
 <title>Contact page</title>
 <!-- this is boostrap cdn -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- for icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="css/mystylesheet.css" />
  <!-- for data table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

</head>
<body>
<?php
 if(empty($_SESSION['hlo'])){
  echo "<script>window.location.href='login.php'</script>";
}else{
   
  ?>
<?php include "slidertop.php"; ?>


<div class="container">
<div class="container mx-auto my-4 border p-4">
<h1 class="fw-bolder text-center text-danger fw-bolder fs-2">Contact Us</h1>

<table id="aaa" class="table table-border table-hover table-responsive-sm">
  <thead class="thead">
    <tr>
      <th scope="col">FirstName</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   include "connection.php";
   $data = mysqli_query($link,"SELECT * From contact ORDER BY cid");
   while($row=mysqli_fetch_array($data)){
   ?>

<tr>
      <th scope="row"><?php echo $row['fname']?></th>
      <td><?php echo $row['lname']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['mobile']?></td>
      <td><?php echo  $row['message']?></td>

</tr>
   <?php } ?> 
</tbody>
</table>
</div>
</div>
<?php } ?> 
  <!-- j query cdn -->

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
   $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
          });
          $(document).ready( function () {
    $('#aaa').DataTable();
} );
 var table = $('#aaa').DataTable();
$('#aaa tbody').on( 'click', 'tr', function () {
$('#id').val(table.row( this ).data()[0]);
$('#catname').val(table.row( this ).data()[1]);
} );
</script>
</bod>
</html>