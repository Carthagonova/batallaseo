<?php

// Obtener la URL solicitada
$request_uri = $_SERVER['REQUEST_URI'];

include $_SERVER['DOCUMENT_ROOT'].'/complements/header.php';

// Redirigir a la página correspondiente
if ($request_uri == '/robots')) {
    echo "Pagina bloqueada por el robots.txt";
} elseif ($request_uri == '/error4xx') {
    header("HTTP/1.0 404 Not Found");
    echo 'Estás en una página de error';
} else {
    // Mostrar una página de error si la URL solicitada no coincide con ninguna página conocida
    header("HTTP/1.0 404 Not Found");
    include 'errores/404.php';
}

include $_SERVER['DOCUMENT_ROOT'].'/complements/footer.php';
?>