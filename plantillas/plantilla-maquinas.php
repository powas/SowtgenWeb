<?php
$pagina = cargarPagina('equipos');
$maquina = cargarMaquina($param);

if(empty($maquina)){ 
  header('Location: ../404');
}

$title = $maquina['titulo_maquina'];
$description = $maquina['descripcion_corta_maquina'];

$paginaIndustria = cargarPagina('industrias');
$industrias = cargarIndustriasMaquinas($maquina['id_maquina']);

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
    <div class="bg-color5 contentheight">
      <div class="container<?=(($maquina['slug_maquina'] == 'process-automations') ? '-fluid' : '')?>">
        <div class="row">
          <div class="<?=(($maquina['slug_maquina'] == 'process-automations') ? 'col p-0' : 'col-xl-7 ms-auto')?>">
          <img src="<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/<?=$maquina['slug_maquina']?>/<?=$maquina['foto_grande_maquina']?>" alt="<?=$maquina['titulo_maquina']?>" title="<?=$maquina['titulo_maquina']?>" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-xl-6 pt-xl-5 mt-n5 mt-xl-0">
            <div class="bg-white rounded-1 min-height-700px d-flex flex-column p-5">
                <h1><?php echo $title; ?></h1>
                <?=$maquina['descripcion_maquina']?>
                <div class="mt-auto">
                  <a href="<?=BASE_PATH?>/archivos/<?=$maquina['brochure_maquina']?>" type="button" class="btn btn-primary mt-3 me-5" download>Descargar brochure <i class="las la-download"></i></a>
                  <a href="<?=BASE_PATH?>/contacto" type="button" class="btn btn-outline-primary mt-3">Solicitar asesoramiento</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    if(!empty($maquina['titulo_columna1_maquina']) || !empty($maquina['descripcion_columna1_maquina'])){
      echo '  <section class="pt-5 pt-lg-6">
                <div class="container">
                  <div class="row">
                      <div class="col-lg mb-5 mb-lg-0">
                          <div class="bg-color3 rounded-1 h-100 p-4 ">
                              <h2>'.$maquina['titulo_columna1_maquina'].'</h2>
                              <ul class="'.((!empty($maquina['titulo_columna2_maquina']) || !empty($maquina['descripcion_columna2_maquina'])) ? ("") : ("two-columns")).'">
                                  '.$maquina['descripcion_columna1_maquina'].'
                              </ul>
                          </div>
                      </div>'; 
                      if(!empty($maquina['titulo_columna2_maquina']) || !empty($maquina['descripcion_columna2_maquina'])){
                        echo '  <div class="col-lg">
                                    <div class="bg-color7 rounded-1 h-100 p-4">
                                        <h2>'.$maquina['titulo_columna2_maquina'].'</h2>
                                        <ul>
                                            '.$maquina['descripcion_columna2_maquina'].'
                                        </ul>
                                    </div>
                                </div>';
                      }           
      echo '      </div>
                </div>
              </section>';
    }    
  ?>  
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Aplicaciones en la industria</h2>
        </div>
      </div>
      <div class="row gy-4">
      <?php 
          if(!empty($industrias)){
            if(isset($industrias)){
              foreach($industrias as $industria){
                echo '  <div class="col-12 col-lg-6 col-xxl-3">
                            <a href="'.BASE_PATH.'/'.$paginaIndustria['slug_pagina'].'/'.$industria['slug_industria'].'" class="white-box white-box-icon">
                              <img src="'.BASE_PATH.'/img/'.$paginaIndustria['slug_pagina'].'/'.$industria['slug_industria'].'/'.$industria['icono_industria'].'" alt="'.$industria['titulo_industria'].'" title="'.$industria['titulo_industria'].'" class="ms-3 my-3">
                              <h6 class="d-inline-block m-3">'.$industria['titulo_industria'].'</h6>
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