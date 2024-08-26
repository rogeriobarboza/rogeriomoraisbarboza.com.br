<?php

    require "configs/env/urls.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio <?php echo "- ".$page ?></title>

    <link rel="stylesheet" href="<?php echo $headers ?>header.css">
    <script src="<?php echo $headers ?>header.js" defer></script>

    <link rel="stylesheet" href="<?php echo $bodys ?>body.css">
    <link rel="stylesheet" href="<?php echo $footers ?>footer.css">
</head>

<body>
     
    <header>
        
        <nav class="navbar">
            <a href="home" class="logo">Portfolio</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="projetos" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="sobre" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="contato" class="nav-link">Contato</a></li>
            </ul>
            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <div id="space"></div>


