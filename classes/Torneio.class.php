<?php

class Torneio
{
    public function __construct()
    {
        require_once("Conexao.class.php");    
    }

    function getTorneio( $id )
    {
        $query = "SELECT * FROM torneio WHERE id = $id";
        $sql = $MySQL->query($query);
        $torneio = $sql->fetch_object();

        return $torneio;
    }
}

$CLASS_Torneio = new Torneio();

?>