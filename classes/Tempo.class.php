<?php

    class Tempo
    {
        /**
         * @param $maior - tempo maior
         * @param $menor - tempo menor
         * @param $formato  - Formato esperado de saida
         */
        function subtrairTempo( $maior, $menor, $formato = '%a' ) {

            $menor     =   new DateTime( $menor );

            $maior     =   new DateTime( $maior );

            //Calcula a diferença entre as datas
            $diferença   =   $menor->diff($maior, true);   

            //Formata no padrão esperado e retorna
            return $diferença->format( $formato );

        }

        function horaCheia($segundos) {
            $negative = $segundos < 0; //Verifica se é um valor negativo
        
            if ($negative) {
                $segundos = -$segundos; //Converte o negativo para positivo para poder fazer os calculos
            }
        
            $hours = $segundos / 3600;
        
            $mins = ($segundos - ($hours * 3600)) / 60;
        
            //Pega o valor após o ponto flutuante
            $f = fmod($hours, 1);
        
            //Adiciona minutos se $segundos for quebrado
            if ($f > 0) $mins += 60 * $f;
        
            $secs = $segundos % 60;
        
            $sign = $negative ? '-' : ''; //Adiciona o sinal de negativo se necessário
        
            return $sign . sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
        }        

    }

    // instancia a classe
    $Tempo = new Tempo;
    
?>