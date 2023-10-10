<?php
session_start();

// Verificar si el jugador ha ingresado la combinación correcta para avanzar a la Habitación 2
if (isset($_POST['submit'])) {
    $combination = $_POST['combination'];
    if ($combination === 'saul') { // Combinación correcta para la Habitación 2
        $_SESSION['room5_unlocked'] = true;
        header('Location: habitacion5.php');
        exit;
    } else {
        $error = "Combinación incorrecta";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación 4</title>
    <style>
body {
            background-image: url('walter.gif'); /* Reemplaza 'ruta_del_archivo.gif' con la ruta de tu archivo GIF */
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
    <h1>Habitación 4</h1>
    <br>
    <p>better call</p>
    <form method="POST" action="">
        <input type="text" name="combination" id="combination" required>
        <button type="submit" name="submit">ABRIR CANDADO</button>
    </form>
    <br>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="index.php">
        <button type="submit">Volver al inicio</button>
    </form>
</body>
</html>
