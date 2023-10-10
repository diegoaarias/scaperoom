<?php
session_start();

if (!isset($_SESSION['room2_unlocked']) || $_SESSION['room2_unlocked'] !== true) {
    header('Location: habitacion1.php');
    exit;
}

if (isset($_POST['submit'])) {
    $combination = $_POST['combination'];
    if ($combination === 'top g') {
        $_SESSION['room3_unlocked'] = true;
        header('Location: habitacion3.php');
        exit;
    } else {
        $error = "Combinación incorrecta";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación 2</title>
    <style>
body {
            background-image: url('topg.gif');
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
    <h1>Habitación 2</h1>
    <br>
    <p>que eres?</p>
    <br>
    <form method="POST" action="">
        <input type="text" name="combination" id="combination" required>
        <button type="submit" name="submit">ABRIR CANDADO</button>
    </form>
    <br>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="habitacion1.php">
        <button type="submit">Volver a la Habitación 1</button>
    </form>
</body>
</html>
