<?php

    require_once("config.php");

    // teste banco
    $query = "SELECT * FROM torneio WHERE id = 1";
    $sql = $MySQL->query($query);
    $torneio = $sql->fetch_object();

    var_dump($torneio);

    echo "<br>";
    echo $inicioTorneio = $torneio->horarioInicio;
    echo "<br>";
    
    echo $torneio->nome."<br>";
    
    // Data e Hora de inicio do Torneio
    echo $inicioTorneio = $torneio->horarioInicio
    
    // Data e hora atual
    $agora = date("Y-m-d H:i:s");
    echo "Agoras: ".$agora."<br>";
    /*
    // Tempo percorrido
    echo "Percorrido desde o inicio: ".gmdate("H:i:s", $Tempo->tempoPercorrido( $agora , $inicioTorneio ))."<br>";

    // Tempo parado
    $pausa = "00:30:00";
    echo "Tempo Parado: ".$pausa."<br>";

    // Tempo percorrido
    echo "Tempo de jogo: ".gmdate("H:i:s", $Tempo->tempoDeJogo( $agora , $inicioTorneio, $pausa ))."<br>";
    
    // tempo do blind restante
    $tempoBlind = "00:15:00"; 
    echo "Restante Blind: ".gmdate("H:i:s", $Tempo->tempoBlindRestante( $tempoBlind, $agora, $inicioTorneio, $pausa ))."<br>";

    // nível atual de blinds
    echo "Nível: ".$Tempo->nivelAtual($tempoBlind, $agora, $inicioTorneio, $pausa)."<br>";   
    
    
/**FIM PAINEL**/
?>
