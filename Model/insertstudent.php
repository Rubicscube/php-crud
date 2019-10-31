<?php
require "Connection.php";
$nameF = $_POST['nameF'];
$mail = $_POST['email'];
$Language = $_POST['classes'];

if (isset($_POST['nameF'], $_POST['email'], $_POST['classes'])) {
// Create connection
    $connection = new Connection();
    $sql = $connection->openConnection()->prepare("
        INSERT INTO Student (Name, Email, class)
        VALUES (:first_name, :Email, :class)");
    $sql->bindParam(':first_name', $nameF);
    $sql->bindParam(':Email', $mail);
    $sql->bindParam(':class', $Language);
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
    <h1 class="jumbotron-heading">Student Registration</h1>
    <form method="post">
        <input name="nameF" class="form-control mb-1" placeholder="First Name" required>
        <input class="form-control mb-1" type="email" placeholder="Email" name="email" required>
        <select class="form-control mb-1" name="classes">
            <option value="1">Lamarr</option>
            <option value="2">Giertz</option>
            <option value="3">waterzooi</option>
            <option value="4">waffel</option>
        </select>
        <button type="submit" name="submit" class="btn btn-primary">POST</button>
        <a class="btn btn-outline-primary" href="/index.php" role="button">SHOW USERS</a>
    </form>
</div>
</body>
</html>