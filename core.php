<?php

// Obtener la URL solicitada
$request_uri = $_SERVER['REQUEST_URI'];

include $_SERVER['DOCUMENT_ROOT'].'/complements/header.php';

// Redirigir a la página correspondiente
if ($request_uri == '/robots') {
    echo "Pagina bloqueada por el robots.txt";
} elseif ($request_uri == '/error4xx') {
    header("HTTP/1.0 418 Not Found");
    echo 'Soy una tetera';}
    elseif ($request_uri == '/existir') {
        echo 'Esta página si existe';
} else {
    // Mostrar una página de error si la URL solicitada no coincide con ninguna página conocida
    header("HTTP/1.0 404 Not Found");
    echo '<h1>Error 404</h1>';
}

include $_SERVER['DOCUMENT_ROOT'].'/complements/footer.php';
?>