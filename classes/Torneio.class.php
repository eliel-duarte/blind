<?php

class Torneio
{

    public function __construct()
    {
        require_once("classes/Conexao.class.php");
        Public $MySQL = new MySQLiConnection();
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