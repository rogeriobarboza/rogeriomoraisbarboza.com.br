<?php

    require "configs/env/urls.php";
    $page = "Home";

    include "layouts/header/header.php";
?>
<div class="mainContent">
    


    <div class="content" id="contNomeLinks">
        <div id="nomeLinks">
            <h1>Rogerio Barboza</h1>
            <p>Desenvolvedor em desenvolvimento...</p>
            <h1 class="areas">Backend - Frontend</h1>
            <div class="divBtn">
                <a href="https://github.com/rogeriobarboza"><button>GitHub</button></a>
            </div>
            <div class="divBtn">
                <a href="https://www.linkedin.com/in/rogeriomoraisbarboza/"><button>linkedin</button></a>
            </div>
            <div class="divBtn">
                <a href="<?php $contPages?>contato"><button>Contato</button></a>
            </div>
        </div>
    </div><hr>

    <div class="content" id="imgTxt">
        <img src="<?php echo $contPages ?>imgs/rogerio-barboza.jpeg" id="imgPerfil" alt="">
        <p id="imgDesc">42 anos, fotógrafo de eventos sociais em transição de carreira.</p>
    </div>

    <div class="content" id="resPro">
        <div>
            <h2>Sobre</h2>
            <p>
            Desenvolvedor por natureza, inicio no mundo do desenvolvimento acadêmico/profissional após me ver imerso em tecnologias de linguagens e softwares, em busca de melhorias e soluções para minhas atividades profissionais em outras áreas.
            Em minha jornada venho desenvolvendo de modo autodidata, habilidades em análise, desenvolvimento e manutenção de sites e sistemas web utilizando linguagens de marcação e estilo como html, css, linguagens de programação javascript e php, softwares wordpress, banco de dados mysql e mariadb, Linux, Google Cloud Platform (GCP), Amazon Web Services (AWS).
            </p>
        </div>

        <div id="divBtnSobre">
        <button id="btnSobre"><a id="aSobre" href= "sobre">Mais informações</a></button>
        </div>
        
    </div><br>

    <h2 ID="destaque">PROJETO EM DESTAQUE</h2>


        
    <?php
            echo "<hr>";
            include "projects/flip-show/flip-show-thumb.php"; 
    ?> 

    <div id="btnMaisProj">
        <a href= "projetos">
            <button> Mais projetos </button>
        </a>
    </div>

</div> <!--Fim mainContent -->

<?php

    include "layouts/footer/footer.php"; 
    
?> 