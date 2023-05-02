<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-02 14:00:00");
    
    // Data e hora atual
    echo $agora = date("Y-m-d H:i:s");

    echo "v1<br />";

    // Tempo percorrido
    echo $Tempo->tempoPercorrido( $inicioTorneio );


?>