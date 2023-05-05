<?php

    require_once("config.php");

    // teste banco
    $query = "SELECT * FROM torneio WHERE id = 1";
    $sql = $MySQL->query($query);
    $torneio = $sql->fetch_object();

    var_dump($torneio);
    $idTorneio = $torneio->id;

    // Verifica se o torneio está pausado
    
    if ($torneio->status == "pausado"){

        echo $tpPausa = strtotime($torneio->pausa);
        echo $tpPausa += 1;

        /*
        $novaPausa = gmdate("H:i:s", $tpPausa );
        // cria a query de editar
        $query = "
            UPDATE torneio SET
                pausa = $novaPausa
            WHERE torneio.id = $idTorneio;
        ";
        
        // executa e verifica a query
        if ($MySQL->query($query) === TRUE) {

            echo "<br>sucesso";

        } else {
            echo "Erro: <br /> " . $sql . "<br>" . $My->error . "<br />";//exibe mensagem de erro se houve

        } 
        */      
    }    
    
    // Data e Hora de inicio do Torneio
    echo "<br>";
    echo $inicioTorneio = $torneio->horarioInicio;
    
    // Nome do Torneio
    echo "<br>";    
    echo $torneio->nome."<br>";   
    
    
    // Data e hora atual
    $agora = date("Y-m-d H:i:s");    
    echo "Agoras: ".$agora."<br>";
    
    // Tempo percorrido
    echo "Percorrido desde o inicio: ".gmdate("H:i:s", $Tempo->tempoPercorrido( $agora , $inicioTorneio ))."<br>";

    // Tempo parado
    $pausa = $torneio->pausa;
    echo "Tempo Parado: ".$torneio->pausa."<br>";

    // Tempo percorrido
    echo "Tempo de jogo: ".gmdate("H:i:s", $Tempo->tempoDeJogo( $agora , $inicioTorneio, $pausa ))."<br>";
    
    // tempo do blind restante
    $tempoBlind = "00:15:00"; 
    echo "Restante Blind: ".gmdate("H:i:s", $Tempo->tempoBlindRestante( $tempoBlind, $agora, $inicioTorneio, $pausa ))."<br>";

    // nível atual de blinds
    echo "Nível: ".$Tempo->nivelAtual($tempoBlind, $agora, $inicioTorneio, $pausa)."<br>";



    ?>

    <a href="#" onClick="">Pausa</a>

<?php
    
    
/**FIM PAINEL**/
?>
