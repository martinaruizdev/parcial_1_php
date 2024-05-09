<?php
$mail;
$password;
$reingresar;
$numTarjeta;
$fecha;
$codigo;
$nombre;
$domicilio;
$tel;

    if(isset($_GET['mail'])){
    $mail = $_GET['mail'];
    }

    if(isset($_GET['password'])){
    $password = $_GET['password'];
    }

    if(isset($_GET['reingresar'])){
    $reingresar = $_GET['reingresar'];
    }

    if(isset($_GET['numTarjeta'])){
    $numTarjeta = $_GET['numTarjeta'];
    }

    if(isset($_GET['fecha'])){
    $fecha = $_GET['fecha'];
    }

    if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    }

    if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    }

    if(isset($_GET['domicilio'])){
    $domicilio = $_GET['domicilio'];
    }

    if(isset($_GET['tel'])){
    $tel = $_GET['tel'];    
    }

?>

<?php
    include_once("../components/header.php");
?>
    <main>
        <section id="gracias">
            <h1>¡Gracias!</h1>
            <p>Hemos registrado los datos con éxito. Tu cuenta se activará dentro de los próximos minutos.</p>
            <table border=2>
        <caption>Información cargada por el usuario</caption>
        <thead>
            <tr>
                <th>Correo electrónico</th>
                <th>Contraseña</th>
                <th>Contraseña reingresada</th>
                <th>Número de tarjeta</th>
                <th>Fecha de caducidad de tarjeta</th>
                <th>Código de seguridad de la tarjeta</th>
                <th>Nombre completo</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "$mail";?></td>
                <td><?php echo "$password";?></td>
                <td><?php echo "$reingresar";?></td>
                <td><?php echo "$numTarjeta";?></td>
                <td><?php echo "$fecha";?></td>
                <td><?php echo "$codigo";?></td>
                <td><?php echo "$nombre";?></td>
                <td><?php echo "$domicilio";?></td>
                <td><?php echo "$tel";?></td>
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
