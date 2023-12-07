<?php

//database connection
include_once("connection.php");

//sql query for survey answers
$sql_answer = "SELECT * FROM answers";

$result_answer = mysqli_query($mysqli, $sql_answer);

?>






<!DOCTYPE html>
<html>
    <head>
            <title>GTSS Admin</title>
            <link href="style.css" rel="stylesheet" />
            <style>
                .main-container
                {
                        border:5px solid green;
                        display:flex;
                }
                .side-nav
                {
                        background-color:red;
                        width: 100px;
                        display:flex;
                        height: 100vh;
                        flex-direction:column;
                        align-items:center;
                        justify-content: center;
                }

                .content-container
                {
                        border:5px solid blue;
                        width:100%;
                }
                .content-menu
                {
                        border:1px solid pink;
                        display:flex;
                        gap:2em;
                        justify-content: center;
                }
                .content-box
                {
                        border:1px solid orange;
                }
               th
                {
                
                    padding: 15px;
                    border:1px solid green;
                }
                table, tr, td,th
                {
                        border:1px solid black;
                        border-collapse: collapse;
                        padding:10px;
                }
            </style>
    </head>
    <body>
            <header>
                    <nav>
                        <div>GTSS</div>
                        <div><input type="text" placeholder="Search"/></div>
                        <div>Account</div>
                    </nav>
            </header>
            <main>
                <div class="main-container">
               
                <div class="content-container">
                        heading
                        <div class="content-menu">
                                <?php
                                        include_once("content_menu.php");
                                ?>
                               
                        </div>
                        <div class="content-box">
                           
                                <table>
                                    <thead>
                                        <tr>
                                            <th> No. </th>
                                            <th> ID </th>
                                            <th> Name </th>
                                            <th> Address </th>
                                            <th> Email </th>
                                            <th> Telephone </th>
                                            <th> Mobile No. </th>
                                            <th> Civil Status</th>
                                            <th> Sex </th>
                                            <th> Birthday </th>
                                            <th> Province </th>
                                            <th> Created</th>
                                            <th> Last Modified</th>
                                            <th> Options</th>

                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php 
                                             $item_no = 1;
                                            while( $row_answer = mysqli_fetch_array($result_answer)) {  
                                              echo "   <tr>
                                                        <td>".$item_no."</td>";
                                            $answer_id = $row_answer["a_id"];
                                            $answer_name = $row_answer["a_Name"];
                                            $answer_address = $row_answer["a_Address"];
                                            $answer_email = $row_answer["Email"];
                                            $answer_phone = $row_answer["Telephone"];
                                            $answer_mobile = $row_answer["MobileNumber"];
                                            $answer_civilstatus  = $row_answer["CivilStatus"];
                                            $answer_sex = $row_answer["Sex"];
                                            $answer_birthday = $row_answer["Birthday"];
                                            $answer_province = $row_answer["Province"];
                                            $answer_created = $row_answer["created"];
                                            $answer_lastmodified = $row_answer["last_modified"];
                                        
                                            
                                            echo "<td>".$answer_id."</td>";
                                            echo "<td>".$answer_name."</td>";
                                            echo "<td>".$answer_address."</td>";
                                            echo "<td>".$answer_email."</td>";
                                            echo "<td>".$answer_phone."</td>";
                                            echo "<td>".$answer_mobile."</td>";
                                            echo "<td>".$answer_civilstatus."</td>";
                                            echo "<td>".$answer_sex."</td>";
                                            echo "<td>".$answer_birthday."</td>";
                                            echo "<td>".$answer_created."</td>";
                                            echo "<td>".$answer_lastmodified."</td>";
                                            echo '<td>  <a href="editfull.php?id='.$answer_id.'">Edit</a> | <a href="delete.php?id='.$answer_id.'">Delete</a></td>';
                                            echo "   </tr>";
                                                    $item_no = $item_no + 1;
                                            }

                                    ?>
                                      
                                    </tbody>
                                </table>
                        </div>
                </div>

                <div>  
            </main>
            <footer>


            </footer>
    </body>


</html>





