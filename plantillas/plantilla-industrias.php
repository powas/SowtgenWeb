<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('industrias');
$industria = cargarIndustria($param);

if(empty($industria)){
  // Manejar la ruta no encontrada  
  header('Location: error');
}

$paginaMaquina = cargarPagina('equipos');
$maquinas = cargarMaquinasIndustrias($industria['id_industria']);

$title = $industria['titulo_industria'];
$description = $industria['descripcion_corta_industria'];

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
  <section>
    <div class="bg-color5 fullheight">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 ms-auto">
          <img src="<?=BASE_PATH?>/img/gaseosas-1200x1000.jpg" alt="Pasteurizadores" title="Pasteurizadores" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-xl-6 py-xl-5 mt-n5 mt-xl-0">
            <div class="bg-white min-height-450px d-flex flex-column p-5">
                <h1><?php echo $title; ?></h1>
                <?=$industria['descripcion_industria']?>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
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
                echo '  <div class="col-12 col-lg-6 col-xxl-3">
                            <a href="'.BASE_PATH.'/'.$paginaMaquina['slug_pagina'].'/'.$maquina['slug_maquina'].'" class="white-box">
                              <h6 class="d-inline-block m-3">'.$maquina['titulo_maquina'].'</h6>
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