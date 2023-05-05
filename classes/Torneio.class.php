<?php

class Torneio
{

    public require_once("classes/Conexao.class.php");
    
    function getTorneio( $id )
    {  
        
        $MySQL = new MySQLiConnection();

        $query = "SELECT * FROM torneio WHERE id = $id";
        $sql = $MySQL->query($query);
        $torneio = $sql->fetch_object();

        return $torneio;
    }
}

$CLASS_Torneio = new Torneio();

?>