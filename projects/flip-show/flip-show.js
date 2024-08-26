// Logs auxiliares
console.log("Informações do array");
var flipArray = document.getElementsByClassName("flip"); // ARRAY LIKE, HTMLCollection

var flipArraySize = flipArray.length; // Pega o tamanho do array contando a partir da posição "0" ("0" que conta-se como "1") até a ultima posição
console.log("-> Tamanho/contagem do array = "+flipArraySize);

// ESTUDO SOBRE PEGAR VALOR DE ATRIBUTO CSS (valores computados)

    // EXEMPLO: pegar valor de z-index de uma posição
        // Defina uma posição no array
        var primeiroElemento = flipArray[0];
        // Obtenha as propriedades de estilo computado da posição/elemento (primeiroElemento, nesse estudo de caso)
        const estiloComputado = window.getComputedStyle(primeiroElemento);
        // Obtenha o valor de 'z-index' do estilo computado
        const zIndexPrimeiroElemento = estiloComputado.getPropertyValue('z-index');
        console.log("-> z-index do Primeiro elemento = "+zIndexPrimeiroElemento);
        console.log("");

// z-index - auxiliar
var bz = 1; // anterior
var mz = 2; // principal
var nz = 1; // proximo

// POSIÇÕES no indice - Auxiliares console.log
var preFlipLog = 0; // anterior
var flipLog = 0; // principal
var proxFlipLog = 0; // proximo

// Auxiliar
var start = 0;
var end = 0;
var i = 0; // Contador

// Configurações iniciais
console.log("Configurações iniciais");

// Define posição/flip inicial
var flip = 0;

// Tras a 1ª imagem para frente (1ª posição no indice)  
flipArray[flip].style.zIndex = mz; 

// Logs auxiliares
console.log("-> Posição/Flip inicial = "+flip)
console.log("-> z-index/ordem inicial = "+mz);
console.log("-----//-----");

// Variável de controle para verificar se o botão já foi clicado recentemente
var clickMonitor = false;

// Função a ser executada quando o botão é clicado
function nextBtn(){
    console.log("==//==");
    
    // Verifica se o botão já foi clicado recentemente
    if (!clickMonitor) {
        // Define o botão como clicado recentemente
        clickMonitor = true;

        // Executa a função desejada (aqui apenas um log no console)
        console.log("Função nextBtn() executada!");
        next()

        // Aguarda 1 segundo antes de permitir clicar novamente
        setTimeout(function() {
            clickMonitor = false;
        }, 600); // 1000 milissegundos = 1 segundo
    }
}

function backBtn(){
    console.log("==//==");
    
    // Verifica se o botão já foi clicado recentemente
    if (!clickMonitor) {
        // Define o botão como clicado recentemente
        clickMonitor = true;

        // Executa a função desejada (aqui apenas um log no console)
        console.log("Função backBtn() executada!");
        back()

        // Aguarda 1 segundo antes de permitir clicar novamente
        setTimeout(function() {
            clickMonitor = false;
        }, 600); // 1000 milissegundos = 1 segundo
    }
}

// Esta é uma forma provisória de renderizar as imagens previamente
function autoplay(){

    var flipContainer = document.getElementById("flipContainer");
    flipContainer.style.opacity=".01"
    Array.prototype.forEach.call(flipArray, function(flip, indice) {
        console.log('Índice ' + indice + ': ' + flip);
        next();
        setTimeout(function() {
            back();
        }, 1000);
    });
    setTimeout(function() {
        flipContainer.style.opacity="1"
    }, 1000);
}

autoplay();


// ======== NEXT FUNCTION ==================================================================================================== //

function next(){

// Define z-index "0" para todas as posições menos a posição principal
let zr = flipArraySize;

    for(i=flip; i<flipArraySize; i++){ // anotação: && i>0 && i<=flip.length
            
            flipArray[i].style.zIndex = zr--;
            console.log("Loop - Posição "+i+" recebeu z-index = "+zr);
            
    }

    // Define a posição principal

    if (start==1 && flip<flipArraySize-1) { // Limita o incremento para não eceder o array
        ++flip; // AVANÇA para o proximo Flip
        flipLog = flip;
        console.log("Botão Next: FLIP = "+flipLog);
    } else {
        flipLog = flip;
        console.log("Botão Next: FLIP = "+flipLog);
    }
  

    if (flip<=flipArraySize-1) { // Previne eceder o array alem do seu tamanho

        flipArray[flip].style.transform = "rotateY(-180deg)"; // Aplica o flip/virada de pagina com mudança de grau em cada pagina 
    }

    setTimeout(function() {
        
            for (i=0; i<=flip; i++) {

                flipArray[i].style.zIndex = i;
                console.log("Loop Next time - Posição "+i+" recebeu z-index = "+i);              
            }

    }, 550);
    



    if (start==0){
        start = 1;
        end = 0;
    } 

    
    
} // FIM FUNCTION NEXT


// ======= BACK FUNCTION ================================================================================================================= //

function back() {
    
    let zl = -1;

    // Define a posição principal

    if (end==1 && flip>0) { // Limita o incremento para não eceder o array
        --flip; // AVANÇA para o proximo Flip
        
        flipLog = flip;
        console.log("Botão Back: FLIP = "+flipLog);
    } else {
        flipLog = flip;
        console.log("Botão Back: FLIP = "+flipLog);
    }
    

    if (flip>=0) { // Previne eceder o array em menos de 0

            flipArray[flip].style.transform = "rotateY(0deg)"; // Aplica o flip/virada de pagina com mudança de grau em cada pagina

    }

    setTimeout(function() {  

        for(i=flipArraySize-1; i>=flip; i--){
            flipArray[i].style.zIndex = zl++;
            console.log("Loop Back Time - Posição "+i+" recebeu z-index = "+zl);
        }


    }, 600);


    if (end==0){
        end = 1;
        start = 0;
    } 
    
} // FIM FUNCTION BACK