<?php

require "../Model/Connection.php";

//Connect DB
$connection = new Connection();
//Create query based on the ID received from studentlist delete button
//query : delete where Student id = $_GET["id"]
$sql = $connection->openConnection()->query('DELETE FROM Student WHERE Id = '. $_GET["id"]);

if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}else{
// on success delete : redirect to studentlist
    header('Location: StudentList.php');
}




