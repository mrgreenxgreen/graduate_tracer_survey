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
        <link rel="stylesheet" href="./assets/css/about.css" />
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
                <div class="about-one">
                    
<img src="./assets/img/data-center.jpg" />
<p>
                            
                            A graduate tracer survey system is a tool used to collect data about the employment outcomes and experiences of graduates. This data can be used to improve the quality of education and training programs, as well as to provide information to students about their post-graduation prospects.
                            <br/>
                            
                            Graduate tracer surveys can be used to collect information on a variety of topics, including:
                            <br/><br/>
                            - Employment status<br/>
                            - Occupation<br/>
                            - Salary<br/>
                            - Job satisfaction<br/>
                            - Skills used in the workplace<br/>
                            - Educational experiences that were most helpful<br/>
                            - Career goals and aspirations<br/><br/>
                           The data collected from graduate tracer surveys can be used to:<br/>
                            <br/>
                            Identify areas where education and training programs can be improved
                            <br/>
                            Provide students with real-world information about the job market
                            <br/>
                            Help students to make informed decisions about their post-graduation plans
                            <br/>
                            Track the success of graduates over time
                            <br/>
                            Graduate tracer surveys are an important tool for universities, colleges, and other educational institutions. They can help to ensure that graduates are well-prepared for the workforce and that they are able to achieve their career goals.
                            <br/>
                            <br/>
                            A government agency could use the data to identify trends in the job market and to develop policies to support graduates.
                            Overall, graduate tracer surveys are a valuable tool for improving the quality of education and training, as well as for providing information to students and graduates.
                            </p>

</div>

            </div>
            <div class="main-divider"></div>
            <div style="display:flex;width:100%;justify-content:center;">
            </div>
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