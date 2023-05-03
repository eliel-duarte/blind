<?php
    
    date_default_timezone_set('America/Sao_Paulo');

    require_once("../config.php");
    require_once("classes/Conexao.class.php");
    require_once("classes/Tempo.class.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- METAS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- PROPIEDADES -->
    <title>Painel - Poker</title>

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        setInterval(function (){
            $( "#container" ).load( "painel.php" );
        }, 1000);
    </script>

    <!-- ESTILOS -->

</head>
<body>
    <div id="container"></div>
    <?php echo DB_SENHA; ?>
    
</body>
</html>