<!-- <div class="login-signup-buttons fixed-top" style="background-color: black; text-align: right; padding: 2px;  ">
  <a href="/LOGIN/login.php" class="text-light me-8" style="margin-right:13px">
    Login <i class="bi bi-person"></i>
  </a>
  <a href="/LOGIN/signup.php" class="text-light me-5">
    Sign Up <i class="bi bi-person-plus"></i>
  </a>
</div> -->
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

    <title>MY PAGE</title>
  </head>
  <style>
    .about-us-container {
      background-image: url('about1.png'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .about-us-text {
      font-size:5rem;
      
      border-radius: 20px;
      text-align: center;
    }
    .quote {
    text-align: left;
  }

  .image {
    text-align: right;
  }
  .quote h2 {
    margin-top: 0;
  }
   .quote {
    color: #111111;
    font-style: italic;
    line-height: 30px;
    padding-top: 12px;
    margin-bottom: 25px;
   
    
}
.case-image {
  position: relative;
  overflow: hidden;
  
}
 

.case-image img {
  max-width: 100%;
  height: auto;
  /* transition: transform 0.3s, box-shadow 0.3s; */
 
  opacity: 1;
  display: block;
  backface-visibility: hidden;
  
  
}

.case-image:hover img {
  transform: scale(1.05);
  /* transition: background-color 0.3s; */
  opacity: 0.5; */
 /* background-color:rgba(0,0,0,0.5); */ */ */
}

.social-icons {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
   opacity: 0; 
  transition: opacity 0.3s;
}

.case-image:hover .social-icons {
  opacity: 1;
}

.social-icons a {
  display: inline-block;
  margin: 5px;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  text-align: center;
  line-height: 24px;
  transition: background-color 0.3s;
  /* transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); */
  
}

.social-icons a:hover {
  background-color: #000;
}
.slide {
  position: relative;
  width: 100%;
}

.s-image {
  display: block;
  width: 100%;
  height: auto;
}
#portfolio {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity 1s ease, transform 0.5s ease;
}

#portfolio.active {
  opacity: 1;
  transform: translateY(0);
}
.s-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: black;
  /* opacity:0.7; */
}
.slide:hover .s-overlay {
  opacity:0.7;
  
}

.s-text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
  .section {
    background: #f3f2ee;
}
.about-section {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
 

  </style>
  <body>
    <div class="login-signup-buttons fixed-top" style="background-color: black; text-align: right; padding: 2px;  ">
  <a href="/LOGIN/login.php" class="text-light me-8" style="margin-right:13px">
    Login <i class="bi bi-person"></i>
  </a>
  <a href="/LOGIN/signup.php" class="text-light me-5">
    Sign Up <i class="bi bi-person-plus"></i>
  </a>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-right shadow-lg" style="margin-top:25px">
  <div class="container-fluid" style="margin-bottom:2px">
 
    <a class="navbar-brand" style="margin-top:4px; margin-left:110px; font-size:30px; font-weight:60px;" href="/LOGIN"><strong>E-<i Style="color: #e5e504;">Comm</i><span Style="color:black; font-size:30px;">.</span></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:30px">
      <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LOGIN/about.php">About</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="/LOGIN/products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LOGIN/Contact.php">Contact</a>
        </li>
      </ul>
      <!-- Your search form or other content can go here -->
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form> 
    </div>
  </div>
</nav>

<div class="about-us-container">
  <div class="about-us-text">
    <h1 style="font-size:85px; margin-right:600px; color:#b9b912"><i>About Us</i></h1>
   
  </div>
</div>

    
  <br>
  <br>
  <br>
  <div id="portfolio" class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h4><strong>MEET OUR</strong></h4><br>
      <h1  style="letter-spacing:2px; font-size:40px;"><strong>Best <span style="color:#e5e504";>Consulting </span>  Team</strong></h1>
      
      <hr>
      <br>
      <br>
    </div>
  </div>
  <br>
  <br>
  
  <div class="row">
    <div class="col-sm-12">
        
            <div class="row">
              <div class="col-sm-4" >
              <div class="case-image">
                <img src="men1.webp" alt="Image 1" style="width:350px; height:350px">
                <div class="social-icons">
                <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
                
              </div>
              <br>
              <br>
              <h5 class="image-description text-center" style="letter-spacing:7px;">ALI KHAN</h5>
              <p style="margin-left:120px; color:yellow; "><strong>HR MANAGER</strong></p>
</div>
</div>

              <div class="col-sm-4">
              <div class="case-image">
                <img src="men1.webp" alt="Image 2"style="width:350px; height:350px">
                <div class="social-icons">
                <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
                
              </div>
              <br>
              <br>
              <h5 class="image-description text-center" style="letter-spacing:7px;">AHMAD KHAN</h5>
              <p style="margin-left:90px; color:yellow;";><strong>HEAD OF DEPARTMENT</strong></p>
</div>
</div>
              <div class="col-sm-4">
                <div class="case-image">
                <img src="men1.webp" alt="Image 3"style="width:350px; height:350px">
                <div class="social-icons">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
           
          </div>
          <br>
          <br>
              <h5 class="image-description text-center" style="letter-spacing:7px;">ZULFIQAR HUSSAIN</h5>
              <p style="margin-left:90px; color:yellow;";><strong>MANAGING DIRECTOR</strong></p>
            </div>
</div>
          </div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<br>
<br>
<br>
<section class="about-section">
    <div class="container-fluid" >
      <div class="row ">
        <div class="col-md-6"style="padding:0px;">
          <div class="quote text-center" style="margin-top:130px" >
            <h1 style="font-size:50px"><strong>About <span style="color:yellow" >Us</span></strong></h1>
            
            <p style="margin-top:60px"> <span style="font-size:90px; color:yellow">"</span>My vision is to build an e-commerce ecosystem <br> that allows consumers
               and businesses to <br>do all aspects of business online</p><span style="font-size:90px; margin-left:350px; color:yellow">"</span>
          </div>
        </div>
        <div class="col-md-6"style="padding:0px;" >
          <div class="slide">
        
            <img src="decorative-cosmetics-accessories-sunglasses-hat-white-table_176420-11865.avif" alt="About Us Image" class="s-image" style="height:580px">
            <div class="s-overlay">
          <div class="s-text">
          <p style="margin-top:60px"> <span style="font-size:90px; color:yellow">"</span>My vision is to build an e-commerce ecosystem that allows consumers
               and businesses to do all aspects of business online</p><span style="font-size:90px; margin-left:350px; color:yellow">"</span>
          </div>
           </div>
               
         
          </div>
          </div>
        </div>
      </div>
      </section>
      <div class="container-fluid" style="max-width:100%; padding:0;" >
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: black"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              E-COMM
            </h6>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magnam laboriosam dicta unde eveniet, 
               Temporibus. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">CLOTHES</a>
            </p>
            <p>
              <a class="text-white">SHOES</a>
            </p>
            <p>
              <a class="text-white">JEWELLERY</a>
            </p>
            <p>
              <a class="text-white">COSMATICS</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">My Account</a>
            </p>
            <p>
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a class="text-white">Help</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-white" 
                 >e-comm.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const portfolioSection = document.getElementById('portfolio');
  const triggerOffset = 200; // Adjust this value to trigger the animation earlier or later

  function checkScroll() {
    const windowHeight = window.innerHeight;
    const triggerTop = portfolioSection.getBoundingClientRect().top;

    if (triggerTop < windowHeight - triggerOffset) {
      portfolioSection.classList.add('active');
      window.removeEventListener('scroll', checkScroll);
    }
  }
  
  window.addEventListener('scroll', checkScroll);
  checkScroll(); // Check on page load
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    </body>
</html>