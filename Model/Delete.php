<?php

require "../Model/Connection.php";



//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$connection = new Connection();
$id = $_GET['id'];
$sql = $connection->openConnection()->query('DELETE FROM Student WHERE Id = $id');

if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}

