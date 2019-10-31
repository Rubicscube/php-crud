<?php
require "../Model/Connection.php";
?>


<table class="table" align="center">
    <thead>
    <tr>
        <th>Class Id</th>
        <th>Class Name</th>
        <th>Class Location</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>

    <?php




    $connection = new Connection();
    $sql = $connection->openConnection()->query('SELECT * FROM ClassRoom ')->fetchAll();
    foreach ($sql as $ticket) {
        echo
        "
    <tbody>
    <td>{$ticket['Id']}</td>
    <td>{$ticket['Name']}</td>
    <td>{$ticket['Location']}</td>
    <td><a href='edit.php?id=".$ticket['Id']."'>Edit</a></td>
    <td><a href='DeleteC.php?id=".$ticket['Id']."'>Delete</a></td>
   </tr>\n </tbody>";
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
        <title>Home</title>
    </head>
    <body>
    <h1 class="jumbotron-heading">Current Classrooms available</h1>
    <a class="btn btn-outline-success m-4" href="InsertClass.php" role="button">Add Class</a>
    <a class="btn btn-outline-primary m-2" href="../index.php" role="button">Home</a>
    </body>
    </html>