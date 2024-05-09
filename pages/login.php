<?php
    include_once("../components/header.php");
?>
    <main>
        <section id="contenedor-login">
            <h1>Iniciar sesión</h1>
            <form action="gracias2.php" method="get">
                <div id="mail2">
                    <label for="mail2">Correo electrónico</label>
                    <input type="mail2" name="mail2" id="mail2" placeholder="ejemplo@gmail.com">
                </div>
                <div id="contraseña2">
                    <label for="contraseña2">Contraseña</label>
                    <input type="password" name="contraseña2" id="contraseña2" placeholder="******************">
                </div>
                <div id="sesion">
                    <input type="checkbox" name="sesion" id="sesion" value="Mantener sesión iniciada">
                    <label for="sesion">Mantener sesión iniciada</label>
                    <a href="contacto.php">¿Olvidó su contraseña?</a>
                </div>
                <div>
                    <input id="btn-login" type="submit" value="Iniciar sesión">
                </div>
            </form>
            <div id="registrate-aqui">
            <p>¿Aún no tienes una cuenta? <a href="suscribirse.php">Regístrate aquí.</a></p>
            </div>
        </section>
    </main>

<?php
    include_once("../components/footer.php");
?>