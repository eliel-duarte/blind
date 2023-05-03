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
            return $tempoPercorrido;

        }

        // funcção que calcula o tempo restante do blind
        function tempoBlindRestante( $tempoBlind, $agora, $inicio )
        {
            // divide o tempo em array
            $tempo = explode(":", $tempoBlind);

            // timestamp formula = (horas*3600) + (minutos*60) + segundos
            $tpTempo = (($tempo[0]*3600) + ($tempo[1]*60) + $tempo[2]);
            
            // chama a função que calcula o tempo percorrido do torneio
            $tempoPercorrido = $this->tempoPercorrido( $agora, $inicio );

            // retira o resto do tempo percorrido
            $tempoRestante = $tpTempo - ($tempoPercorrido % $tpTempo);

            return $tempoRestante; 
        }

    }

    // instancia a classe
    $Tempo = new Tempo;
    
?>