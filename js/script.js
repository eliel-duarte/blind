// Definindo as variáveis principais
var play = false; // Controla o estado do timer
var round = 1; // Nível atual
var timerMin = 16; // Minutos restantes na rodada
var timerSec = 00; // Segundos restantes na rodada

// Criar elementos de áudio
var falta1m = new Audio('js/falta_1m.mp3');
var falta5s = new Audio('js/falta_5s.mp3');
var mudarBlind = new Audio('js/mudar_blind.mp3');

// Definição dos níveis de blinds e antes
var blinds = [
    { small: 100, big: 200 }, { small: 200, big: 300 }, { small: 200, big: 400 }, 
    { small: 300, big: 500 }, { small: 300, big: 600 }, { small: 400, big: 800 }, 
    { small: 500, big: 1000 }, { small: 600, big: 1200 }, { small: 1000, big: 1500 },
    { small: 1000, big: 2000 }, { small: 1000, big: 2500 }, { small: 1500, big: 3000 }, 
    { small: 2000, big: 4000 }, { small: 2500, big: 5000 }, { small: 3000, big: 6000 }, 
    { small: 4000, big: 8000 }, { small: 5000, big: 10000 }, { small: 6000, big: 12000 }, 
    { small: 10000, big: 15000 }, { small: 10000, big: 20000 }, { small: 10000, big: 25000 }, 
    { small: 15000, big: 30000 }, { small: 20000, big: 40000 }, { small: 25000, big: 50000 }, 
    { small: 30000, big: 60000 }, { small: 40000, big: 80000 }, { small: 50000, big: 100000 }, 
    { small: 60000, big: 120000 }, { small: 100000, big: 150000 }, { small: 100000, big: 200000 }
];

var maxRounds = blinds.length; // Número total de níveis de blinds

// Função para formatar o tempo para o formato MM:SS
function formatTime(min, sec) {
    return (min < 10 ? '0' + min : min) + ":" + (sec < 10 ? '0' + sec : sec);
}

// Função para atualizar o visor de tempo, nível de blinds e o próximo nível
function updateDisplay() {
    $('#tempo').text(formatTime(timerMin, timerSec)); // Exibe o tempo no visor

    // Atualiza o nível de blinds atual e o próximo
    var currentBlind = blinds[round - 1];
    var nextBlind = blinds[round < maxRounds ? round : maxRounds - 1]; // Último nível fixo

    currentBlind.ante = currentBlind.big;
    nextBlind.ante = nextBlind.big;

    $('#blind span').text(currentBlind.small + " - " + currentBlind.big);
    $('#blind2 span').text(nextBlind.small + " - " + nextBlind.big);

    // Atualiza o ante exibido
    $('#blind a').text(currentBlind.ante);
    $('#blind2 a').text(nextBlind.ante);

    // Exibe o nível atual
    $('#nivel').text(round);
}

// Função para contar o tempo
function countDown() {
    if (play) {
        if (timerSec > 0) {
            timerSec--; // Decrementa os segundos
        } else {
            if (timerMin > 0) {
                timerMin--; // Decrementa os minutos quando os segundos chegam a zero
                timerSec = 59; // Reinicia os segundos para 59
            } else {
                nextRound(); // Se o tempo acabar, avança para o próximo nível
            }
        }

        // Verifica se falta 1 minuto para o próximo nível
        if (timerMin === 1 && timerSec === 0) {
            falta1m.play();
        }

        // Verifica se falta 4 segundos para o próximo nível
        if (timerMin === 0 && timerSec === 4) {
            falta5s.play();
        }

        // Verifica se falta 1 segundos para o próximo nível Toca o som ao mudar o blind
        if (timerMin === 0 && timerSec === 0) {
            mudarBlind.play(); 
        }

        // Toda vez que zerar os segundos, a cada 1 minuto chama a função atualizar
        if (timerSec === 0) {
            atualiza();
        }
        

        updateDisplay(); // Atualiza o visor após cada decremento
    }
}

// Função para iniciar ou pausar o timer
function startPause() {
    play = !play; // Alterna entre iniciar e pausar
    $('.start_pause').text(play ? "II" : "▶"); // Altera o ícone do botão

    if (play) {
        refreshTimer(); // Reinicia o contador quando iniciado
    }
}

// Função para avançar para o próximo nível de blinds
function nextRound() {
    if (round < maxRounds) {
        round++; // Avança para o próximo nível
        resetTimer(); // Reseta o tempo para o próximo nível
        updateDisplay(); // Atualiza o visor para os novos blinds        
    }
}

// Função para voltar ao nível de blinds anterior
function lastRound() {
    if (round > 1) {
        round--; // Volta para o nível anterior
        resetTimer(); // Reseta o tempo para o nível anterior
        updateDisplay(); // Atualiza o visor para os blinds do nível anterior
    }
}

// Função para resetar o timer ao tempo original para cada nível
function resetTimer() {
    timerMin = 16; // Define o tempo de rodada para 15 minutos
    if (round > 9){
        timerMin = 14;
    }    
    timerSec = 0; // Reinicia os segundos
    updateDisplay(); // Atualiza o visor com o tempo ressetado
}

// Função para manter o timer atualizado continuamente a cada segundo
function refreshTimer() {
    if (play) {
        countDown();
        setTimeout(refreshTimer, 1000); // Chama a função novamente após 1 segundo
    }
}

// Inicializa o visor quando a página é carregada
$(document).ready(function() {
    updateDisplay();

    // Vincula os botões de controle aos seus eventos
    $('.start_pause').on('click', startPause); 
    $('.next_blind').on('click', nextRound); 
    $('.last_blind').on('click', lastRound); 
    $('.reset_time').on('click', resetTimer); 
});