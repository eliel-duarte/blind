<?php

namespace App\Caixa;

class Loteria{

    /**
     * URL base da api de loterias da Caixa
     * @var string
     */
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';
    
    /**
     * Método responsavel por obter os resultados das loterias da Caixa
     * @param string
     * @return array
     */
    public static function consultarResultado($resultado){

        echo "<pre>";
        print_r($loteria);
        echo "</pre>";
    }
}

?>