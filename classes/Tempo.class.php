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
        
        function testeTempo(){
            echo "tempo correto";
        }
    }
    
?>