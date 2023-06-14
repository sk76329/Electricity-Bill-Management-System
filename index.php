<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/753efffa4c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css\style.css">
      
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
    <title>Electricity Bill Payment System</title>
</head>
<body>
    <!--start nav bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
        <a  href="index.html" class="navbar-brand" href="#"><img src="images\logo1.png" height="80"></a>
        <span class="navbar-text">
        </span>
        <button type="button"class="navbar-toggler collapsed"
        data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="myMenu">
            <ul class="nav navbar-nav custom-nav pl-5 navbar-right">
                <li class="nav-item "><a href="index.php" 
                class="nav-link ">Home</a></li>
                <li class="nav-item"><a href="#" 
                class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="#" 
                    class="nav-link">Contact US</a></li>
            </ul>
        </div>
    </nav><!--end nav bar-->
    <div class="bg-image" style="background-image: url('images/bbb.jpg'); height: 100vh;">
    <div class="text-center p-5" style="margin-top :95px;">
        <h1 class="text-uppercase text-white pt-5 font-weight-bold">Electricity Bill Payment System</h1>
        <p class="font-italic text-white font-weight-bold"> Our Project Electricity Bill System proposes a coputerized collection system which calculates electriity bill automatically
            and it simplifies the task and reduces the paper work.This system automates each and every activity of the manual system and increases its quality.
            The system calculates the current bill,previous pending bill with penalty,etc.</p>
        <?php include("login.php");?>
        <a href="abc.php"class="btn btn-danger  m-5">Sign Up</a>
        
        
    </div>
</div>
  
    <!--start header jumbotron-->
   <!-- <div class="jumbotron" style="background-image: url('images/abc.jpg');">
    <div class="text-center" style="margin-top :200px;">
        <h1 class="text-uppercase text-danger font-weight-bold">E~Bill-Online Electricity Bill Payment System</h1>
        <p class="font-italic font-weight-bold"> Our Project Electricity Bill System proposes a coputerized collection system which calculates electriity bill automatically
            and it simplifies the task and reduces the paper work.This system automates each and every activity of the manual system and increases its quality.
            The system calculates the current bill,previous pending bill with penalty,etc.</p>
        <a href="#"class="btn btn-outline-danger mr-4">Login</a>
        <a href="#"class="btn btn-outline-danger mr-4">Register</a>
    </div>
</div>            End header jumbotron-->
    <div class="container text-center pt-5">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4">
                <a href="#"><i class ="fas fa-umbrella fa-10x    
                    text-success"></i></a>
                <h4 class="mt-4">24X7 Care</h4>
                <p>Happy to help 24X7,call us on 0121</p>
        </div>
        <div class="col-sm-4">
            <a href="#"><i class ="fas fa-mobile-alt fa-10x 
                text-primary"></i></a>
             <h4 class="mt-4">Secure Payment</h4>
             <p>Your money is yours!All refunds come with no 
                 question asked guarantee.</p>
        </div>
        <div class="col-sm-4">
            <a href="#"><i class ="far fa-calendar-check fa-10x text-success"></i></a>
            <h4 class="mt-4">100% Assurance</h4>
            <p>We provide 100%assurance.If you have any issue,
                your money is immediately refunded.
            </p>
            </div>
            
        </div>
</div>
<div class="container text-center pt-5">
    <div class="row mt-4">
        <div class="col-sm-4">
            <a href="#"><i class ="fas fa-code fa-10x 
                text-success"></i></a>
            <h4 class="mt-4">Our Promise</h4>
            <p>Happiness is granted.If we fall short of your expectations, 
                give us  a shout.</p>
    </div>
    <div class="col-sm-4">
        <a href="#"><i class ="fas fa-eye-slash fa-10x 
            text-primary"></i></a>
         <h4 class="mt-4">Online Bill Payment</h4>
         <p>E-Bill to offer you a simple,convenient and 
             secure way to pay your electriity bills</p>
    </div>
    <div class="col-sm-4">
        <a href="#"><i class ="fas fa-suitcase fa-10x text-success"></i></a>
        <h4 class="mt-4">Bill Payment Facilities</h4>
        <p>Net Banking ATMs,Tele Banking or Mobile
            Banking.
        </p>
        </div>
        
    </div>
</div>
<!--Carousal Slider -->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\56.jpeg" class="d-block  w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/abc.jpg" class="d-block  w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images\69.jpg" class="d-block  w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!--End Crausl-->






<!--start team-->
<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Electricity Board</h2>
        <p class="text-center">Currently you can make payment for the following Services</p>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                       <img src="images\62.png" alt="" 
                       class="img-fluid"
                        style="border-radius:100px;">
                        <h4 class="card-title"></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
                <div class="card-body">
                    <img src="images\1.png" alt="" class="img-fluid"
                    style="border-radius: 100px;">
                    <h4 class="card-title"></h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                       <img src="images\11.jpg" alt="" class="img-fluid"
                        style="border-radius: 100px;">
                         <h4 class="card-title"></h4>
                          <p class="card-text">
</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                       <img src="images\24.png" alt="" class="img-fluid"
                        style="border-radius: 100px;">
                         <h4 class="card-title"></h4>
                          <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--end team-->


<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between
  p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Electricity Bill Payment System
            </h6>
            <p>
              Here You Can Use To Pay Electricity Bill Payment.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Our Services
            </h6>
            <p>
              <a href="#!" class="text-reset">Pay The Eletricity Bill</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Online Bill Payment</a>
            </p>
            <p>
              <a href="#!" class="text-reset">24/7 Care</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Secure Payment</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Electricity Board
            </h6>
            <p>
              <a href="#!" class="text-reset">North Bihar Power Distribution</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Mescom</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Bescom</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Reliance</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> TC Palya KR puram Bangalore 560036</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 18000-123</p>
            <p><i class="fas fa-print me-3"></i> 196779-123</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold"
  href="#">Electricity Bill Payment System</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }  </script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>