<?php
    
    // AUTOLOAD DE CLASSES DO COMPOSER
    require __DIR__.'/vendor/autoload.php';

    // Dependências do Projeto
    use \App\Caixa\Loteria;

    // consulta concurso
    $resultado = Loteria::consultarResultado('megasena');

?>