<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-03 14:30:00");
    
    // Data e hora atual
    $agora = date("Y-m-d H:i:s");
    echo "Agora: ".$agora."<br>";
    // Tempo percorrido
    echo "Percorrido: ".$Tempo->tempoPercorrido( $agora , $inicioTorneio )."<br>";
    
    $tempoBlind = date("0:15:00");
    echo $tpTempoBlind = strtotime($tempoBlind);
    //$tpAgora = strtotime($agora);
    //$tpInicio = strtotime($inicioTorneio);
    //$tempoRestante = $tptempoBlind - ( $tpAgora - $tpInicio);
    //echo gmdate("H:i:s", $tempoRestante);
    


?>