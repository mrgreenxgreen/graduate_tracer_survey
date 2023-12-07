<?php

include_once('connection.php');


if(isset($_POST['Submit'])){
    //initialization
    //Personal Information
    $Name = $_POST['Name']; //1.check
    $Address = $_POST['Address']; //2.check
    $Email = $_POST['Email']; //3.check
    $Telephone = $_POST['Telephone']; //4.check
    $MobileNumber = $_POST['MobileNumber']; //5.check
    $CivilStatus = $_POST['CivilStatus']; //6.check
    $Sex = $_POST['Sex'];  //7.check
    $Birthday = $_POST['Birthday']; //8.check
    //waran region kag province fixed na
    $Province = $_POST['CityOrMunicipality']; //11.check
    //education background part
    $Degree = $_POST['Degree']; //12.1check
    $College = $_POST['College']; //12.2check
    $YearGraduated = $_POST['YearGraduated']; //12.3check
    $Honor = $_POST['Honor']; //12.4check
    //Professional Exam
    $ExamName = $_POST['ExamName']; //13.1check
    $ExamDate = $_POST['ExamDate']; //13.2check
    $ExamRating = $_POST['ExamRating']; //13.3check
    $ReasonForCourseUndergrad = $_POST['ReasonForCourseUndergrad']; //14.1check
    $ReasonForCourseGrad = $_POST['ReasonForCourseGrad']; //14.2 check
    //Trainings attended after college
    $TrainingTitle = $_POST['TrainingTitle']; // 15.1  check
    $DurationAndCredits = $_POST['DurationAndCredits']; // 15.2 check
    $TrainingSponsor = $_POST['TrainingSponsor']; //15.3 check
    $ReasonForAdvancement = $_POST['ReasonForAdvancement']; // 15.b check
    $isEmployed = $_POST['isEmployed']; //16. check
    $ReasonForNotEmployed = $_POST['ReasonForNotEmployed']; // 17 check
    $EmploymentStatus = $_POST['EmploymentStatus']; //18  check
    $PresentOccupation = $_POST['PresentOccupation']; //19 check
    $LineOfBusiness = $_POST['LineOfBusiness'];//20 to fix
    $PlaceOfWork = $_POST['PlaceOfWork']; //21. check
    $isFirstJob = $_POST['isFirstJob'];//22. check
    $ReasonForStaying = $_POST['ReasonForStaying'];//23 check
    $isFirstJobRelated = $_POST['isFirstJobRelated'];//24 check
    $ReasonForAccepting = $_POST['ReasonForAccepting'];//25 check
    $ReasonForChange = $_POST['ReasonForChange'];//26 check
    $LengthOfFirstJob = $_POST['LengthOfFirstJob'];//27 check
    $FirstJobFound = $_POST['FirstJobFound'];//28 check
    $LengthToFindFirstJob = $_POST['LengthToFindFirstJob'];//29 check
    $firstJobLevel = $_POST['firstJobLevel'];//30.1
    $currentJobLevel = $_POST['currentJobLevel'];//30.2
    $initialGross = $_POST['initialGross'];//31
    $isRelevant = $_POST['isRelevant'];//32
    //$Suggestions = $_POST['Suggestions'];//33

//USE THIS TO CHECK VALUE
//     echo $Name;
//     echo "<br/>";
//     echo $Address;   echo "<br/>";
//     echo $Email;   echo "<br/>";
//     echo $Telephone;   echo "<br/>";
//     echo $MobileNumber;   echo "<br/>";
//     echo $CivilStatus;   echo "<br/>";
//     echo $Sex;    echo "<br/>";
//     echo $Birthday;   echo "<br/>";
//    //waran region kag province fixed na
//     echo $Province;    echo "<br/>";
//     //education background part
//     echo $Degree;    echo "<br/>";
//     echo $College;   echo "<br/>";
//     echo $YearGraduated;    echo "<br/>";
//     echo $Honor;    echo "<br/>";
//     //Professional Exam
//     echo $ExamName;   echo "<br/>";
//     echo $ExamDate;   echo "<br/>";
//     echo $ExamRating;    echo "<br/>";
//     echo $ReasonForCourseUndergrad;   echo "<br/>";
//     echo $ReasonForCourseGrad;    echo "<br/>";
//     //Trainings attended after college
//     echo $TrainingTitle;    echo "<br/>";
//     echo $DurationAndCredits;    echo "<br/>";
//     echo $TrainingSponsor;    echo "<br/>";
//     echo $ReasonForAdvancement;    echo "<br/>";
//     echo $isEmployed;    echo "<br/>";
//     echo $ReasonForNotEmployed;    echo "<br/>";
//     echo $EmploymentStatus;   echo "<br/>";
//     echo $PresentOccupation;    echo "<br/>";
//     echo $LineOfBusiness;    echo "<br/>";
//     echo $PlaceOfWork;    echo "<br/>";
//     echo $isFirstJob;   echo "<br/>";
//     echo $ReasonForStaying;   echo "<br/>";
//     echo $isFirstJobRelated;   echo "<br/>";
//     echo $ReasonForAccepting;   echo "<br/>";
//     echo $ReasonForChange;   echo "<br/>";
//     echo $LengthOfFirstJob;    echo "<br/>";
//     echo $FirstJobFound;    echo "<br/>";
//     echo $LengthToFindFirstJob;    echo "<br/>";
//     echo $firstJobLevel;    echo "<br/>";
//     echo $currentJobLevel;   echo "<br/>";
//     echo $initialGross;    echo "<br/>";
//     echo $isRelevant;    echo "<br/>";
    
        //TODO: TO REFACTOR
        // if(empty($Name)     || empty($Address) || empty($Email)              || empty($Telephone) || empty($MobileNumber)|| empty($CivilStatus)      || empty($Sex)                     || empty($Birthday)     || empty($Province)
        // || empty($Degree)   || empty($College) || empty($YearGraduated)      || empty($Honor)     || empty($ExamName)    || empty($ExamRating)       || empty($ReasonForCourseUndergrad)|| 
        // empty($ReasonForCourseGrad)            || empty($TrainingTitle)      || empty($DurationAndCredits)               || empty($TrainingSponsor)  || empty($ReasonForAdvancement)    || empty($isEmployed)
        // || empty($ReasonForNotEmployed)        || empty($EmploymentStatus)   || empty($PresentOccupation)                ||empty($LineOfBusiness)    || empty($PlaceOfWork)             || empty($isFirstJob)   || empty($ReasonForStaying) 
        // || empty($isFirstJobRelated)           || empty($ReasonForAccepting) || empty($ReasonForChange)                  || empty($LengthOfFirstJob) || empty($FirstJobFound)           || empty($LengthToFindFirstJob) 
        // || empty($firstJobLevel)               || empty($currentJobLevel)    || empty($initialGross)                     || empty($isRelevant)
        // ){
        //     echo "Please fill out all fields";
        // } else {                       
        //    // $result = mysqli_query($mysqli, "INSERT INTO client_users VALUES('','$username','$password','$phoneNumber',1)");
            
        //     echo "success!";
        //     echo "<a href=\"login.php\"> Proceed to login </a>";
        // }

        $SQLaddSurvey = "INSERT INTO answers(a_Name,a_Address,Email,Telephone,MobileNumber,CivilStatus,Sex,Birthday,Province,Degree,
        College, YearGraduated, Honor, ExamName, ExamDate, ExamRating, ReasonForCourseUndergrad, ReasonForCourseGrad, TrainingTitle, DurationAndCredits,
        TrainingSponsor,
        ReasonForAdvancement,isEmployed,ReasonForNotEmployed,EmploymentStatus,PresentOccupation,LineOfBusiness,PlaceOfWork,isFirstJob,ReasonForStaying,isFirstJobRelated,
        ReasonForAccepting,ReasonForChange,LengthOfFirstJob,FirstJobFound, LengthToFindFirstJob, firstJobLevel, currentJobLevel, initialGross, isRelevant) 
        VALUES(
            '$Name', '$Address','$Email','$Telephone','$MobileNumber','$CivilStatus','$Sex','$Birthday','$Province','$Degree',
            '$College','$YearGraduated','$Honor','$ExamName','$ExamDate','$ExamRating','$ReasonForCourseUndergrad', '$ReasonForCourseGrad','$TrainingTitle','$DurationAndCredits',
            '$TrainingSponsor','$ReasonForAdvancement','$isEmployed','$ReasonForNotEmployed','$EmploymentStatus','$PresentOccupation', '$LineOfBusiness', '$PlaceOfWork','$isFirstJob','$ReasonForStaying',
             '$isFirstJobRelated', 
             '$ReasonForAccepting', '$ReasonForChange', '$LengthOfFirstJob','$FirstJobFound', '$LengthToFindFirstJob', '$firstJobLevel', '$currentJobLevel', '$initialGross', '$isRelevant')";
        $SurveyResult =  mysqli_query($mysqli ,$SQLaddSurvey );
        echo "<a href=\"index.php\"> Another one</a>";
    }



?>

<!DOCTYPE html>
<html>
   <head>
        <title>GTS</title>
   </head>
   <body>
        <h1>Thank you for taking time to answer our survey.</h1>
        <button><a href="../index.html">Go back to home page</a></button>
   </body>
</html>
