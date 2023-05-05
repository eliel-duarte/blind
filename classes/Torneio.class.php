<?php

class Torneio
{
    require_once("classes/Conexao.class.php");
    
    function getTorneio( $id )
    {
        $query = "SELECT * FROM torneio WHERE id = $id";
        $sql = $MySQL->query($query);
        $torneio = $sql->fetch_object();

        return $torneio;
    }
}

$Torneio = new Torneio();

?>