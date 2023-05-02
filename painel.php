<?php

    require_once("config.php");

// Data e hora atual
$datetime1 = date("Y-m-d H:i:s");

// Converter $datetime1 para o formato Unix timestamp
$timestamp = strtotime($datetime1);

// Tempo a ser subtraido - 01:30 horas
$horas = 1;      // cada hora corresponde a 3600 segundos
$minutos = 30;   // cada minuto corresponde a 60 segundos
$segundos = 0;

// Transforma o tempo a ser subtraido em segundos
$tempo = ($horas * 3600) + ($minutos * 60) + $segundos;

// Subtrair $tempo de $datetime1
$novaDataHora= $timestamp - $tempo;

// Data e hora apos a subtracao
$datetime2 = date("Y-m-d H:i:s", $novaDataHora);

// tempo percorrido
$datainicio = date("2023-05-02 14:00:00");
$timestampinicio = strtotime($datainicio);
$agora = $timestamp;
$tempoPercorrido = $agora - $timestampinicio;


// Mostra os resultados
echo $datetime1 . '<br>';
echo $datetime2 . '<br>';
echo gmdate("H:i:s", $tempoPercorrido) . '<br>';

?>