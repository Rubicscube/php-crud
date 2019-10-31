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
    <title>Becode Database</title>
</head>
<body>
<?php require 'includes/header.php' ?>
<section>
    <a class="btn btn-outline-danger m-4" href="../Model/StudentList.php" role="button">Student List</a>
    <a class="btn btn-outline-danger m-4" href="../Model/ClassList.php" role="button">Class List</a>
    <a class="btn btn-outline-danger m-4" href="Teachercontroller.php" role="button">Teacher List</a>
</section>
<?php require 'includes/footer.php' ?>
</body>
</html>