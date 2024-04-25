<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarIngenieria($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "ingenierias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_ingenieria = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio, $inicio, $limite);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarIngenierias() 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "ingenierias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = " ORDER BY id_ingenieria ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio, $inicio, $limite);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>