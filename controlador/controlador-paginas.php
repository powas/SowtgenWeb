<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarPagina($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "paginas";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_pagina = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}
?>