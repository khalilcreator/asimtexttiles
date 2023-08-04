<div class="container-fluid  bg-secondary bg-opacity-10">
    <div class="d-md-flex justify-content-evenly py-1">
    <div class="col-lg-3 py-5 ">
    <h1 class=" footer-heading ms-md-3">Asim <span style="color:#12AD2B;">Textiles</span></h1>
    
     <div class="ms-3">
         <p class="text-start mx-1">Asim Textiles, based in Pakistan, is a leading player in the import and export industry. We specialize in delivering  <br>high-quality textiles worldwide, fostering strong international partnerships.</p>
         
     </div>
    </div>
    <div class="col-lg-3 col-md-3 py-md-5 py-md-3">
       <div class="ms-3">
       <p class="my-4"><span class="me-3 " style="color:#12AD2B;"><i class="bi bi-geo-alt-fill"></i></span>Office No.1482,Faisalabad</p>
          <p class="my-4"><span class="me-3 " style="color:#12AD2B;"><i class="bi bi-envelope"></i></span>asimtextile59@gmail.com</p>
          <p class="my-4"><span class="me-3 " style="color:#12AD2B;"><i class="bi bi-telephone-fill"></i></span>+92302-7000733</p>
       </div>
    </div>
    <div class="col-lg-2 col-md-3 py-md-5 py-3">
    <h3 class="footer-heading ">Quick Links</h3>
    
     <div class="">
       <p class=""><a href="index.php" class=" text-dark fw-lighter footer-link"><span > &gt; </span> HOME</a></p>
       <p class=""><a href="gallery.php" class=" text-dark fw-lighter footer-link"><span> &gt; </span>Gallery</a></p>
       <p class=""><a href="#" class=" text-dark fw-lighter footer-link"><span> &gt; </span>Products</a></p>
       <p class=""><a href="contactus.php" class=" text-dark fw-lighter footer-link"><span> &gt; </span> Contact us</a></p>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-10 mx-auto py-md-5 py-3">
    <form  method='post'>
    
      <div class="d-flex flex-column justify-content-evenly">
          <h3 class="footer-para ms-md-5">Feedback</h3>
          <input type="text" name="ftname" id="ftname" class="border-0 my-1 px-1 py-2 mx-lg-4  mx-md-2 rounded" placeholder="Enter Your Name">
          <textarea class="border-0 my-1 px-1 py-2 mx-lg-4  mx-md-2 rounded" id="ftfeedback" name="ftfeedback" placeholder="Please enter your feedback"></textarea>
          <button style="background-color:#12AD2B;color:white" onclick="getData()" id="ftbtn" class="btn  my-1 px-1 py-2 mx-lg-4  mx-md-2 rounded" name="ftbtn">Feedback  Now!</button>
     
      </div>
      </form>
     </div>
    </div>
    <p class="text-center mt-1"><span style="color:#12AD2B;">© 2023</span> Asim Textiles. All rights reserved. Powered By Asim Textiles.</p>
    </div>
     <!-- for whtsapp -->
<div >
  
  <a  href="https://wa.me/+923027000733" class="whtsapp text-decoration-none"><button class="btn "><i class="bi bi-whatsapp text-light fs-2"></i></button>
  </a>
  </div>
  <!-- whtsapp ends -->
  
    <?php
  include "./admin/connection.php";
   if(isset($_POST['ftbtn'])){
    $ftname=$_POST['ftname'];
    $ftfeedback=$_POST['ftfeedback'];
    $sql="INSERT INTO feedback(ftname,ftfeedback) VALUES ('$ftname','$ftfeedback')";
    $insert=mysqli_query($link,$sql);
    echo " <script>alert('helo')</script>";
   }
    ?>