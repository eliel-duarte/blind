<?php

    class Tempo
    {
        // Função que calcula o tempo percorrido do torneio
        function tempoPercorrido( $agora, $inicio )
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

        // funcção que calcula o tempo restante do blind
        function tempoBlindRestante( $tempoBlind )
        {
            // divide o tempo em array
            $tempo = explode(":", $tempoBlind);

            // timestamp formula = (horas*3600) + (minutos*60) + segundos
            $tpTempo = (($tempo[0]*3600) + ($tempo[1]*60) + $tempo[2]);

            return $tpTempo; 
        }

    }

    // instancia a classe
    $Tempo = new Tempo;
    
?>