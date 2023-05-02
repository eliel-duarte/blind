<?php

    require_once("config.php");

    echo date('H:i:s');

    echo "<br />";
    //echo $Tempo->subtrairTempo( "1986/09/25", "2023/09/25" )

    $inicioTorneio = strtotime( '2023-05-02 14:00:00' );
    $agora = strtotime( date('d/m/Y H:i:s') );
    $diferenca = $agora - $inicioTorneio;
    
    echo date('H:i:s', $diferenca);

?>