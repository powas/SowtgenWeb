<?php 
//DEPENDENCIA AL MODULO DE PERSISTENCIA
require_once 'persistencia/persistencia_mysql.php';

function cargarProyecto($slug) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "proyectos";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE slug_proyecto = '" . $slug . "' LIMIT 1";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta[0] : array();
    
    return $retorno;
}

function cargarProyectos() 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "proyectos";
    $inicio     = "";
    $limite     = "";
    
    $criterio = " ORDER BY titulo_proyecto ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}

function cargarImagenesProyecto($id) 
{ 
    $consulta = array();
        
    $campos     = "*";
    $tabla      = "imagenes_proyecto";
    $inicio     = "";
    $limite     = "";
    
    $criterio = "WHERE id_proyecto = '" . $id . "' ORDER BY id_imagen_proyecto ASC";
    
    $consulta   = obtenerPedido($campos, $tabla, $criterio);
    
    $retorno    = !empty($consulta) ? $consulta : array();
    
    return $retorno;
}
?>