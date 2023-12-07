<!DOCTYPE html>
    <html>
        <head>
            <title>GTS</title>
            <style>
                *{
                    padding:0;
                    margin:0;
                    box-sizing:border-box;
                    font-family: sans-serif;
                }
                nav{
                    background-color:rgb(1, 87, 21);
                    display:flex;
                    justify-content: space-between;
                    padding: 15px;  
                    box-shadow: 0px 0px 10px 2px black;
                    position:absolute;
                    width:100%;
                    color:white;
            
                }
                .nav-menu{
                    display:flex;
                    gap:2em;
                }
                .nav-menu a{
                    text-decoration: none;
                    color:white;
                }
                .nav-settings{
                    display:flex;
                    gap:2em;
                }
                .nav-settings a{
                    text-decoration: none;
                    color:white;
                }

                main{
                    display:flex;
                    justify-content:center;
                    
                }
                .main-home{
                   
                    width: 100%;
                    max-width: 1024px; 
                    height: 100vh;
                    display:flex;
                    flex-direction: column;
                    align-items: center;
                }
                .main-heading{
                    margin-top:15em;
                    color:yellow;
                    text-shadow: 0px 0px 2px black;
                    display:flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .main-heading h1{
                    font-size: 80px;
                }
                .main-featured{
                    background-color:rgb(1, 87, 21);
                    padding:15px;
                    color:white;
                    margin-top:8em;
                    width:100%;
                    height:450px;
                    display:flex;
                    flex-direction: column;
                    align-items: center;
                    
                }
                #StartSurvey{
                    width:300px;
                    margin:20px;
                    padding:10px;
                    border-radius: 15px;
                    font-size:35px;
                    color:white;
                    background-color: rgb(195, 3, 3);
                    border:none;
                    box-shadow:0px 0px 10px 4px rgb(252, 28, 28);
                }
                #StartSurvey a{
                    text-decoration: none;
                    color:white;
                    
                }
               
                #StartSurvey:hover{
                    color:pink;
                    background-color: rgb(255, 0, 0);
                    
                }
                body{
                    background-image: linear-gradient(to right, #ffe0b3,  #fff5e6);
                }

            </style>

        </head>
        <body>
            <header>
                <nav>
                    <div>
                        GTS
                    </div>
                    <div class="nav-menu">
                        <div><a href="index.php">Home</a></div>
                        <div><a href="about.php">About</a></div>
                        <div><a href="contact.php">Contact</a></div>
                    </div>
                    <div class="nav-settings">
                        <div><a href="login.php">Login</a></div>
                        <div>&#9776</div>
                    </div>
                </nav>
            </header>
            <main>
                <div class="main-home">
                    home
                    <img src="debesgraduate-cover.jpg" alt="Girl in a jacket" width="1024" height="600" style="z-index: -2;position:absolute;">
                    <div class="main-heading">
                        
                        <h1>Graduate Tracer Survey </h1>
                        <h4>Dr. Emilio B. Espinosa, Sr. Memorial State College of Agriculture and Technology's way for collecting data <br/> about the employment outcomes and experiences of its graduates.</h4>
                        
                    </div>
                    <div class="main-featured">
                        <h4>Click the button below to commence the survey.</h4>
                        <a href="./survey/survey.html"><button id="StartSurvey">Start Survey</button></a>

                    </div>
                   
                </div>
            </main>
            <footer>

            </footer>
        </body>
        
    </html>