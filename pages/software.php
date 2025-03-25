<?php
$softwares = [
    [
        "categoria" => "Redes Sociales y Marketing",
        "programas" => [
            ["prog" => "Meta Suite Business"],
            ["prog" => "Facebook"],
            ["prog" => "Instagram"],
            ["prog" => "HubSpot CRM"]
        ]
    ],
    [
        "categoria" => "Gestión y Comunicación Interna",
        "programas" => [
            ["prog" => "Correo Corporativo"],
            ["prog" => "Microsoft Teams / Google Meet"],
            ["prog" => "Notion"],
            ["prog" => "Whatsapp"],
        ]
    ],
    [
        "categoria" => "CRM y Atención al Cliente",
        "programas" => [
            ["prog" => "Meta Suite Business"],
            ["prog" => "Intranet Smart"]
        ]
    ],
    [
        "categoria" => "Finanzas",
        "programas" => [
            ["prog" => "Paypal"],
            ["prog" => "Cuenta Bancaria"],
            ["prog" => "Excel"]

        ]
    ],
    [
        "categoria" => "Diseño y Desarrollo",
        "programas" => [
            ["prog" => "Adobe Suite"],
            ["prog" => "Canva Pro"],
            ["prog" => "After Effects"]
        ]
    ]
]
?>
<div class="bannerSoftware">
    <h2>Centro de Software y Aplicaciones</h2>
    <p>Todo lo que necesitas para ser eficaz.</p>
</div>

<div class="introduccion">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-5">
                <h3>Introducción y Guía de Uso</h3>
                <p>Aquí encontrarás todas las herramientas digitales que utilizamos en Videss Smart, organizadas por categoría. Da clic en cada aplicación para ver detalles, tutoriales y acceso directo.</p>
            </div>
            <div class="col-md-7">
                <img src="assets/img/software.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="aplicaciones">
    <h2 class="title" id="documentosApoyo"><span class="iconTitle"><img src="assets/img/softwares.png" alt=""></span>Softwares de Trabajo</h2>
    <div class="cardsApps">
        <?php foreach ($softwares as $software): ?>
            <div class="card">
                <h4><?php echo $software["categoria"] ?></h4>
                <ul class="cardList">
                    <?php foreach ($software["programas"] as $programa): ?>
                        <li><?php echo $programa["prog"] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="preguntas">
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

<div class="contacto">
    <h2 class="title" id="documentosApoyo"><span class="iconTitle"><img src="assets/img/contacto.png" alt=""></span>Reportes y Contacto</h2>
    <div class="botones">
        <button class="boton1">Reportar un Problema</button>
        <button class="boton2">Chat en Vivo</button>
    </div>
</div>