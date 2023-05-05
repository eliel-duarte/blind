<?php

class Torneio
{

    public function __construct()
    {
        require_once("classes/Conexao.class.php");        
        require_once("classes/Tempo.class.php");
    } 

    function getTorneio( $id )
    {  
        $MySQL = new MySQLiConnection();        

        $query = "SELECT * FROM torneio WHERE id = $id";
        $sql = $MySQL->query($query);
        $torneio = $sql->fetch_object();

        return $torneio;

        //$MySQL->close;
    }

    function adicionaPausa( $idTorneio, $pausa, $horarioInicio )
    {
        $Tempo = new Tempo();
        $MySQL = new MySQLiConnection();

        $tpPausa = $Tempo->horaEmInteiro( $pausa );
        $tpPausa += 1;
        
        $novaPausa = gmdate("H:i:s", $tpPausa );
        // cria a query de editar
        $query = "
            UPDATE torneio SET
                horarioInicio = '$horarioInicio',
                pausa = '$novaPausa'
            WHERE torneio.id = $idTorneio;
        ";
        
        // executa e verifica a query
        if ($MySQL->query($query) === TRUE) {

            echo "<br>sucesso";

        } else {
            echo "Erro: <br /> " . $sql . "<br>" . $My->error . "<br />";//exibe mensagem de erro se houve

        } 
        
        //$Tempo->close;
    }
}

$CLASS_Torneio = new Torneio();

?>