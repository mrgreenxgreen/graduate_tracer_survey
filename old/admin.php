<?php
    session_start();
    include_once('dbconnection.php');
    //get all data from answer table
    $sql_answers = "SELECT * FROM answers";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>GST</title>
        <style>
            .table-answers table, th, td{
                border:1px solid green;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Admin</h1>
        <div class="table-answers">
            <table >
                <th>Item</th>
                <th>Date</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Mobile Number </th>
                <th>Civil Status </th>
                <th>Sex </th>
                <th>Birthday </th>
                <th>Dwelling Place </th>
                <th>Degree </th>
                <th>College </th>
                <th>Year Graduated</th>
                <th>Honor </th>
            </table>
            <table>
                <th>Exam Name </th>
                <th> Exam Rating </th>
                <th> Reason for taking course:(Undergrad) </th>
                <th> Reason for taking course:(Grad) </th>
            </table>
           
        </div>
    </body>

</html>
