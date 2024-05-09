<?php
$mail2;
$contraseña2;
$sesion;

    if(isset($_GET['mail2'])){
    $mail2 = $_GET['mail2'];
    }

    if(isset($_GET['contraseña2'])){
    $contraseña2 = $_GET['contraseña2'];
    }

    if(isset($_GET['sesion'])){
    $sesion = $_GET['sesion'];        
    }

?>

<?php
    include_once("../components/header.php");
?>
    <main>
        <section id="gracias2">
            <h1>¡Bienvenido de vuelta!</h1>
        <table border=2>
            <caption>Información de Log in</caption>
            <thead>
                <tr>
                    <th>Correo electrónico</th>
                    <th>Contraseña</th>
                    <th>Valor de checkbox</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo "$mail2";?></td>
                    <td><?php echo "$contraseña2";?></td>
                    <td><?php echo "$sesion";?></td>
                </tr>
            </tbody>
        </table>
        <tfoot>
        </tfoot>
        </section>
    </main>

<?php
    include_once("../components/footer.php");
?>
