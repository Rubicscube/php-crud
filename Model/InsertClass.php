<?php

require "Connection.php";
$nameF = $_POST['nameF'];
$loc = $_POST['location'];


if (isset($_POST['nameF'], $_POST['location'])) {
// Create connection
    $connection = new Connection();
    $sql = $connection->openConnection()->prepare("
        INSERT INTO ClassRoom (Name, Location)
        VALUES (:first_name, :location)");
    $sql->bindParam(':first_name', $nameF);
    $sql->bindParam(':location', $loc);
    $sql->execute();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Insert User</title>
</head>
<body>
<div class="container">
    <h1 class="jumbotron-heading">Add Classroom</h1>
    <form method="post">
        <input name="nameF" class="form-control mb-1" placeholder="class name" required>
        <input class="form-control mb-1" type="text" placeholder="class location" name="location" required>
        <button type="submit" name="submit" class="btn btn-primary mb-4">POST</button>
        <a class="btn btn-outline-primary mb-4" href="../Model/ClassList.php" role="button">SHOW CLASS LIST</a>
    </form>
</div>
</body>
</html>