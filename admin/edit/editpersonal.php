<?php
//get ID of user to edit
$id = $_GET['id'];

//database connection
include_once("../connection.php");

//sql query for survey answers
$sql_answer = "SELECT * FROM answers WHERE a_id = $id";

$result_answer = mysqli_query($mysqli, $sql_answer);

// while ($row = mysqli_fetch_assoc($result_answer)) {
//     echo $row['a_id'];
//     echo $row['a_Name'];
//     echo $row['a_Address'];
//     echo $row['Email'];
//     echo "<br/>";
// }

?>






<!DOCTYPE html>
<html>
    <head>
            <title>GTSS Admin</title>
            <link href="../style.css" rel="stylesheet" />
           
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
                        <div class="content-menu">
                                <?php
                                        include_once("../content_menu.php");
                                ?>
                               
                        </div>
                        <div class="content-box">
                            <form method="post" action="save_editpersonal.php">
                                <table>
                                    <thead>
                                        <tr>
                                        
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
                                        
                                            <th> Options</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php 
                                             $item_no = 1;
                                            while( $row_answer = mysqli_fetch_array($result_answer)) {  
                                              echo "   <tr> ";
                                                     
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
                                            echo "<td><input type=\"text\" name=\"Name\" value=\"".$answer_name."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Adress\" value=\"".$answer_address."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Email\" value=\"".$answer_email."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Phone\" value=\"".$answer_phone."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Mobile\" value=\"".$answer_mobile."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"CivilStatus\" value=\"".$answer_civilstatus."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Sex\" value=\"".$answer_sex."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Birthday\" value=\"".$answer_birthday."\" style=\"border:1px solid blue;\"/></td>";
                                            echo "<td><input type=\"text\" name=\"Province\" value=\"".$answer_province."\" style=\"border:1px solid blue;\"/></td>";
                                           
                                            echo '<td>  <input type="submit" name="Submit_editpersonal" value="Save" style="background-color:green;color:white;" /></td>';
                                            echo "   </tr>";
                                                    $item_no = $item_no + 1;
                                            }

                                    ?>
                                      
                                    </tbody>
                                </table>
                            </form>
                        </div>
                </div>

                <div>  
            </main>
            <footer>


            </footer>
    </body>


</html>





