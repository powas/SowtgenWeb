<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarMaquina($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "maquinas";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_maquina = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarMaquinasMercados($id_mercado) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_maquinas_industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_mercado = '" . $id_mercado . "' GROUP BY id_maquina ORDER BY id_maquina ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}

function cargarMaquinasIndustrias($id_industria) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_maquinas_industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_industria = '" . $id_industria . "' GROUP BY id_maquina ORDER BY id_maquina ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}

function cargarMaquinasProcessSolutions($id_process_solution) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "vista_maquinas_industrias";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_process_solution = '" . $id_process_solution . "' GROUP BY id_maquina ORDER BY id_maquina ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>