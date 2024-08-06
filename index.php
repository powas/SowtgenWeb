<?php
// Obtener la URL de la solicitud
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Quito el slash del final para estandarizar
$caracter = substr($url, -1);
if($caracter === '/'){
  $url = substr($url, 0, -1);
}

// Definir las rutas y sus correspondientes controladores
$routes = array(
  '' => 'pagina-principal.php',
  'ingenieria-y-obras' => 'ingenieria-y-obras.php',
  'process-solutions' => 'process-solutions.php',
  'mercados' => 'mercados.php',
  'productos' => 'productos.php',
  'ingenieria-y-obras/' => 'plantillas/plantilla-ingenieria-y-obras.php',
  'process-solutions/' => 'plantillas/plantilla-process-solutions.php',
  'mercados/' => 'plantillas/plantilla-mercados.php',
  'industrias/' => 'plantillas/plantilla-industrias.php',
  'equipos/' => 'plantillas/plantilla-maquinas.php',
);

require_once 'config/configuracion.php';
require_once 'controlador/controlador-paginas.php';
require_once 'controlador/controlador-ingenieria-y-obras.php';
require_once 'controlador/controlador-process-solutions.php';
require_once 'controlador/controlador-mercados.php';
require_once 'controlador/controlador-industrias.php';
require_once 'controlador/controlador-maquinas.php';

// Comprobar si la ruta es simple y está definida, y dirigir la solicitud al controlador correspondiente
if (array_key_exists($url, $routes)){
  include_once $routes[$url];
} 
else{
  $flagCoincidencia = false;
  // Comprobar si la ruta es compleja y esta definida, y dirigir la solicitud a la plantilla correspondiente
  foreach($routes as $key => $value)
  {
    $urlArray = explode('/', $url);
    if(count($urlArray) > 1) {
      if(empty($urlArray[count($urlArray) - 1])){
        array_pop($urlArray);
      }      
      $param = $urlArray[count($urlArray) - 1];
      array_pop($urlArray);
      $base = implode('/', $urlArray).'/';
      if(stristr($key, $base) !== false) {
        include_once $routes[$base];
        $flagCoincidencia = true;
      }
    }          
  }

  if(!$flagCoincidencia){
    // Manejar la ruta no encontrada    
  }  
}

include_once 'footer.php';