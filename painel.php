<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-02 14:00:00");
    
    // Data e hora atual
    $agora = date("Y-m-d H:i:s");

    // Tempo percorrido
    echo $Tempo->tempoPercorrido( $agora , $inicioTorneio );


?>