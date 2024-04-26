<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarProcessSolution($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "process_solutions";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_process_solution = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio, $inicio, $limite);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarProcessSolutions() 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "process_solutions";
    $inicio     = "";
    $limite     = "";
    
    $criterio = " ORDER BY id_process_solution ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio, $inicio, $limite);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>