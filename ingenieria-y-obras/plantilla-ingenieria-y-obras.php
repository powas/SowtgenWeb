<?php
$ingenieria = cargarIngenieria($param);

if(empty($ingenieria)){
  // Manejar la ruta no encontrada  
  header('Location: error');
}

$title = $ingenieria['titulo_ingenieria'];
$description = $ingenieria['descripcion_corta_ingenieria'];

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
          <h1 class="title-with-line"><?php echo $title; ?></h1>
          <?=$ingenieria['descripcion_ingenieria']?>
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0 pe-none">
      <div class="row">
        <div class="col-xl-5 ms-auto rounded-start-pill" style="background-image: url(<?=BASE_PATH?>/img/montajes-electromecanicos-1200x800.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-11 ms-auto">
          <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-amplia-experiencia.jpg" alt="Amplia Experiencia" title="Amplia Experiencias" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="container fullheight">
      <div class="row align-items-center">
        <div class="col-xl-6">
          <div class="bg-dark text-white p-5">
            <p>SOWTGEN cuenta con una <strong>amplia experiencia</strong> en la ejecución de montajes en industrias alimenticias, químicas y petroquímicas.</p>
            <p>La ejecución de cada proyecto es llevada a cabo por un equipo de profesionales formado por un <strong>project manager, su equipo de ingenieros, supervisores y personal de montaje.</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-5 pb-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>También podría interesarte</h2>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-6 col-md-4 col-xxl">
            <a href="<?=BASE_PATH?>/ingenieria-y-obras/ingenieria" class="white-box">
              <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-600x400.jpg" alt="Ingeniería" title="Ingeniería" class="img-fluid">
              <h6 class="m-3">Ingeniería</h6>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xxl">
            <a href="<?=BASE_PATH?>/ingenieria-y-obras/management" class="white-box">
              <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-600x400.jpg" alt="Management" title="Management" class="img-fluid">
              <h6 class="m-3">Management</h6>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xxl">
            <a href="<?=BASE_PATH?>/ingenieria-y-obras/fabricacion" class="white-box">
              <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-600x400.jpg" alt="Fabricación" title="Fabricación" class="img-fluid">
              <h6 class="m-3">Fabricación</h6>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xxl">
            <a href="<?=BASE_PATH?>/ingenieria-y-obras/automatizacion-y-control" class="white-box">
              <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-600x400.jpg" alt="Automatización y Control" title="Automatización y Control" class="img-fluid">
              <h6 class="m-3">Automatización y Control</h6>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xxl">
            <a href="<?=BASE_PATH?>/ingenieria-y-obras/mantenimiento" class="white-box">
              <img src="<?=BASE_PATH?>/img/montajes-electromecanicos-600x400.jpg" alt="Mantenimiento" title="Mantenimiento" class="img-fluid">
              <h6 class="m-3">Mantenimiento</h6>
            </a>
        </div>
      </div>
    </div>
  </section>
</main>