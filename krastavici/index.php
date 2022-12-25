<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <h2><b>Купи зеленчук</b></h2>

    <hr></hr>

    <h2><b>Внеси количина на секој од продуктите</b></h2>

    <hr></hr>

    <form action="naracaj2.php" method="post">

        Краставици: <input type="text"  name="krastavici" required>60ден.<br><br>

            Домати: <input type="text" name="domati" required>50ден.<br><br>

            Зелка:<input type="text" name="zelka" required>40ден.<br><br>

            <input type="submit" name="submit" value="Нарачај">

</form>

</body>

</html>