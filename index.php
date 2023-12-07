<?php
session_start();


?>


<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GTS</title>

        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/footer.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />

        <script src="./assets/js/heading.js" ></script>
    </head>
    <body>
        <header>
           <!-- <div class="top">
                <div>
                    =
                </div>
                <div>
          
               </div>
            -->
            </div>
            <div class="hero">
                <div style="display:flex;align-items:center;gap:1em;">
                  <img src="./assets/img/logo1.png" height="50" width="50" alt="logo" />
                  <h1 style="color: #00cc00;"> <span style="color:#3366cc;">Graduate </span> Tracer Survey System</h1>
                </div>
                <div style="display:flex;flex-direction:column;">
                  <div><i class="fa-brands fa-square-facebook" style="color:blue;"></i>facebook</div>
                  <div><i class="fa-brands fa-square-twitter" style="color:#3366cc;"></i>Twitter</div>
                  <div><i class="fa-brands fa-square-instagram"style="color:purple;"></i>Instagram</div>
                </div>
            </div>
            <nav>
                <div>
                <i class="fa-solid fa-microchip"></i>
                    <a href="index.php">GTSS</a>
                </div>  
                <div class="nav-menu">
                    <div>
                    <i class="fa-solid fa-house"></i>
                        <a href="index.php">Home</a>
                    </div>
                    <div>
                    <i class="fa-solid fa-book"></i>
                        <a href="about.php">About</a>
                    </div>
                   
                    <div>
                    <i class="fa-solid fa-cart-plus"></i>
                        <a href="transaction.php">Survey</a>
                    </div>
                    <div>
                    <i class="fa-solid fa-book"></i>
                        <a href="brgy.php">Yearbook</a>
                    </div>
                    <div>
                      <i class="fa-regular fa-newspaper"></i>
                       <a href="news.php"> News  </a>
                    </div>
                   
                    <div>
                    <i class="fa-solid fa-question"></i>
                        <a href="inquiry.php" >Inquiry </a>
                    </div>

                </div>
                <div class="nav-account">
                    
                 
                    <?php
                 

                    if(isset($_SESSION['sessionUsername'])){
                      echo '<div>
                                     
                                  <div class="dropdown">
                                  <button 
                                      onclick="myFunction()" 
                                      class="dropbtn"
                                      style=" background-color: white;
                                      color: #333;
                                      border-radius:2px;
                                      padding: 5px;
                                      font-size: 15px;
                                      border: none;
                                      cursor: pointer;
                                      "
                                  >'.$_SESSION['sessionUsername'].'  <i class="fa-solid fa-user"></i></button>
                                  <div id="myDropdown" class="dropdown-content">
                                    <a href="#home">View Profile</a>
                                    <a href="#about">Manage Account</a>
                                    <a href="#about">Help</a>
                                    <a href="logout.php   ">Logout</a>
                                  </div>
                                  
                                </div>
                             
                               
                             
                      </div>';
                  }
                
                else{
                    echo "<div><a href=\"register.php\"> Sign Up </a> <a href=\"#\">| </a><a href=\"login.php\">Sign In </a></div>
                ";
              
                }
                echo "  <i class=\"fa-solid fa-user\"></i>";

              
                ?>
                </div>
            </nav>
          
        </header>
        <main>
            <!-- main-header -->
            <div class="main-header">
                <div>
                    <h1 id="main-title"> GTSS <br/><i style="font-size:60px;"> A Graduate Tracer Survey System for Dr. Emilio B. Espinosa, Sr. Memorial State College of Agriculture and Technology</h1>
                    <i>
                    <br/>
                    <h1>Ensuring data quality and integrity</i> </h1></i>
                     <button id="transact-now-btn"><a href="./survey/survey.html" style="text-decoration:none;color:blue;" >START SURVEY </a></button>
                </div>
            </div>
            <!-- main-announcements -->
           
            <div class="main-announcements">
            <h1>Latest Events & Stories</h1>  
            <br/>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="./assets/img/gts2.webp" style="width:100%;  " >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="./assets/img/gts1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="./assets/img/gts3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="./assets/img/gts4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="./assets/img/gts5.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="./assets/img/gts6.webp" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">          
      <img class="demo cursor" src="./assets/img/gts2.webp" style="width:100%" onclick="currentSlide(1)" alt="Free Medical Services to our residents in Brgy. Cayabon">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/gts1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Department of Agrarian Reform - Masbate awards CLOA to landless farmers">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/gts3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Cash assistance to victims of COVID">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/gts4.jpg" style="width:100%" onclick="currentSlide(4)" alt="DILG Region 5 visits Municipality of Milagros">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/gts5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Improving support to our Cattle industry">
    </div>    
    <div class="column">
      <img class="demo cursor" src="./assets/img/gts6.webp" style="width:100%" onclick="currentSlide(6)" alt="LGU-Milagros strengthen ties with DILG">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
Graduate tracer surveys are an important tool for universities, colleges, and other educational institutions. They can help to ensure that graduates are well-prepared for the workforce and that they are able to achieve their career goals.


  ...
</p>
<h3 ><a href="news.php" style="color:white;"> View details >> </a></h3>

            </div>
            <!--end of main announcements -->

            <!-- featured transactions -->
            <div class="main-featured-transactions">
                   
              <div class="x"> 1009 <br/> Users</div> <div class="main-featured-details"> Registration</div> 
              <div class="x"> 1643<br/> Survey per month</div> <div class="main-featured-details"> Survey</div> 
              <div class="x"> 3874 <br/> Inquiries per month</div> <div class="main-featured-details">Inquiry</div> 
              <img src="./assets/img/graphic1.jpg" />
              <p>
               
    </p>
  
<div style="margin:auto;display:flex;justify-content:center;">
<button style="padding:.5em;border-radius:15px;font-size:30px;background-color:yellow;font-weight:bold;"> 
  <a href="./survey/survey.html" style="text-decoration:none;color:blue;">START SURVEY</a> 
</button>
</div>
  </div>

</p>
               
            </div>
            <!--testimonials -->
            <div class="main-divider"></div>
            <div class="main-testimonials">
              <img src="./assets/img/testimonial3.jpg" height="350" width="600" />
              <img src="./assets/img/testimonial2.jpg" height="350" width="600" />
              <img src="./assets/img/testimonial1.jpg" height="350" width="600" />
            </div>
            <div class="main-divider"></div>

        </main>

        <footer>
      
        
       
       
        
        <div style="text-align:center;">
          Republic of the Philippines <br/>
          Region V - Bicol  <br/>
          Province of Masbate <br/>
           Municipality of Mandaon <br/><br/>
           Contact:<br/><br/>
           +639458201903  <br/>
          debesgtss@debesmscat.com.ph
        
       
        
          Copyright ©2023<br/> 
          All rights reserved<br/><br/>
          Developed by: <br/>Mr. Harvey Ubac

        </div>
       
        </footer>
    </body>
</html>
