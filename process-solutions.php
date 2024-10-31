<?php
$pagina = cargarPagina('process-solutions');
$process_solutions = cargarProcessSolutions();

if(empty($process_solutions)){ 
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
    <div class="container position-relative z-1 min-height-700px d-flex align-items-center">
      <div class="row align-items-center">
        <div class="col-xl-6 py-5 text-white">
          <h1>
            <img src="<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/sowtgen-process-solutions-logo-blanco.svg" alt="SOWTGEN Process Solutions" title="SOWTGEN Process Solutions Logo">
          </h1>
          <p class="lead mb-5">Ésta es la unidad dedicada a brindar soluciones para el desarrollo de procesos y fabricación de equipos tecnológicos que intervienen en los procesos industriales.</p>
          <p>Sus profesionales se especializan en el desarrollo integral de sistemas de procesamiento para la producción de alimentos, bebidas y productos de home & personal care.</p>
          <p>La unidad, interviene en proyectos desde el diseño, la construcción e implementación de procesos y tecnologías desarrolladas brindado soluciones de última generación.</p>
          <p><strong>Comercialización de equipos GEA, válvulas, bombas y repuestos. Servicio de mantenimiento de equipos GEA.</strong></p>
        </div>
        <div class="col-xl-6 pb-5 pb-xl-0">
          <img src="<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/process-solutions-hero.png" alt="SOWTGEN" title="SOWTGEN" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0">
      <div class="row">
        <div class="col-xl-5 ms-auto" style="background-image: url(<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/process-solution-background.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 ms-auto py-5 py-xl-6 circulos">
          <p>Cuenta con los recursos tecnológicos que les permiten brindar a sus clientes un panorama de alternativas de procesamiento adaptadas a sus requerimientos, prestando especial atención a la construcción y su relación con el medio ambiente.</p>
          <p>Sus soluciones abarcan desde el diseño de procesos adaptables a equipos existentes o bien, pueden incluir equipos prediseñados por SOWTGEN tales como mezcladores sólido-líquido, mezcladores líquido-líquido, reactores, tanques de almacenamiento, pasteurizadores, clusters de válvulas, disolutores de azúcar, carbonatadores, desaireadores y centrales CIP.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0 pe-none">
      <div class="row">
        <div class="col-xl-5 rounded-end-pill" style="background-image: url(<?=BASE_PATH?>/img/<?=$pagina['slug_pagina']?>/process-solution-background-section.png);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Soluciones para</h2>
        </div>
      </div>
      <div class="row gx-0 gx-lg-4 gy-4">
        <?php           
          if(is_array($process_solutions)){
            foreach($process_solutions as $process_solution){
              echo '  <div class="col-lg grow-box" style="background-image: url('.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$process_solution['foto_process_solution'].')">
                        <a href="'.BASE_PATH.'/'.$pagina['slug_pagina'].'/'.$process_solution['slug_process_solution'].'">
                          <h2>'.$process_solution['titulo_process_solution'].'</h2>
                        </a>
                      </div>';
            }
          }
        ?>
      </div>
    </div>
  </section>
</main>