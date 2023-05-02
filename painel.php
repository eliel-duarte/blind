<?php

    require_once("config.php");

    echo date('d/m/Y H:i:s');

    echo "<br />";
    //echo $Tempo->subtrairTempo( "1986/09/25", "2023/09/25" )

    

    $inicioTorneio = strtotime( '2023/05/02 14:00:00' );
    $agora = strtotime( date('d/m/Y H:i:s') );
    $diferenca = $inicioTorneio - $agora;
    
    echo $diferenca;
    echo "<br />";
    echo $Tempo->horaCheia($diferenca);

?>