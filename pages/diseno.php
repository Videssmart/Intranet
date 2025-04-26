<?php

$recursos = [
    [
        "documento" => "uploads/diseñoWeb.pdf#toolbar=0",
        "nombreDoc" => "Diseño Web",
        "download" => "uploads/diseñoWeb.pdf",
        "descarga" => "diseñoWeb.pdf",
        "vistaPrevia" => "uploads/diseñoWeb.pdf"
    ],
    [
        "documento" => "uploads/paquetesRedesSociales.pdf#toolbar=0",
        "nombreDoc" => "Planes de Redes Sociales",
        "download" => "uploads/paquetesRedesSociales.pdf",
        "descarga" => "paquetesRedesSociales.pdf",
        "vistaPrevia" => "uploads/paquetesRedesSociales.pdf"
    ],
    [
        "documento" => "uploads/portafolioDiseño.pdf#toolbar=0",
        "nombreDoc" => "Portafolio de Diseños",
        "download" => "uploads/portafolioDiseño.pdf",
        "descarga" => "portafolioDiseño.pdf",
        "vistaPrevia" => "uploads/portafolioDiseño.pdf"
    ],
    [
        "documento" => "uploads/paquetesPosts.pdf#toolbar=0",
        "nombreDoc" => "Paquetes Posts",
        "download" => "assets/designArchivos/paquetesPosts.pdf",
        "descarga" => "paquetesPosts.pdf",
        "vistaPrevia" => "uploads/paquetesPosts.pdf"
    ]

]

?>
 

<div class="bannerGrafico">
    <h2>Centro de Artes Gráficas: Creatividad sin Límites</h2>
    <p>Recursos, guías y herramientas para diseñar como un verdadero explorador del universo.</p>
    <a href="#recursos" class="buttons"><button>Acceder a Recursos</button></a>

    <div class="iconosGraficos">
        <ul class="iconos">
            <li class="icono"><img src="assets/img/pincel.png" alt=""></li>
            <li class="icono"><img src="assets/img/pincel.png" alt=""></li>
            <li class="icono"><img src="assets/img/pincel.png" alt=""></li>
            <li class="icono"><img src="assets/img/pincel.png" alt=""></li>
        </ul>
    </div>
</div>


<div class="lineamientos">
    <h2 class="title" id="documentosApoyo"><span class="iconTitle"><img src="assets/img/manual.png" alt=""></span>Manual de Artes Gráficas</h2>
    <div class="descargas">
        <h3><span><img src="assets/img/btns.png" alt=""></span> Manual de Artes Videss Smart</h3>
        <p>Aquí encontrarás las pautas para el uso correcto del logotipo, restricciones y combinaciones de color permitidas para mantener la consistencia de nuestra marca.</p>
        <a href="uploads/instructivoDiseno.pdf" download="instructivoDiseno.pdf"><button class="download-button"><i class="fi fi-rr-download"></i>Descargar Manual de Marca</button></a>
    </div>
</div>

<div class="recursos">
    <h2 class="title" id="recursos"><span class="iconTitle"><img src="assets/img/diseno.png" alt=""></span>Documentos de Diseño Gráfico</h2>
    <div class="archivos">
        <?php foreach ($recursos as $recurso): ?>
        <div class="archivo">
            <iframe src='<?php echo $recurso["documento"]?>' width='100%' height='300px'></iframe>
            <div class="textArchivo">
                <h3><?php echo $recurso["nombreDoc"]?></h3>
                <ul>
                    <li><a href="<?php echo $recurso["vistaPrevia"]?>" target="_blank"><i class="fi fi-rr-eye-alert"></i> Vista previa</a></li>
                    <li><a href="<?php echo $recurso["download"]?>" download="<?php echo $recurso["descarga"]?>"><i class="fi fi-rr-download"></i> Descargar</a></li>
                </ul>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>



<div class="preguntasDiseno">
    <h2 class="title" id="documentosApoyo"><span class="iconTitle"><img src="assets/img/preguntasFrecuentes.png" alt=""></span>Preguntas Frecuentes</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ¿Qué servicio de diseño gráfico ofrece Videss Smart?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Ofrecemos una amplia gama de servicios, incluyendo diseño de identidad corporativa, branding, diseño publicitario, creación de material digital e impreso, diseño web y UI/UX, así como personalización de gráficos para redes sociales y campañas de marketing.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    ¿Cuánto tiempo toma completar un diseño?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">El tiempo varía según la complejidad del proyecto. Un logo básico puede tardar entre 2 y 4 días, mientras que un diseño web o una identidad corporativa pueden requerir varios días.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ¿Qué necesito proporcionar para iniciar el proyecto?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Dependerá del tipo de diseño. Generalmente, solicitamos: <br>
                - Información sobre la empresa o marca. <br>
                - Colores y estilos preferidos. <br>
                - Referencias o ejemplos de inspiración. <br>
                - Texto e imágenes (si el cliente las tiene). <br>
                - Uso final del diseño (impresión, web, etc.). <br>
                </div>
            </div>
        </div>
    </div>
</div>