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
      <div class="container">
        <div class="row">
          <div class="col-xl-7 ms-auto">
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
                  <a href="#" type="button" class="btn btn-outline-primary mt-3">Solicitar asesoramiento</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pt-lg-6">
    <div class="container">
        <div class="row">
            <div class="col-lg mb-5 mb-lg-0">
                <div class="bg-color3 rounded-1 h-100 p-4 ">
                    <h2>Características Técnicas</h2>
                    <ul>
                        <li>Intercambiador de calor y separador dentro de una misma carcasa</li>
                        <li>Tecnología de Casco y Placas completamente soldadas</li>
                        <li>No se requiere cañería externa</li>
                        <li>Separador de alta eficiencia</li>
                        <li>Baja carga de refrigerante</li>
                        <li>Placas circulares</li>
                        <li>Apto para amoníaco y otros refrigerantes</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg">
                <div class="bg-color7 rounded-1 h-100 p-4">
                    <h2>Cualidades</h2>
                    <ul>
                        <li>Intercambiador de calor y separador dentro de una misma carcasa</li>
                        <li>Tecnología de Casco y Placas completamente soldadas</li>
                        <li>No se requiere cañería externa</li>
                        <li>Separador de alta eficiencia</li>
                        <li>Baja carga de refrigerante</li>
                        <li>Placas circulares</li>
                        <li>Apto para amoníaco y otros refrigerantes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
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