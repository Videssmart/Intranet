<?php  

include 'layouts/header.php';


$pagina = $_GET['seccion'] ?? 'inicio';

$archivo_pagina = "pages/$pagina.php";

if(file_exists($archivo_pagina)){
    include $archivo_pagina;
}else{
    echo'404 - Página no encontrada';
};





include 'layouts/footer.php';
?>

