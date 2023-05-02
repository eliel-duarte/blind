<?php

    require_once("config.php");

    echo date('H:i:s');

    echo "<br />";
    //echo $Tempo->subtrairTempo( "1986/09/25", "2023/09/25" )

    $entrada = strtotime( '209-05-25 23:30:15' );
    $saida   = strtotime( '2010-05-26 11:15:20' );
    $diferenca = $saida - $entrada;
    
    echo date('H:i:s', $diferenca);

?>