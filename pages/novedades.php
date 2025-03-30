<?php 
$anuncios = [
    [
        "TituloAnuncio" => "Nueva Plataforma HubSpot",
        "Parrafo" => "Se ha implementado una nueva plataforma que optimizará el trabajo y el seguimiento de clientes."
    ],
    [
        "TituloAnuncio" => "Nuevo Metodo de Pago",
        "Parrafo" => "Se ha implementado una nueva forma de pago que facilitará las transacciones a nuestros clientes."
    ],
    [
        "TituloAnuncio" => "Entregas con Google Drive",
        "Parrafo" => "Se ha implementado un nuevo sistema de entrega de proyecto mediante Google Drive."
    ]
]
?>


<div class="bannerNovedades">
    <h2>¡Últimas Novedades de Videss Smart!</h2>
    <p>Mantente al día con lo más importante de nuestra empresa</p>

    <div class="lanzamientos">
        <h3>Lanzamiento del nuevo sistema de gestión</h3>
        <p>El equipo de desarrollo ha completado la nueva plataforma que revolucionará nuestra forma de trabajar</p>
        <button>Ver más</button>
    </div>
</div>

<div class="noticiasDestacadas">
    <h2 class="title2">Noticias Destacadas</h2>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/novedadesImg/hubSpot.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/novedadesImg/banrural.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/novedadesImg/drive.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="anuncios">
    <h2>Ultimos Anuncios</h2>
    <div class="cardsAnuncios">
        <?php foreach ($anuncios as $anuncio): ?>
        <div class="card">
            <h4><?php echo $anuncio["TituloAnuncio"]?></h4>
            <p><?php echo $anuncio["Parrafo"]?></p>
            <a href=""><button>Ver más ></button></a>
        </div>
        <?php endforeach;?>
    </div>
</div>