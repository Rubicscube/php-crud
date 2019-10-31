<?php
require "../Model/Connection.php";
?>


<table class="table" align="center">
    <thead>
    <tr>
        <th>Teacher Id</th>
        <th>Teacher Name</th>
        <th>Teacher Email</th>
        <th>Teacher to class FK</th>
    </tr>
    </thead>

    <?php
    $connection = new Connection();
    $sql = $connection->openConnection()->query('SELECT * FROM Teacher')->fetchAll();
    foreach ($sql as $ticket) {
        echo
        "
    <tbody>
    <td>{$ticket['Id']}</td>
    <td>{$ticket['Name']}</td>
    <td>{$ticket['Email']}</td>
    <td>{$ticket['class']}</td>
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
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <title>Student</title>
    </head>
    <body>
    <a class="btn btn-outline-danger m-4" href="InsertStudent.php" role="button">Add Teacher</a>
    </body>
    </html>