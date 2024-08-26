<?php

    require "configs/env/urls.php";
    $page = "Sobre";

    include "layouts/header/header.php"; 
    
?>

<div class="mainContent">


    <div class="content">
        <div class="txtBox">
            <h1>SOBRE</h1>
            <h2>ROGERIO MORAIS BARBOZA</h2> 
            <p>42 anos, Santo André/SP.</p>
            
            <br><h3>FORMAÇÃO ACADÊMICA</h3>
            <p>Cursando Superior Tecnólogo em Análise e Desenvolvimento de Sistemas pela UNICSUL com conclusão em 2024.</p>

        </div>
    </div>


    <section id="formComp">
        <div class="content">
            <div class="txtBox">

                <h3>FORMAÇÃO COMPLEMENTAR</h3>

                    <div id="cursos">
                        <div id="listaSobre">
                            <ul id="ulSobre">
                                <li class="liSobre">Curso Programação Java Desktop 120h - SENAI</li>
                                <li class="liSobre">Curso HTML5 e CSS3 - CURSO EM VIDEO</li>
                                <li class="liSobre">Curso JavaScript - CURSO EM VIDEO</li>
                                <li class="liSobre">Curso PHP - CURSO EM VIDEO</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <div class="content">
        <div class="txtBox">

            <h3>INFORMAÇÕES ADICIONAIS</h3>

                <div id="infoAdd">
                    <div id="listaSobre">
                        <ul id="ulSobre">
                            <li class="liSobre">Aprendizado autodidata constante, por meio de pesquisas, comparação e análise de conteúdos</li>
                            <li class="liSobre">Disponível para trabalho presencial, remoto ou híbrido</li>
                            <li class="liSobre">Domínio de linguagem Java, php, HTML, CSS e JavasCript</li>
                            <li class="liSobre">Configuração de Servidores em clouds AWS e GCP</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>



</div> <!--Fim mainContent -->

    <?php 
        include "layouts/footer/footer.php";
    ?> 