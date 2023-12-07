<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GTS</title>
    </head>
    <body>
        <header>

        </header>
        <main>
       
                <!--LOGIN FORM-->
                <form method="post" action="loginx.php">
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Enter here" required/>
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter here" required/>
                    <input type="Submit" name="Submit" value="Login" />
                  
                </form>
                <?php
        
                if(isset($_SESSION['message']))
              echo $_SESSION['message'];
        
        
      ?>
        </main>
        <footer>

        </footer>
    </body>
</html>