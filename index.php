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

        function pausaTorneio(){
            $( "#console" ).load( "pausaTorneio.php" );            
        }
    </script>

    <!-- ESTILOS -->

</head>
<body>
    <div id="console"></div>
    <br />
    <div id="container"></div>    
    
</body>
</html>