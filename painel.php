<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-03 14:15:00");
    
    // Data e hora atual
    echo $agora = date("Y-m-d H:i:s");
    echo "<br>";
    // Tempo percorrido
    echo $Tempo->tempoPercorrido( $agora , $inicioTorneio );

    $tempoBlind = date("15:00");
    $tptempoBlind = strtotime($tempoBlind);
    $tpAgora = strtotime($agora);
    $tpInicio = strtotime($inicio);
    $tempoRestante = $tptempoBlind - ( $tpAgora - $tpInicio);
    echo gmdate("H:i:s", $tptempoBlind);
    


?>