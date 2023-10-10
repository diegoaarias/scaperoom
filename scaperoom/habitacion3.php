<?php
session_start();

if (!isset($_SESSION['room3_unlocked']) || $_SESSION['room3_unlocked'] !== true) {
    header('Location: habitacion2.php');
    exit;
}

if (!isset($_SESSION['room3_attempts'])) {
    $_SESSION['room3_attempts'] = 0;
}

if (isset($_POST['submit'])) {
    $combination = $_POST['combination'];
    if ($combination === '33') {
        $_SESSION['salida_unlocked'] = true;
        header('Location: salida.php');
        exit;
    } else {
        $error = "Combinación incorrecta";
        $_SESSION['room3_attempts']++;
    }

    if ($_SESSION['room3_attempts'] >= 3) {
        header('Location: goofy.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación 33</title>
    <style>
body {
            background-image: url('33.jpg');
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
    <h1>Habitación 33</h1>
    <br>
    <p>Me repites ese numerin?</p>
    <form method="POST" action="">
        <input type="text" name="combination" id="combination" required>
        <button type="submit" name="submit">ABRIR CANDADO</button>
    </form>
    <br>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="habitacion2.php">
        <button type="submit">Volver a la Habitación 2</button>
    </form>
</body>
</html>
