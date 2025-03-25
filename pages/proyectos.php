<?php
$proyectos = [
    [
        "nombreProyecto" => "Manejo de Redes",
        "cliente" => "Mrcbusservice",
        "responsable" => "Maria Dolores",
        "fechaEntrega" => "00/00/0000",
        "fechaPago" => "28",
        "estado" => "Activo",
        "pago" => "Q650.00"
    ],
    [
        "nombreProyecto" => "Manejo de Redes - Personalizado",
        "cliente" => "Gamaliel Hernandez",
        "responsable" => "Maria Dolores",
        "fechaEntrega" => "00/00/0000",
        "fechaPago" => "14",
        "estado" => "Activo",
        "pago" => "Q325.00"
    ],
    [
        "nombreProyecto" => "Manejo de Redes",
        "cliente" => "Eswin Chilel",
        "responsable" => "Maria Dolores",
        "fechaEntrega" => "00/00/0000",
        "fechaPago" => "14",
        "estado" => "Activo",
        "pago" => "Q232.50"
    ],
    [
        "nombreProyecto" => "Manejo de Redes",
        "cliente" => "Travel Click",
        "responsable" => "Maria Dolores",
        "fechaEntrega" => "00/00/0000",
        "fechaPago" => "10/04/2025",
        "estado" => "Activo",
        "pago" => "Q650.00"
    ],
    [
        "nombreProyecto" => "Video Investigación",
        "cliente" => "Abner Popol",
        "responsable" => "Maria Dolores",
        "fechaEntrega" => "24/03/2025",
        "fechaPago" => "24/03/2025",
        "estado" => "Pagado",
        "pago" => "--"
    ]
]
?>
<div class="bannerProyectos">
    <h2>Gestión de Proyectos Videss Smart</h2>
    <p>Visualiza, administra y colabora en cada proyecto desde un solo lugar</p>
</div>

<div class="resumenGeneral">
    <h2>Resumen General del Estado del Proyectos</h2>
    <div class="resumen">
        <div class="seccionResumen">
            <ul class="iconos">
                <li><i class="fi fi-ss-trophy"></i></li>
                <li>0</li>
            </ul>
            <h3>En curso</h3>
        </div>
        <div class="seccionResumen">
            <ul class="iconos">
                <li><i class="fi fi-rr-rotate-right"></i></li>
                <li>0</li>
            </ul>
            <h3>En revisión</h3>
        </div>
        <div class="seccionResumen">
            <ul class="iconos">
                <li><i class="fi fi-ss-rocket-lunch"></i></li>
                <li>0</li>
            </ul>
            <h3>Completados</h3>
        </div>
        <div class="seccionResumen">
            <ul class="iconos">
                <li><i class="fi fi-ss-triangle-warning"></i></li>
                <li>0</li>
            </ul>
            <h3>Fuera de Tiempo</h3>
        </div>
    </div>
</div>

<div class="listado">
    <h2>Listado de Planes Mensuales</h2>
    <table class="rwd-table">
        <tr class="trHead">
            <th>NOMBRE DEL PROYECTO</th>
            <th>CLIENTE</th>
            <th>RESPONSABLE</th>
            <th>FECHA DE ENTREGA</th>
            <th>FECHA DE PAGO</th>
            <th>ESTADO</th>
            <th>PAGO</th>
        </tr>
        <?php foreach($proyectos as $proyecto): ?>
        <tr class="trBody">
            <td data-th="col1"><?php echo $proyecto["nombreProyecto"]?></td>
            <td data-th="col2"><?php echo $proyecto["cliente"]?></td>
            <td data-th="col3"><?php echo $proyecto["responsable"]?></td>
            <td data-th="col4"><?php echo $proyecto["fechaEntrega"]?></td>
            <td data-th="col5"><?php echo $proyecto["fechaPago"]?></td>
            <td data-th="col6" class="estado"><p><?php echo $proyecto["estado"]?></p></td>
            <td data-th="col5"><?php echo $proyecto["pago"]?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>