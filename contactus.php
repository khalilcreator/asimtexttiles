<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us </title>
    <link rel="stylesheet" href="asimtextiles.css">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- <link rel="shortcut icon" type="image/jpg" href="/images/news2.png"/> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
        /* @import url('http://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap'); */

section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Poppins',sans-serif;
   

}
section::before
{
    content: '';
    position: absolute;
    top: 10;
    left: 0;
    width: 50%;
    height: 100%;
}

.contact
{
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
}

.contact .contactInfo
{
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #12AD2B;
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 25px rgba(0,0,0,0.15); 
    border-radius: 22px;
}

.contact .contactInfo h2
{
    color: #fff;
    font-size:24px;
    font-weight: 500;
}

.contact .contactInfo ul.info 
{
   position: relative;
   margin: 20px 0; 
}

.contact .contactInfo ul.info li
{
   position: relative;
   list-style: none;
   display: flex;
   margin: 20px 0;
   cursor: pointer;
   align-items: flex-start;
}

.contact .contactInfo ul.info li span:nth-child(1)
{
    width: 30px;
    min-width: 30px;
}

/* for gmail */
.contact .contactInfo ul.info li span a
{
    color: #fff;
    text-decoration: none;
    width: 30px;
    min-width: 30px;
    
}

.contact .contactInfo ul.info li span:nth-child(1) img
{
    max-width: 100%;
    filter: invert(1);
}

.contact .contactInfo ul.info li span:nth-child(2)
{
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
}

.contact .contactInfo ul.sci
{
    position: relative;
    display: flex;
}

.contact .contactInfo ul.sci li
{
   list-style: none;  
   margin-right: 15px;
}

.contact .contactInfo ul.sci li a
{
   text-decoration: none;
}

.contact .contactInfo ul.sci li a img
{
   filter: invert(1);
}

.contact .contactForm
{
    position: absolute;
    padding: 70px 50px;
    padding-left: 250px;
    margin-left: 150px;
    width: calc(100% - 150px);
    height: 100%;
    background: #fff; 
    box-shadow: 0 50px 50px rgba(0,0,0,0.25);
    border-radius: 22px;
}

.contact .contactForm h2
{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}

.contact .contactForm .formBox
{
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}

.contact .contactForm .formBox .inputBox
{
    position: relative;
    margin-bottom: 35px;
}

.contact .contactForm .formBox .inputBox.w50
{
    width: 47%;
}

.contact .contactForm .formBox .inputBox.w100
{
    width: 100%;
}

.contact .contactForm .formBox .inputBox input,
.contact .contactForm .formBox .inputBox textarea 
{
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    outline: none;
    border-bottom: 1px solid #777;
}

.contact .contactForm .formBox .inputBox textarea 
{
    height: 120px;
}

.contact .contactForm .formBox .inputBox span 
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 18px;
    font-weight: 300;
    transition: 0.3s;
}

.contact .contactForm .formBox .inputBox input:focus ~ span,
.contact .contactForm .formBox .inputBox input:valid ~ span,
.contact .contactForm .formBox .inputBox textarea:focus ~ span, 
.contact .contactForm .formBox .inputBox textarea:valid ~ span
{
    transform: translateY(-20px);
    font-size:  12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #095a55;
    font-weight: 500;
} 

/* Css for the submit button */
.contact .contactForm .formBox .inputBox input[type="submit"]         
{
    position: relative;
    cursor: pointer;
    background: #12AD2B;
    border-radius: 20px;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;

}

.contact .contactForm .formBox .inputBox input[type="submit"]:hover{
    background: black;
    transition: background-color 2s ease;
}

/* make the form responsive */
@media (max-width: 1200px)
{
    .contact
    {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }

    .contact .contactInfo
    {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
    }

    .contact .contactForm
    {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
        border-radius: 0px;
    }
}

@media (max-width: 991px)
{
    section
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #12AD2B;
    }

    section::before
    {
        display: none;
    }

    .contact
    {
        display: flex;
        flex-direction: column-reverse;
    }

    .contact .contactForm
    {
        width: 100%;
        height: auto;
        border-radius: 0px;
    }

    .contact .contactInfo
    {
        width: 100%;
        height: auto;
        flex-direction: row;
        border-radius: 0px;
    }
    .contact .contactInfo ul.sci
    {
       position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
    }
}

@media (max-width: 600px)
{
    .contact .contactForm
    {
        padding: 25px;
    }

    .contact .contactInfo{
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }

    .contact .contactInfo ul.sci
    {
        margin-top: 40px;
    }

    .contact .contactForm .formBox .inputBox.w50
    {
        width: 100%;
    }
}
    </style>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
     <div>
      <?php include "navbar.php"; ?>
     </div>
     <h1 class="text-center mb-5  py-5 text-light display-4 fw-bolder display-5" style="background-color:#13AD1B;">Contact Us</h1>
     <?php

if(isset($_POST['submit'])){
include "./admin/connection.php";
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    $contact = mysqli_query($link,"INSERT INTO contact (fname,lname,email,mobile,message) VALUES ('$fname','$lname','$email','$mobile','$message') ");
    if($contact){
        echo"<script>alert('Thanks for contacting us we will reach you out soon!');
        window.location.href='index.php';
        </script>";
         
    }
}


?>

     <div>
        <section>
            <div class="contact">

                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info mt-5">
                            <li>
                                <span><img src="https://corvitfsd.com/photos/location.png"></span>
                                <span>Office No.1482,<br>
                                     Near Awan Chowk<br>
                                     Faisalabad</span>
                                </span>
                            </li>
                            <li class="mt-3">
                                <span><a href="mailto:corvitf@gmail.com"><img src="https://corvitfsd.com/photos/mail.png"></a></span>
                                <!-- <span>nassosanagn@gmail.com</span> -->
                                <span><a href="mailto:corvitf@gmail.com">asimtextile59@gmail.com</a></span>
                            </li>
                            <li class="mt-4">
                                <span><a href="tel:+92345 6789765" class="text-decoration-none text-light"><img src="https://corvitfsd.com/photos/call.png"></span>
                                <span>+92302-7000733</span></a> 
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><img src="https://corvitfsd.com/photos/1.png"></a></li>
                        <li><a href="#"><img src="https://corvitfsd.com/photos/3.png"></a></li>
                        <li><a href="#"><img src="https://corvitfsd.com/photos/2.png"></a></li>
                        <li><a href="#"><img src="https://corvitfsd.com/photos/5.png"></a></li>
                        
                    </ul>
                </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <form action="#" method="post">
                        <div class="formBox">
                            <div class="inputBox w50">
                                <input type="text" name="fname" required>
                                <span>First Name</span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="lname" required>
                                <span>Last Name</span>
                            </div>
                            <div class="inputBox w50">
                                <input type="email" name="email" required>
                                <span>Email Address</span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="mobile" required>
                                <span>Mobile Number</span>
                            </div>
                            <div class="inputBox w100">
                                <textarea required name="message"></textarea>
                                <span>Write your message here...</span>
                            </div>
                            <div class="inputBox w100">
                                <input type="submit" value="Send" name="submit">
                            </div>
                        </form>    
                    </div>
                </div>
                    
                    
             
        </section>
</div>
  <!-- footer -->
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 
 </body>
 </html>
    </body>
</html>