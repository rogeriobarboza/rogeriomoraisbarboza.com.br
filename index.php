<?php 

$rota = $_GET['url'] ?? 'home';

if (isset($rota)) {

    switch ($rota) {

        // Páginas principais
        case "home":
            include "contents/pages/{$rota}.php";
        break;
        
        case "projetos":
            include "contents/pages/{$rota}.php";
        break;

        case "sobre":
            include "contents/pages/{$rota}.php";
        break;

        case "contato":
            include "contents/pages/{$rota}.php";
        break;

        // Páginas de Projetos
        case "flip-show":
            include "projects/flip-show/{$rota}.php";
        break;

        default:
            include "contents/pages/notfound.php";
        break;

    }
}

?> 