<?php

    require_once("config.php");

    echo date('H:i:s');

    echo "<br />";
    //echo $Tempo->subtrairTempo( "1986/09/25", "2023/09/25" )

    $entrada = strtotime( '2010-05-25 23:30' );
    $saida   = strtotime( '2010-05-26 11:15' );
    $diferenca = $saida - $entrada;
    
    printf( '%d:%d', $diferenca/3600, $diferenca/60%60 );    

?>