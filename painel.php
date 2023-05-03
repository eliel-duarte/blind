<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-03 14:30:00");
    
    // Data e hora atual
    echo $agora = date("Y-m-d H:i:s");
    echo "<br>";
    // Tempo percorrido
    echo $Tempo->tempoPercorrido( $agora , $inicioTorneio );
    
    $tptempoBlind = 900;
    $tpAgora = strtotime($agora);
    $tpInicio = strtotime($inicioTorneio);
    $tempoRestante = $tptempoBlind - ( $tpAgora - $tpInicio);
    echo gmdate("H:i:s", $tempoRestante);
    


?>