<?php
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>CBTMS new version</title>
        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/footer.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
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
                </div>            </div>
            <nav>
                <div>
                <i class="fa-solid fa-microchip"></i>
                    <a href="index.php">CBTMS</a>
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
                        <a href="transaction.php">Transaction</a>
                    </div>
                    <div>
                    <i class="fa-solid fa-book"></i>
                        <a href="brgy.php">Barangays</a>
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
                    echo "  <i class=\"fa-solid fa-user\"></i>";
                if(isset($_SESSION['sessionUsername'])){
                    echo "<p onclick=\"alert()\" >".$_SESSION['sessionUsername']." </p>";
                }
                else{
                    echo "<div><a href=\"register.php\"> Sign Up </a> <a href=\"#\">| </a><a href=\"login.php\">Sign In </a></div>
                ";
              
                }
               
              
                ?>
               <div>Settings</div>  
                </div>
            </nav>
            
          
        </header>
        <main>
            <h1> inquiry</h1>
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
<body>
</html>