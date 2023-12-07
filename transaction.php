<?php
    session_start();
    include_once("connection.php");
    if(isset($_SESSION['sessionId'])){
        $client_brgy = $_SESSION['client_brgy'];
        $transaction_result = mysqli_query($mysqli, "SELECT * FROM transactions WHERE transaction_brgy = '$client_brgy' AND active=1");
    }
   
    $t_id = 0;
    $trans_checkout = "";
    if(isset($_SESSION['sessionId'])){
        $t_id = $_SESSION['sessionId'];
        $trans_checkout = mysqli_query($mysqli, "SELECT DISTINCT transaction_checkout_id,transaction_name,transaction_price,transaction_max,client_id FROM transaction_checkout WHERE client_id = $t_id");
    }
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
        <!-- HEADING: NAVIGATION BAR -->
        <header>
            </div>
            <div class="hero">
            <h1 style="color: #00cc00;"> <span style="color:#3366cc;">Graduate </span> Tracer Survey System</h1>
            <div style="display:flex;flex-direction:column;">
                  <div><i class="fa-brands fa-square-facebook" style="color:blue;"></i>facebook</div>
                  <div><i class="fa-brands fa-square-twitter" style="color:#3366cc;"></i>Twitter</div>
                  <div><i class="fa-brands fa-square-instagram"style="color:purple;"></i>Instagram</div>
                </div>            </div>
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

        <!-- MAIN BODY INI DIDI -->
        <main>
            <!-- CONTAINER DIV -->
            <div class="transaction-box">

            
            <div>
                <?php if(isset($_SESSION['sessionUsername'])){
                    echo "<img src=\"assets/img/transaction-image.jpg\" style=\"width:450px;padding-top:5em;\" /> ";

                }else{
                    echo "<img src=\"assets/img/transaction-image.jpg\" style=\"width:900px;\" /> ";

                }
                ?>
            </div>
            
           
            <?php
                if(isset($_SESSION['sessionUsername'])){
                    echo " <div style=\"display:flex;justify-content:center;\">
                            <div style=\"display:flex;gap:2em;margin:1em;\">
                                <button style=\"width:140px;margin:auto;padding:1em;\">
                                    <a href=\"transaction-pending.php\" style=\"text-decoration:none;color:blue;\"> PENDING TRANSACTIONS</a>
                                </button> 
                                <button style=\"width:100px;padding:1em;margin:auto;\">
                                    <a href=\"transaction-history.php\" style=\"text-decoration:none;color:blue;\"> VIEW HISTORY</a>
                                </button> 
                                <button style=\"width:100px;padding:1em;margin:auto;\">
                                    <a href=\"transaction-updates.php\" style=\"text-decoration:none;color:blue;\"> LATEST UPDATES</a>
                                </button> 
                            </div>
                        </div>";
                }
                else{
                    echo "<h1 style=\"color:red;margin:10px;\">
                                \"Please <button style=\"font-size:30px;padding:10px;border-radius:15px;background-color:yellow;border:none;\"><a href=\"login.php\" style=\"text-decoration:none;color:blue;font-weight:bold;\">sign in</a></button> to continue transaction\"
                            
                            </h1>
                ";
                }             
            ?>
              
            <div class="transaction-container">
        
                <div class="transaction">
                <?php 
                if(isset($_SESSION['sessionId'])){
                    echo
                    "
                <h4>List of Available Transactions</h4>
                    <table>
                        <tr>
                            <th> Name of transaction</th>
                            <th> Fee </th>
                            <th> Description </th>
                            <th> Option </th>
                        </tr>
                        ";
                }
                ?>
                        <?php
                            if (isset($_SESSION['sessionId'])){
                                    while ($trans_res = mysqli_fetch_array($transaction_result)){
                                        $transaction_id = $trans_res['transaction_id'];
                                        $transaction_name = $trans_res['transaction_name'];
                                        $transaction_price = $trans_res['transaction_price'];
                                        $transaction_description = $trans_res['transaction_description'];
                                        echo "<form method=\"post\" action=\"transaction-add.php\">
                                                <tr> 
                                                    <td> 
                                                        <input type=\"text\" name=\"tName\" value=\"".$transaction_name."\" readonly />
                                                    </td>";
                                        echo "<td >Php <input type=\"text\" name=\"tPrice\" value=\"".$transaction_price.".00\" readonly style=\"width:100px;\"/></td>";
                                        echo '<td style="width:400px;word-wrap: break-word;">'.$transaction_description.'</td>';
                                        echo "<input type=\"hidden\" name=\"tId\"  value=\"".$t_id."\" </td>";
                                        echo "<td> <input type=\"submit\" name=\"TransactionSubmit\" value=\"Add\" style=\"color:blue;\"> </td>
                                            </tr></form>";
                                    }
                            }
                        ?>
                    </table>
                </div>
              
                <div class="transaction-checkout">
                <?php 
                if(isset($_SESSION['sessionId'])){
                    echo
                    "
                <h4>Added Transaction/s</h4>
                        <table>
                            <tr>
                                <th>Request</th>
                                <th>Quantity</th>   
                                <th>Fee</th>
                              
                                <th>Options</th>
                            </tr>
                            <form action=\"checkout.php\" method=\"post\" >
                        ";}
                    ?>
                                <?php
                                    $totalCost = 0;
                                    $input_transaction_name = 999;
                                    $input_transaction_price = 99;
                                    if(isset($_SESSION['sessionId'])){
                                    while ($t_checkout = mysqli_fetch_array($trans_checkout)){
                                        if($t_checkout['client_id'] == $_SESSION['sessionId']){
                                            ++$input_transaction_name;
                                            ++$input_transaction_price;
                                            $totalCost += $t_checkout['transaction_price'];
                                            echo "<tr> 
                                                    <th> 
                                                        <input type=\"text\" name=\"".$input_transaction_name."\" value=\"".$t_checkout['transaction_name']."\" readonly />
                                                    </th>
                                                    
                                                    <td> 
                                                        <input type=\"number\" value=\"1\" min=\"1\" max=\"".$t_checkout['transaction_max']."\"  style=\"width:50px;\" readonly/>  
                                                    </td>  
                                                    <td> 
                                                        <input type=\"text\" name=\"".$input_transaction_price."\" value=\"Php ".$t_checkout['transaction_price'].".00\" readonly/>
                                                    </td>
                                                   
                                                    <td>
                                                        <input type=\"hidden\" value=\"".$_SESSION['sessionUsername']."\" name=\"client_name\" />
                                                        <input type=\"hidden\" value=\"".$_SESSION['sessionNumber']."\" name=\"client_number\" />
                                                        <input type=\"hidden\" value=\"$input_transaction_price\" name=\"max_price\" />
                                                        <input type=\"hidden\" value=\"$input_transaction_name\" name=\"max_name\" />
                                                        <a href=\"remove.php?id=".$t_checkout['transaction_checkout_id']."\"
                                                             style=\"text-decoration:none;background-color:light-gray;color:red;\">Remove</a>
                                                        <br/>
                                                    </td>
                                                </tr>";

                                            }
                                        }
                                     }
                                ?>
                                </tr>
                                <?php
                                //checks if user is logged in
                                  if(isset($_SESSION['sessionId'])){
                                //if yes display this
                               echo" <tr>
                                    <td></td>
                                    <td> Payment method <br/>
                                            <select name=\"payment_method\">
                                                <option value=\"Cash on Delivery\" selected> Cash on delivery </option>
                                                <option value=\"Credit Card\"> Credit Card </option>
                                                <option value=\"G-cash\"> G-cash </option>
                                                <option value=\"Bayad Center\"> Bayad Center </option>
                                            </select>
                                        </td>
                                    <td> TOTAL:  
                                    <input type=\"text\" name=\"total_cost\"  value=\"Php".$totalCost.".00\"  readonly style=\"width:150px;padding:10px;\"/>
                                    <td> <input type=\"submit\" value=\"CHECK OUT\" name=\"SubmitCheckout\" style=\"color:green;\"> 
                            </form>
                        </tr>";
                                  }
                        ?>
                        </table>
                </div>
            </div>
               
        
            </div>
            <!-- END OF CONTAINER BOX -->
           
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