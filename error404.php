<?php
$pagina = cargarPagina('404');

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0 flex-grow-1">
  <section class="py-5 py-lg-6 h-100">
    <div class="container py-5 py-lg-6">
      <div class="row">
        <div class="col-12 text-center mb-4 mb-lg-4 mp-5 mp-lg-5">
          <img src="<?=BASE_PATH?>/img/error404.png" alt="Amplia Experiencia" title="Amplia Experiencias" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h3>Parece que esta página no existe</h3>
          <a href="<?=BASE_PATH?>/" type="button" class="btn btn-outline-primary">Regresar a la home</a>
        </div>
      </div>
    </div>
  </section>
</main>
