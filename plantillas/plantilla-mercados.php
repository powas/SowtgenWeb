<?php
$pagina = cargarPagina('mercados');
$mercado = cargarMercado($param);
$mercados = cargarMercados();

if(empty($mercado)){
  header('Location: ../404');
}

$paginaIndustria = cargarPagina('industrias');
$industrias = cargarIndustriasMercados($mercado['id_mercado']);

$paginaMaquina = cargarPagina('equipos');
$maquinas = cargarMaquinasMercados($mercado['id_mercado']);

$title = $mercado['titulo_mercado'];
$description = $mercado['descripcion_corta_mercado'];

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
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1><?php echo $title; ?></h1>
        </div>
      </div>
      <div class="row gy-4">
        <?php 
          if(!empty($industrias)){
            if(isset($industrias)){
              foreach($industrias as $industria){
                echo '  <div class="col-12 col-lg-6">
                            <a href="'.BASE_PATH.'/'.$paginaIndustria['slug_pagina'].'/'.$industria['slug_industria'].'" class="white-box">
                              <img src="'.BASE_PATH.'/img/'.$paginaIndustria['slug_pagina'].'/'.$industria['slug_industria'].'/'.$industria['foto_chica_industria'].'" alt="'.$industria['titulo_industria'].'" title="'.$industria['titulo_industria'].'" class="img-fluid">
                              <h6 class="m-3">'.$industria['titulo_industria'].'</h6>
                            </a>
                        </div>';
              }
            }
          }
        ?>
      </div>
    </div>
  </section>
  <section class="pb-5 pb-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Equipos</h2>
        </div>
      </div>
      <div class="row gy-4">
        <?php 
          if(!empty($maquinas)){
            if(isset($maquinas)){
              foreach($maquinas as $maquina){
                echo '  <div class="col-6 col-md-4 col-lg-3">
                            <a href="'.BASE_PATH.'/'.$paginaMaquina['slug_pagina'].'/'.$maquina['slug_maquina'].'" class="white-box">
                              <img src="'.BASE_PATH.'/img/'.$paginaMaquina['slug_pagina'].'/'.$maquina['slug_maquina'].'/'.$maquina['foto_chica_maquina'].'" alt="'.$maquina['titulo_maquina'].'" title="'.$maquina['titulo_maquina'].'" class="img-fluid">
                              <h6 class="m-3">'.$maquina['titulo_maquina'].'</h6>
                            </a>
                        </div>';
              }
            }
          }
        ?>
      </div>
    </div>
  </section>
</main>