<?php

    class Tempo
    {
        function tempoPercorrido( $agora , $inicio )
        {            
            // Converter $agora para o formato Unix timestamp
            $tpAgora = strtotime($agora);
            
            // Converter $inicio para o formato Unix timestamp
            $tpInicio = strtotime($inicio);

            // Subtrai o inicio do agora
            $tempoPercorrido = $tpAgora - $tpInicio;

            // Retorna no fomato H:m:s
            return gmdate("H:i:s", $tempoPercorrido);

        }

    }

    // instancia a classe
    $Tempo = new Tempo;
    
?>