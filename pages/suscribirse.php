<?php
include_once("../components/header.php");
?>
<main>
    <section id="section-form">
        <h1 id="suscribete">¡Suscríbete! Es fácil y rápido.</h1>
        <span>
            <p>No te preocupes, no compartiremos la información que envíes con nadie.</p>
        </span>

        <div id="contenedor-form">
            <h2>Crea una cuenta</h2>
            <form action="gracias.php" method="get">
                <div id="form1">
                    <div id="mail">
                        <label for="mail">Correo electrónico</label>
                        <input type="mail" id="mail" name="mail" placeholder="ejemplo@gmail.com">
                    </div>
                    <div id=" contraseña">
                        <label for="contraseña">Ingrese una contraseña</label>
                        <input type="password" id="password" name="password" placeholder="******************">
                    </div>
                    <div id="reingresar">
                        <label for="reingresar">Reingrese la contraseña</label>
                        <input type="password" id="reingresar" name="reingresar" placeholder="******************">
                    </div>
                </div>

                <h2>Pagar con tarjeta</h2>
                <div id="form2">

                    <div class="contenedor" id="form-izq">
                        <div id="numTarjeta">
                            <label for="numTarjeta">Número de tarjeta</label>
                            <input type="number" id="numTarjeta" name="numTarjeta" placeholder="*** *** ***">
                        </div>
                        <div id="fecha">
                            <label for="fecha">Fecha de caducidad</label>
                            <input type="date" id="fecha" name="fecha">
                        </div>
                        <div id="codigo">
                            <label for="codigo">Código de seguridad</label>
                            <input type="number" id="codigo" name="codigo" placeholder="***">
                        </div>
                    </div>

                    <div class="contenedor" id="form-derecha">
                        <div id="nombre">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre, Apellido">
                        </div>
                        <div id="domicilio">
                            <label for="domicilio">Domicilio</label>
                            <input type="text" id="domicilio" name="domicilio" placeholder="Calle, altura">
                        </div>
                        <div id="telefono">
                            <label for="tel">Teléfono</label>
                            <input type="number" id="tel" name="tel" placeholder="123456789">
                        </div>
                    </div>
                </div>
                    <div>
                        <input id="btn-form" type="submit">
                    </div>
            </form>
        </div>
    </section>
</main>
<?php
    include_once("../components/footer.php");
?>

<!-- 
<form action="datos-get.php" method="_GET" >
        <div id="nom" >
        <label for="nom">Nombre</label>   
        <input type="text" id="nom" name="nom" > 
        </div>
        <div id="ape">
            <label for="ape">Apellido</label>
            <input type="text" id="ape" name="ape">
        </div>
 -->