<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('mercados');

$mercados = cargarMercados();

if(empty($mercados)){
  // Manejar la ruta no encontrada  
  header('Location: error');
}

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>
<main class="flex-shrink-0">
  <section id="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col my-2">
        <?php include_once 'breadcrumbs.php';?>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-color3">
    <div class="container min-height-600px d-flex align-items-center">
      <div class="row flex-grow-1">
        <div class="col-xl-6 py-5">
          <h1><?php echo $title; ?></h1>
          <p>Acá sería conveniente tener un breve texto introductorio que hable sobre que soluciones propone Sowtgen para los distintos tipos de mercados.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0 pe-none">
      <div class="row">
        <div class="col-xl-5 ms-auto" style="background-image: url(<?=BASE_PATH?>/img/ingenieria-y-obras-1200x800.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section> 
  <?php 
    $auxCategoriaMercado = 0;
    if(is_array($mercados)){
      foreach($mercados as $mercado){
        if($auxCategoriaMercado != $mercado['id_categoria_mercado']){

          if($auxCategoriaMercado > 0){
            echo '      </div>
                      </div>
                    </section>
                    <section class="pb-5 pb-lg-6">
                      <div class="container">';
          }
          else {
            echo '  <section class="py-5 py-lg-6">
                      <div class="container">';
          }

          echo '  <div class="row">
                    <div class="col">
                      <h2>'.$mercado['titulo_categoria_mercado'].'</h2>
                    </div>
                  </div>';

          echo '      <div class="row gy-4">';
          
          $auxCategoriaMercado = $mercado['id_categoria_mercado'];
        }

        echo '  <div class="col-12 col-lg-6">
                    <a href="'.BASE_PATH.'/'.$pagina['slug_pagina'].'/'.$mercado['slug_mercado'].'" class="white-box">
                      <img src="'.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$mercado['slug_mercado'].'/'.$mercado['foto_mercado'].'" alt="'.$mercado['titulo_mercado'].'" title="'.$mercado['titulo_mercado'].'" class="img-fluid">
                      <h6 class="m-3">'.$mercado['titulo_mercado'].'</h6>
                    </a>
                </div>';
      }

      if($auxCategoriaMercado > 0){
        echo '      </div>
                  </div>
                </section>';
      }
    }
  ?>
</main>