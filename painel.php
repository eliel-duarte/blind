<?php

    require_once("config.php");

    // Data e Hora de inicio do Torneio
    $inicioTorneio = date("2023-05-01 23:00:00");
    
    // Data e hora atual
    echo $agora = date("Y-m-d H:i:s");
    echo "<br>";
    // Tempo percorrido
    echo $Tempo->tempoPercorrido( $agora , $inicioTorneio );

?>