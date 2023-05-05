<?php

class Torneio
{
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