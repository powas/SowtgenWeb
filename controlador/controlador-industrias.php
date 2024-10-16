<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarIndustria($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_industria = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarIndustriasMercados($id_mercado) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_mercado = '" . $id_mercado . "' ORDER BY id_industria ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}

function cargarIndustriasProcessSolutions($id_process_solution) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_process_solution = '" . $id_process_solution . "' ORDER BY id_industria ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}

function cargarIndustriasMaquinas($id_maquina) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_maquinas_industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_maquina = '" . $id_maquina . "' ORDER BY id_maquina ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>