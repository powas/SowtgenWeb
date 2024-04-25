<?php

/**
 * Establece una coneccion con la DB 
 * @return recurso MySql en exito
 * @return bool FALSE si hubo errores
 */
function conectarDB()
{
    $_serverHost = SERVER_HOST_DB;
    $_userName = USER_NAME_DB;
    $_password = PASSWORD_DB;
    $_schema = SCHEMA_DB;
    $_char_set = CHAR_SET;
    
    $retorno = false;
    
    $conn = @mysqli_connect($_serverHost, $_userName ,$_password);
    if($conn == false)
    {
        $retorno = false;
    }  
    else
    {
        $esquema = mysqli_select_db($conn, $_schema);
        if($esquema == false)
        {
            $retorno = false;
        }
        else
        {
            mysqli_set_charset($conn,$_char_set); 
            $retorno = $conn;
        }    
        
    }    
    return $retorno;
}

/**
 * Realiza la desconeccion de la DB
 * @param recurso MySQL $conn
 * @return bool TRUE si logro desconeccion o FALSE si hubo errores
 */
function desconectarDB($conn)
{    
    $retorno = false;
    
    if(mysqli_close($conn) == false)
    {
        $retorno = false;
    }
    else
    {
        $retorno = true;
    }
    
    return $retorno;
}

/**
 * Realiza la ejecucion de una Consulta SQL
 * @param string $query
 * @return resultset para consulta del tipo SELECT 
 * @return bool TRUE si hubo exito, FALSE si hubo errores, para el resto
 * de las consultas
 */
function ejecutarConsulta($query)
{    
    $retorno = false;
    
    $conn = conectarDB();
    if($conn != false)
    {
        $resultado  = mysqli_query($conn,$query);
        
        if($resultado == false)
        {       
           $retorno = false;
        }     
        else
        {
            $retorno = $resultado;
        }
        desconectarDB($conn);
    }  
    else
    {
        //Este error ya esta contemplado en la funcion conectarDB
        $retorno = false;
    }    
    
    return $retorno;
}
/**
 * Realiza una transaccion de multiples consultas<br>
 * Al iniciar la transaccion se deshabilita el modo Autocommit de la
 * DB impidiendo que las transacciones queden permanentemente en memoria<br>
 * Si TODAS las transacciones fueron exitosas, se realiza el COMMIT de todo
 * el proceso. <br>De lo contrario se realiza un ROLLBACK para dejar todo en 
 * su estado anterior
 * @param array $arrayQuery <p>Array con todas las consultas que se desean ejecutar</p>
 * @return boolean <b>TRUE</b> si se realizo el COMMIT <br><b>FALSE</b> si se realizo el ROLLBACK
 */
function ejecutarTransaccion($arrayQuery)
{    
    $retorno    = false;
    $procesoOK  = true;
    
    $conn = conectarDB();
    if($conn != false)
    {
        mysqli_query($conn,"BEGIN"); 
        foreach($arrayQuery as $query)
        {
            //$query      = @mysql_real_escape_string($query);
            $resultado  = mysqli_query($conn,$query);
            
            if($resultado == false)
            {
                $procesoOK = false;
                break;
            }     
        }    

        if($procesoOK == true)
        {
            mysqli_query($conn,"COMMIT");
            $retorno = true;
        }
        else
        {
            mysqli_query($conn,"ROLLBACK");
            $retorno = false;
        }    
        
        desconectarDB($conn);
    }  
    else
    {
        //Este error ya esta contemplado en la funcion conectarDB
        $retorno = false;
    }    
    
    return $retorno;
}
/**
 * Realiza una transaccion de multiples consultas<br>
 * Al iniciar la transaccion se deshabilita el modo Autocommit de la
 * DB impidiendo que las transacciones queden permanentemente en memoria<br>
 * Si TODAS las transacciones fueron exitosas, se realiza el COMMIT de todo
 * el proceso. <br>De lo contrario se realiza un ROLLBACK para dejar todo en 
 * su estado anterior
 * @param array $arrayQuery <p>Array con todas las consultas que se desean ejecutar</p>
 * @return boolean <b>TRUE</b> si se realizo el COMMIT <br><b>FALSE</b> si se realizo el ROLLBACK
 */
function ejecutarTransaccionConRetorno($arrayQuery)
{    
    $retorno = array();
    $retorno["proceso"] = false;
    $retorno["resultado"] = array();
    $procesoOK  = true;
    
    $conn = conectarDB();
    if($conn != false)
    {
        mysqli_query($conn,"BEGIN"); 
        foreach($arrayQuery as $query)
        {
            //$query      = @mysql_real_escape_string($query);
            $resultado  = mysqli_query($conn,$query);
            
            if($resultado === false)
            {
                $procesoOK = false;
                break;
            }  
            else if($resultado !== true)
            {
                array_push($retorno["resultado"], $resultado);
            }
            
        }    

        if($procesoOK == true)
        {
            mysqli_query($conn,"COMMIT");
            $retorno["proceso"]  = true;
        }
        else
        {
            mysqli_query($conn,"ROLLBACK");
            $retorno["proceso"]  = false;
        }    
        
        desconectarDB($conn);
    }  
    else
    {
        //Este error ya esta contemplado en la funcion conectarDB
        $retorno["proceso"]  = false;
    }    
    
    return $retorno;
}
/**
 * Convierte el formato resultset de una consulta, en un array asociativo
 * Los Strings con los que realizara la asociacion del array, se reciben
 * por parametro ($arrayColumnas)
 * @param resultset $resultado
 * @return array() con valores asociados
 * @return bool FALSE si hubo errores o la consulta es vacia 
 */
function obtenerArray($resultado)
{
    $retorno = false;
    
    if($resultado != false)
    {
        $temp = mysqli_fetch_array($resultado);
        if($temp != false)
        {
            //GENERO UN ARRAY DE FILAS 
            //PARA PODER HACER EL MAPEO DESPUES
            $filas 	= array();
            $indice	= 0;

            while($temp)
            {
                    $filas[$indice]	= $temp;
                    $temp = mysqli_fetch_array($resultado);
                    $indice++;
            }

            //HAGO EL MAPEO         
            try
            {
                $retorno	= array();
                $indice     = 0;
                foreach($filas as $fila)
                {
					foreach($fila as $key => $val) {
						$retorno[$indice][$key] = $val;
					}
										
                    $indice++;
                }
               
            }catch(Exception $e)
            {
            }
            
        }
        else
        {
            $retorno = false;
        }    
    }
    else
    {
        $retorno = false;
    }    
    
    return $retorno;
}

?>