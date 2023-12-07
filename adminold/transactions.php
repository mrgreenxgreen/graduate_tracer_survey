<?php
    session_start();
    if(!isset($_SESSION['sessionAdminRole'])){
        header("Location:login.php");
    }
    include_once("connection.php");
    $client_brgy = $_SESSION['sessionAdminBrgy'];
    $transaction_result = "";
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
    <!--pagination css -->

    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"?>

        <title>sample data table</title>

        <script src="./assets/js/heading.js" ></script>


    </head>
    <body>
        <header>
        <nav>
                    <div style="color: #00cc00;font-weight:bold;font-size:20px;">
                        <i class="fa-solid fa-bolt"></i>
                        <span style="color:#3366cc;">C</span><span>BTMS</span>
                    </div>
                    <div>  
                        <input type="text" name="SearchBar" placeholder="   Search" style="width:450px;" /> 
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <?php
                        if(isset($_SESSION['sessionAdminRole'])){
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
                                        >'.$_SESSION['sessionAdminUsername'].'  <i class="fa-solid fa-user"></i></button>
                                        <div id="myDropdown" class="dropdown-content">
                                          <a href="#home">View Account</a>
                                          <a href="#about">Subscription</a>
                                          <a href="#about">Help</a>
                                          <a href="logout.php   ">Logout</a>
                                        </div>
                                        
                                      </div>
                                   
                                     
                                   
                            </div>';
                        }
                    ?>
            </nav>
        </header>
        <div class="admin-container">

             <!-- side nav -->
             <div class="admin-sideNav">
                        <div>
                            <hr/>
                            <div><a href="index.php"> <i class="fa-solid fa-gauge-high"></i>Dashboard</a></div>
                            <div><a href="inquiries.php"><i class="fa-solid fa-bullhorn"></i> Announcements</a></div>
                            <div><a href="inquiries.php"><i class="fa-solid fa-message"></i>Inquiries</a></div>

                            <hr/>
                            <div><a href="transactions.php"><i class="fa-solid fa-business-time"></i>Transactions </a> </div>
                            <div><a href="requests.php"><i class="fa-solid fa-signs-post"></i>Requests </a> </div>
                            <div><a href="users.php"><i class="fa-solid fa-users"></i>Clientele</a></div>
                            <hr/>

                            <?php 
                                if(isset($_SESSION['sessionAdminRole']) && $_SESSION['sessionAdminRole']=="LGU-ADMIN"){
                                    echo "
                                    <div><a href=\"admin.php\"> <i class=\"fa-solid fa-users-gear\"></i>Administrators </a></div>
                                    <div><a href=\"analytics.php\"><i class=\"fa-solid fa-chart-simple\"></i>Analytics</a></div>
                                    <div><a href=\"brgy.php\"><i class=\"fa-solid fa-sitemap\"></i> Barangay</a></div>
                                    ";
                                }
                                
                            ?>
                       
                        
                        </div>
                      
                        <div>
                        <hr/>   
                            <div><a href="#"><i class="fa-solid fa-moon"></i>Dark Mode</a></div>
                            <div><a href="#"><i class="fa-solid fa-lightbulb"></i>Light Mode</a></div>
                            <div><a href="settings.php"><i class="fa-solid fa-gear"></i>Settings</a></div>

                        </div>
                    </div>

            <!-- DATA BOX -->
            <!-- This div / "BOX" contains the main content of each page -->
            <div class="data-box">
                <h1><i class="fa-solid fa-business-time"></i>  Transactions</h1>
                                <br/>
                <!--ADD NEW -->
                <?php
                        if($client_brgy != "MILAGROS"){
         
                            echo '<button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-square-plus"></i> <a href="add_transaction.php" style="text-decoration:none;color:black;">Add Transaction</a> </button>';
                        }
                ?>
                <button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-file-arrow-down"></i> Download as CSV</button>
                <button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-flag"></i> Report problems</button>

                
                <!-- pagination start -->
                        <p><br/></p>
                <table id="example" class="table table-striped" style="width:100%;text-align:left;">
                    
                    <tr>
                        <th>Item No. </th>
                        <th>Availabiliy </th>
                        <th>Barangay </th>
                        <th>Request Type </th>
                        <th>Fee </th>
                        <th>Description </th>
                        <th>Created</th>
                        <th>Last Modified</th>
                       
                        
                        <th>Options </th>
                      
                    </tr>

                    <!-- QUERY DATABASE FOR AVAILABLE TRANSACTION: Brgy-based for brgy. admin, all for LGU-->
                    <?php
                        //echo $_SESSION['sessionAdmin'];
                      
                        if ($client_brgy != "MILAGROS"){
                            $transaction_result = mysqli_query($mysqli, "SELECT * FROM transactions WHERE transaction_brgy = '$client_brgy' AND isDeleted = 0 ORDER BY active DESC");                        
                        }else{
                            $transaction_result = mysqli_query($mysqli, "SELECT * FROM transactions WHERE isDeleted = 0 ORDER BY active DESC");                        
                        }
                        
                        $_counter = 1;
                        while($t_result = mysqli_fetch_array($transaction_result)){
                            //check if loggedin
                            if(isset($_SESSION['sessionAdminRole'])){
                                echo "<tr>
                                        <td>".$_counter.". </td>
                                        <td>" ;
                                        if($t_result['active'] == 1){
                                            $active="ACTIVE";
                                            echo "<p style=\"color:green;\"><b>".$active."</b></p>";
                                        }else{
                                            $active="INACTIVE";
                                            echo "<p style=\"color:#990000;\"><b>".$active."</b></p></td>";

                                        }
                                  echo  "<td>".$t_result['transaction_brgy']." </td>
                                        <td>".$t_result["transaction_name"]." </td>
                                        <td>".$t_result['transaction_price']." </td>
                                        <td style=\"width:400px;\"><small>".$t_result['transaction_description']."</small></td>
                                        <td>".$t_result['created']."</td>
                                        <td>".$t_result['last_modified']."</td>
                                        ";
                                       
                                   
                                            echo      "<td> 
                                                            <a  href=\"edit_transaction.php?id=".$t_result['transaction_id']."\" 
                                                                style=\"color:blue;text-decoration:none;\">
                                                                 &#9851 Edit 
                                                            </a>  
                                                            <a  href=\"deactivate_transaction.php?id=".$t_result['transaction_id']."\"
                                                                onClick=\"return confirm('Are you sure you want to deactivate?')\"
                                                                style=\"color:red;text-decoration:none;\"> 
                                                                &#9940 Deactivate
                                                            </a>
                                                            <a
                                                                href=\"activate_transaction.php?id=".$t_result['transaction_id']."\"
                                                                onClick=\"return confirm('Are you sure you want to activate?')\"
                                                                style=\"color:green;text-decoration:none;\"
                                                            >
                                                                &#10148 Activate
                                                            </a>
                                                            <a 
                                                                href=\"delete_transaction.php?id=".$t_result['transaction_id']."\" 
                                                                style=\"color:#777;text-decoration:none;\"
                                                            >
                                                            <i class=\"fa-solid fa-trash\"></i> Delete
                                                            </a>
                                                        </td>
                                        
                                            </tr>
                                           ";

                                        
                              $_counter = $_counter + 1;
                            }
                        }
                    
                    ?>
                </table>
            </div>
        </div>
       
    </body>
</html>