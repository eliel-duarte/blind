<?php

    require_once("config.php");

    echo date('H:i:s');

    echo "<br />";
    //echo $Tempo->subtrairTempo( "1986/09/25", "2023/09/25" )

    $entrada = strtotime( '2010-05-25 23:30:25' );
    $saida   = strtotime( '2010-05-26 11:15:20' );
    $diferenca = $saida - $entrada;
    
    echo date('d/m/Y H:i:s', $diferenca);

?>