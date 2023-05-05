<?php

class Torneio
{
    
    require_once("classes/Conexao.class.php");
    public $MySQL = new MySQLiConnection();

    function getTorneio( $id )
    {        
        $query = "SELECT * FROM torneio WHERE id = $id";
        $sql = $this->$MySQL->query($query);
        $torneio = $sql->fetch_object();

        return $torneio;
    }
}

$CLASS_Torneio = new Torneio();

?>