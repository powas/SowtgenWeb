<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarMercado($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_mercados";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_mercado = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarMercados() 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_mercados";
    $inicio     = "";
    $limite     = "";
    
    $criterio = " ORDER BY id_categoria_mercado ASC, id_mercado ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>