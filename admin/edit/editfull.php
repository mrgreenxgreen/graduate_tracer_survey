<?php

//get ID of user to edit
$id = $_GET['id'];

//db connection
include_once("../connection.php");
//sql query
$sql = "SELECT * FROM answers WHERE a_id = $id";
//execute
$result = mysqli_query($mysqli, $sql);
//rows
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['a_id'];
    echo $row['a_Name'];
    echo $row['a_Address'];
    echo $row['Email'];
    echo "<br/>";
}
echo "works";

?>