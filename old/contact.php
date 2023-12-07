



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
                main{
                    display:flex;
                    justify-content:center;
                    
                }
                .main-home{
                    background-color:rgb(1, 87, 21);
                    width: 100%;
                    max-width: 1024px; 
                    height: 100vmax;
                    display:flex;
                    flex-direction: column;
                    align-items: center;
                    padding:15px;
                    
                }
                .main-content{
                    margin-top:5em;
                    color:white;
                  //  background-color: red;
                }
                .main-featured{
                    background-color:rgb(75, 157, 75);
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
                    background-color: red;
                    border:none;
                }
                #StartSurvey a{
                    text-decoration: none;
                    color:white;
                }
                #StartSurvey a:hover{
                    color:pink;
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
                </nav>
            </header>
            <main>
                <div class="main-home">
                    
                        <div class="main-content">
                            
                        
                   
                </div>
            </main>
            <footer>

            </footer>
        </body>
        
    </html>