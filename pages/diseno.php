<?php

$recursos = [
    [
        "documento" => "uploads/DG1.pdf#toolbar=0",
        "nombreDoc" => "Diseño Web",
        "download" => "uploads/DG1.pdf",
        "descarga" => "DG1.pdf",
        "vistaPrevia" => "uploads/DG1.pdf"
    ],
    [
        "documento" => "uploads/DG2.pdf#toolbar=0",
        "nombreDoc" => "Planes de Redes Sociales",
        "download" => "uploads/DG2.pdf",
        "descarga" => "DG2.pdf",
        "vistaPrevia" => "uploads/DG2.pdf"
    ],
    [
        "documento" => "uploads/DG3.pdf#toolbar=0",
        "nombreDoc" => "Portafolio de Diseños",
        "download" => "uploads/DG3.pdf",
        "descarga" => "DG3.pdf",
        "vistaPrevia" => "uploads/DG3.pdf"
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
        <a href="uploads/instructivoDiseno.docx" download="instructivoDiseno.docx"><button class="download-button"><i class="fi fi-rr-download"></i>Descargar Manual de Marca</button></a>
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
                    Accordion Item #1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
        </div>
    </div>
</div>