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
        <link rel="stylesheet" href="./assets/css/brgy.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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

            <div class="about-container">
                <div class="about-one" >
                <div style="color:white;text-align:right;">
                    <h6>.</h6>  
                    </div>
                    <div class="main-divider"></div>

                    <table style="text-align:center;margin:auto;">
                        <tr>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2022</div></a> </td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2021</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2020</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2019</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2018</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2017</div></a></td>
                            
                        </tr>
                        <tr>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2016</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2015</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2014</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2013</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2012</div></a></td>
                            <td><a href="#"><div class="brgy-avatar"><img src="./assets/img/logo1.png" style="width:100%;" />2011 </div></a></td>
                        
                        </tr>
                      
                </table>
                </div>
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
<body>
</html>