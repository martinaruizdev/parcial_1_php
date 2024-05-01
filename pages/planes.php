<?php
include_once("../components/header.php")
?>
<main>
    <section id="seccion-cards">
        <h1 id="plan">Elige tu plan y comienza a disfrutar</h1>
        <!-- contenedor violeta -->
        <div id="contenedor-cards">
            <div class="card">
                <h3>Plan Mensual</h3>
                <p>2 dispositivos para ver en simultáneo <br>
                    Hasta 4 perfiles personalizdos <br>
                    - <br>
                    <strong>ARS 2.500/MES</strong>
                    </p>
                    <button class="boton-card"><a href="suscribirse.php">Comprar</a></button>
            </div>

            <div class="card">
                <h3>Plan Familiar</h3>
                <p>
                    4 dispositivos para ver en simultáneo <br>
                    Hasta 7 perfiles personalizdos <br>
                    Controles parentales <br>
                    <strong>ARS 3.500/MES</strong>
                </p>
                <button class="boton-card" id="boton-verde"><a href="suscribirse.php">Comprar</a></button>
            </div>

            <div class="card">
                <h3>Plan Anual</h3>
                <p>
                    2 dispositivos para ver en simultáneo <br>
                    Hasta 2 perfiles personalizdos <br>
                    - <br>
                    <strong>ARS 25.00/AÑO</strong>
                </p>
                <button class="boton-card"><a href="suscribirse.php">Comprar</a></button>
            </div>
        </div>
    <p id="texto-chico">*Puedes cancelar tu suscripción cuando lo desees</p>
    </section>
</main>
<?php
include_once("../components/footer.php")
?>
</body>

</html>