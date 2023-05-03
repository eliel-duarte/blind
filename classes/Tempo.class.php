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

        function tempoDeJogo( $agora , $inicio, $pausa )
        {
            // divide o tempo em array
            $pausas = explode(":", $pausa);

            // timestamp formula = (horas*3600) + (minutos*60) + segundos
            $tpPausa = (($pausas[0]*3600) + ($pausas[1]*60) + $pausas[2]);
                        
            // chama a função que calcula o tempo percorrido do torneio
            $tempoPercorrido = $this->tempoPercorrido( $agora, $inicio );

            // tempo de jogo
            $tempoDeJogo = $tempoPercorrido - $tpPausa;

            // Retorna no fomato H:m:s
            return $tempoDeJogo;            
        }

        // funcção que calcula o tempo restante do blind
        function tempoBlindRestante( $tempoBlind, $agora, $inicio, $pausa )
        {
            // divide o tempo em array
            $tempo = explode(":", $tempoBlind);

            // timestamp formula = (horas*3600) + (minutos*60) + segundos
            $tpTempo = (($tempo[0]*3600) + ($tempo[1]*60) + $tempo[2]);
            
            // chama a função que calcula o tempo percorrido do torneio
            $tempoPercorrido = $this->tempoDeJogo( $agora, $inicio, $pausa );

            // retira o resto do tempo percorrido
            $tempoRestante = $tpTempo - ($tempoPercorrido % $tpTempo);

            return $tempoRestante; 
        }

        function nivelAtual($tempoBlind, $agora, $inicio, $pausa)
        {
            // chama a função que calcula o tempo percorrido do torneio
            $tempoPercorrido = $this->tempoDeJogo( $agora, $inicio, $pausa );

            // divide o tempo em array
            $tempo = explode(":", $tempoBlind);

            // timestamp formula = (horas*3600) + (minutos*60) + segundos
            $tpTempo = (($tempo[0]*3600) + ($tempo[1]*60) + $tempo[2]);
            
            $nivel = intdiv($tempoPercorrido, $tpTempo) + 1;

            return $nivel;
        }

    }

    // instancia a classe
    $Tempo = new Tempo;
    
?>