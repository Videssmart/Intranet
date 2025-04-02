<?php
$directorio = "uploads/";
$archivos = array_diff(scandir($directorio), array(".", ".."));
usort($archivos, function ($a, $b) use ($directorio) {
    return filemtime($directorio . $b) - filemtime($directorio . $a);
});

$archivos = array_slice($archivos, 0, 3);


?>
<div class="bannerInicio">
    <h2>Bienvenido a la Base de Control de Videss Smart</h2>
    <p>Toda la información que necesitas en un solo lugar</p>
    <a href="#documentosApoyo" class="buttons"><button>Documentos de Apoyo</button></a>
</div>

<div class="documentosRecientes">
    <h2 class="title" id="documentosApoyo"><span class="iconTitle"><img src="assets/img/iconDocumentos.png" alt=""></span>Documentos Recientes</h2>
    <div class="documentos">
        <?php foreach ($archivos as $archivo): ?>
            <div class="archivo">
                <p><strong><?php echo $archivo; ?></strong></p>
                <?php
                $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                $rutaCompleta = $directorio . $archivo;

                if (in_array($extension, ["jpg", "jpeg", "png", "gif"])) {
                    echo "<img src='$rutaCompleta' alt='Imagen'>";
                } elseif ($extension == "pdf") {
                    echo "<iframe src='$rutaCompleta#toolbar=1' width='100%' height='300px'></iframe>";
                } else {
                    echo "<p>📎 <a href='$rutaCompleta' target='_blank'>Descargar archivo</a></p>";
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="https://www.notion.so/Herramientas-188383ae3d70805a90bdea2966600a4c?pvs=4" target="_blank" class="buttons"><button>Ver todos los documentos</button></a>

</div>

<div class="moduloProductividad">
    <h2 class="title"><span class="iconTitle"><img src="assets/img/productividad.png" alt=""></span>Módulo de Productividad</h2>
    <div class="modulos">
        <div class="modulosKpis">
            <span class="iconModulo"><i class="fi fi-bs-signal-alt-2"></i>
                <h3>KPIs de Marzo</h3>
            </span>
            <ul class="modulosLista">
                <li>
                    <p>Negocios cerrados: <strong>04</strong></p>
                </li>
                <li>
                    <p>Satisfacción del cliente: <strong>--</strong></p>
                </li>
                <li>
                    <p>Captación: <strong>Q2,017.50</strong></p>
                </li>
                <li>
                    <p>Ganancia: <strong>Q268.16</strong></p>
                </li>
            </ul>
        </div>
        <div class="modulosKpis">
            <span class="iconModulo"><i class="fi fi-bs-signal-alt-2"></i>
                <h3>KPIs de Abril</h3>
            </span>
            <ul class="modulosLista">
                <li>
                    <p>Negocios cerrados: <strong>--</strong></p>
                </li>
                <li>
                    <p>Calificación esperada: <strong>5.0</strong></p>
                </li>
                <li>
                    <p>Meta captación: <strong>Q2,500.00</strong></p>
                </li>
                <li>
                    <p>Meta ganancia: <strong>Q600.00</strong></p>
                </li>
            </ul>
        </div>
        <div class="modulosKpis">
            <span class="iconModulo"><i class="fi fi-bs-signal-alt-2"></i>
                <h3>Eventos Importantes</h3>
            </span>
            <ul class="modulosLista">
                <li>
                    <p>--</p>
                </li>
                <li>
                    <p>--</p>
                </li>
                <li>
                    <p>--</p>
                </li>
            </ul>
        </div>

    </div>
</div>

<div class="novedades">
    <h2 class="title"><span class="iconTitle"><img src="assets/img/novedad.png" alt=""></span>Novedades en los Procesos</h2>
    <div class="card">
        <div class="card-header">
            <img src="assets/novedadesImg/banrural.png" alt="">
        </div>
        <div class="card-body">
            <h5 class="card-title">Conoce como mejoramos nuestros procesos</h5>
            <p class="card-text">Conoce los detalles acerca de nuestras mejoras en los procesos.</p>
            <a href="index.php?seccion=novedades" class="btn btn-primary">Ver Detalles</a>
        </div>
    </div>

</div>

<div class="soporte">
    <h2 class="title"><span class="iconTitle"><img src="assets/img/soporte.png" alt=""></span>Soporte y Ayuda</h2>
    <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Donde puedo encontrar los manuales de los procedimientos?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Puedes encontrar todos los detalles en <strong>Procedimientos</strong> en el menú y en <strong>Manuales y protocolos</strong>. Ahí encontraras todos los detalles. También puedes encontrarlo en Notion.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Donde puedo brindar recomendaciones para la mejora de procesos?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Puedes brindarnos tus recomendacione y sugerencias en la mejora de procesos en el menú, en el apartado de <strong>Soporte Interno</strong> en la sección de <strong>Sugerencias y comentarios</strong>, allí podrás brindar tus recomendaciones para poder seguir creciendo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Donde puedo encontrar la información de los servicios ofrecidos?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Puedes encontrar todos los detalles de cada servicio en el menú, buscas la sección de <strong>Herramientas</strong> y en el menú desplegable podrás encontrar todos los elementos que necesitas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <form action="https://formspree.io/f/xqapddwl" method="POST">
                        <label for="exampleFormControlTextarea1" class="form-label">Contacta a Soporte</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        <button class="btn btn-primary" type="submit"><i class="fi fi-rr-paper-plane"></i>Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>