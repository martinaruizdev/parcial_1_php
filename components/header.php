<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/icon.png" type="image/png">
    <title>WatchAtHome | Martina Ruiz</title>
</head>
<body>
    <header>
    <?php
    $menu = array(
        "Home" => "home.php",
        "Planes" => "planes.php",
        "Suscribirse" => "suscribirse.php",
        "Contacto" => "contacto.php",
        "Log in" => "login.php"
    );
    ?>
    <nav>
        <ul>
            <?php
            foreach ($menu as $paginas => $link) {
                echo "<li><a href=$link>$paginas</a></li>";
            }
            ?>
        </ul>
    </nav>
    </header>