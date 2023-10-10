<?php
session_start();

if (isset($_POST['enter_room1'])) {
    header('Location: habitacion1.php');
    exit;
}
if (isset($_POST['enter_room4'])) {
    header('Location: habitacion4.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Inicio</title>
    <style>
body {
            background-image: url('goofy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        h1, p, label {
            background-color: white;
            display: inline-block; 
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al Escape Room</h1>
    <form method="POST" action="">
        <button type="submit" name="enter_room1">Entrar en la izquierda</button>
    </form>
    <form method="POST" action="">
        <button type="submit" name="enter_room4">Entrar en la derecha</button>
    </form>
</body>
</html>
