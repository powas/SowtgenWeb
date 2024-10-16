<?php
$pagina = cargarPagina('ingenieria-y-obras');
$ingenierias = cargarIngenierias();

if(empty($ingenierias)){
  header('Location: 404');
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
  <section class="bg-primary">
    <div class="container position-relative z-1 min-height-700px d-flex align-items-strech">
      <div class="row">
        <div class="col-xl-6 py-5 text-white d-flex flex-column justify-content-center">
          <h1>
            <img src="<?=BASE_PATH?>/img/sowtgen-ingenieria-y-obras-logo-blanco.svg" alt="SOWTGEN Ingeniería y Obras" title="SOWTGEN Ingeniería y Obras Logo">
          </h1>
          <p class="lead mb-5">Nos especializamos en brindar soluciones integrales para el desarrollo sostenible de los sectores de la industria, infraestructura, agua y medioambiente, energía, oil & gas y servicios.</p>
          <p>Intervenimos en los proyectos desde el diseño, ingeniería, fabricación, construcción y montaje hasta su puesta en marcha, poniendo en práctica los más altos estándares de seguridad, calidad y medioambiente garantizando el control de los costos y la supervisión en la mano de obra.</p>
          <p>Nuestro equipo de profesionales está altamente calificado y cuenta con más de 25 años de experiencia para abordar proyectos en cualquiera de sus etapas.</p>
        </div>
        <div class="col-xl-6 d-flex align-items-end">
          <img src="<?=BASE_PATH?>/img/ingenieria-y-obras-hero.png" alt="SOWTGEN" title="SOWTGEN" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0">
      <div class="row">
        <div class="col-xl-5 ms-auto" style="background-image: url(<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/ingenieria-y-obras-background.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h2>Especialistas en</h2>
        </div>
      </div>
      <div class="row gy-5">
        <?php           
          if(is_array($ingenierias)){
            foreach($ingenierias as $ingenieria){
              echo '  <div class="col-lg-4 d-flex flex-column align-items-center text-center">
                        <img src="'.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$ingenieria['slug_ingenieria'].'/'.$ingenieria['foto_principal_chica_ingenieria'].'" alt="'.$ingenieria['titulo_ingenieria'].'" title="'.$ingenieria['titulo_ingenieria'].'" class="img-fluid max-width-60per rounded-circle mb-4">
                        <h3 class="mb-4">'.$ingenieria['titulo_ingenieria'].'</h3>
                        <p>'.$ingenieria['descripcion_corta_ingenieria'].'</p>
                        <a href="'.BASE_PATH.'/'.$pagina['slug_pagina'].'/'.$ingenieria['slug_ingenieria'].'" type="button" class="btn btn-primary mt-auto">Conocer más</a>
                      </div>';
            }
          }
        ?>
      </div>
    </div>
  </section>

</main>