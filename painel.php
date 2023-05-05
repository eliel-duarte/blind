<?php

    // Carrega Configurações
    require_once("config.php");

    // id do Torneio
    $idTorneio = "1";

    $torneio = $CLASS_Torneio->getTorneio($idTorneio);

    var_dump($torneio);    

    // Verifica se o torneio está pausado
    
    if ($torneio->status == "pausado"){

        $CLASS_Torneio->adicionaPausa( $torneio->id, $torneio->pausa, $torneio->horarioInicio );    
    }    
    
    // Data e Hora de inicio do Torneio
    echo "<br>";
    echo $inicioTorneio = $torneio->horarioInicio;
    
    // Nome do Torneio
    echo "<br>";    
    echo $torneio->nome."<br>";   
    
    
    // Data e hora atual
    $agora = date("Y-m-d H:i:s");    
    echo "Agoras: ".$agora."<br>";
    
    // Tempo percorrido
    echo "Percorrido desde o inicio: ".gmdate("H:i:s", $Tempo->tempoPercorrido( $agora , $inicioTorneio ))."<br>";

    // Tempo parado
    $pausa = $torneio->pausa;
    echo "Tempo Parado: ".$torneio->pausa."<br>";

    // Tempo percorrido
    echo "Tempo de jogo: ".gmdate("H:i:s", $Tempo->tempoDeJogo( $agora , $inicioTorneio, $pausa ))."<br>";
    
    // tempo do blind restante
    $tempoBlind = "00:15:00"; 
    echo "Restante Blind: ".gmdate("H:i:s", $Tempo->tempoBlindRestante( $tempoBlind, $agora, $inicioTorneio, $pausa ))."<br>";

    // nível atual de blinds
    echo "Nível: ".$Tempo->nivelAtual($tempoBlind, $agora, $inicioTorneio, $pausa)."<br>";



    ?>

    <a href="#" onClick="">Pausa</a>

<?php
    
    
/**FIM PAINEL**/
?>
