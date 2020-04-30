<?php

function config($path)
{
    $configuratie = parse_ini_file($path);
    define("CONFIGURATIE", $configuratie, true);
}
?>