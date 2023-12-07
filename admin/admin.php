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
                                            <th> Degree </th>
                                            <th> College </th>
                                            <th> Year Graduated </th>
                                            <th> Honor </th>
                                            <th> Exam Name </th>
                                            <th> Exam Date </th>
                                            <th> Exam Rating </th>
                                            <th> Reason for Course Undergrad</th>
                                            <th> Reason For Course Grad</th>
                                            <th> Training Title </th>
                                            <th> Duration and Credits </th>
                                            <th> Training Sponsor </th>
                                            <th> Reason for Advancement </th>
                                            <th> Is employed </th>
                                            <th> Reason if not employed </th>
                                            <th> Employment Status </th>
                                            <th> Present Occupation </th>
                                            <th> Line of Business </th>
                                            <th> Place of Work </th>
                                            <th> is first job? </th>
                                            <th> Reason for staying </th>
                                            <th> is first job related? </th>
                                            <th> reason for accepting </th>
                                            <th> reason for change </th>
                                            <th> length of first job </th>
                                            <th> first job found </th>
                                            <th> length to find first job </th>
                                            <th> first job level </th>
                                            <th> current job level </th>
                                            <th> initial gross </th>
                                            <th>is relevant </th>
                                            <th> created </th>
                                            <th> last modified </th>
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
                                            $answer_degree = $row_answer["Degree"];
                                            $answer_college = $row_answer["College"];
                                            $answer_yeargraduated = $row_answer["YearGraduated"];
                                            $answer_honor = $row_answer["Honor"];
                                            $answer_examname = $row_answer["ExamName"];
                                            $answer_examdate = $row_answer["ExamDate"];
                                            $answer_examrating = $row_answer["ExamRating"];
                                            $answer_reasonforcourseundergrad = $row_answer["ReasonForCourseUndergrad"];
                                            $answer_reasonforcoursegrad = $row_answer["ReasonForCourseGrad"];
                                            $answer_trainingtitle = $row_answer["TrainingTitle"];
                                            $answer_durationandcredits = $row_answer["DurationAndCredits"];
                                            $answer_trainingsponsor = $row_answer["TrainingSponsor"];
                                            $answer_reasonforadvancement = $row_answer["ReasonForAdvancement"];
                                            $answer_isemployed = $row_answer["isEmployed"];
                                            $answer_reasonfornotemployed = $row_answer["ReasonForNotEmployed"];
                                            $answer_employmentstatus = $row_answer["EmploymentStatus"];
                                            $answer_presentoccupation = $row_answer["PresentOccupation"];
                                            $answer_lineofbusiness = $row_answer["LineOfBusiness"];
                                            $answer_placeofwork = $row_answer["PlaceOfWork"];
                                            $answer_isfirstjob = $row_answer["isFirstJob"];
                                            $answer_reasonforstaying = $row_answer["ReasonForStaying"];
                                            $answer_isfirstjobrelated = $row_answer["isFirstJobRelated"];
                                            $answer_reasonforaccepting = $row_answer["ReasonForAccepting"];
                                            $answer_reasonforchange = $row_answer["ReasonForChange"];
                                            $answer_lengthoffirstjob = $row_answer["LengthOfFirstJob"];
                                            $answer_firstjobfound = $row_answer["FirstJobFound"];
                                            $answer_lengthtofindfirstjob = $row_answer["LengthToFindFirstJob"];
                                            $answer_firstJobLevel = $row_answer["firstJobLevel"];
                                            $answer_lengthtofindfirstjob = $row_answer["LengthToFindFirstJob"];
                                            $answer_firstjoblevel = $row_answer["firstJobLevel"];
                                            $answer_currentjoblevel = $row_answer["currentJobLevel"];
                                            $answer_initialgross = $row_answer["initialGross"];
                                            $answer_isrelevant = $row_answer["isRelevant"];
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
                                            echo "<td>".$answer_province."</td>";
                                            echo "<td>".$answer_degree."</td>";
                                            echo "<td>".$answer_college."</td>";
                                            echo "<td>".$answer_yeargraduated."</td>";
                                            echo "<td>".$answer_honor."</td>";
                                            echo "<td>".$answer_examname."</td>";
                                            echo "<td>".$answer_examdate."</td>";
                                            echo "<td>".$answer_examrating."</td>";
                                            echo "<td>".$answer_reasonforcourseundergrad."</td>";
                                            echo "<td>".$answer_reasonforcoursegrad."</td>";
                                            echo "<td>".$answer_trainingtitle."</td>";
                                            echo "<td>".$answer_durationandcredits."</td>";
                                            echo "<td>".$answer_trainingsponsor."</td>";
                                            echo "<td>".$answer_reasonfornotemployed."</td>";
                                            echo "<td>".$answer_employmentstatus."</td>";
                                            echo "<td>".$answer_presentoccupation."</td>";
                                            echo "<td>".$answer_lineofbusiness."</td>";
                                            echo "<td>".$answer_placeofwork."</td>";
                                            echo "<td>".$answer_isfirstjob."</td>";
                                            echo "<td>".$answer_reasonforstaying."</td>";
                                            echo "<td>".$answer_isfirstjobrelated."</td>";
                                            echo "<td>".$answer_reasonforaccepting."</td>";
                                            echo "<td>".$answer_reasonforchange."</td>";
                                            echo "<td>".$answer_lengthoffirstjob."</td>";
                                            echo "<td>".$answer_firstjobfound."</td>";
                                            echo "<td>".$answer_lengthtofindfirstjob."</td>";
                                            echo "<td>".$answer_firstjoblevel."</td>";
                                            echo "<td>".$answer_lengthtofindfirstjob."</td>";
                                            echo "<td>".$answer_firstjoblevel."</td>";
                                            echo "<td>".$answer_currentjoblevel."</td>";
                                            echo "<td>".$answer_initialgross."</td>";
                                            echo "<td>".$answer_isrelevant."</td>";
                                            echo "<td>".$answer_created."</td>";
                                            echo "<td>".$answer_lastmodified."</td>";
                                            echo '<td>  <a href="./edit/editfull.php?id='.$answer_id.'">Edit</a> | <a href="delete.php?id='.$answer_id.'">Delete</a></td>';
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





