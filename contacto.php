<?php
$pagina = cargarPagina('contacto');

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0 flex-grow-1">
  <section id="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col my-2">
        <?php include_once 'breadcrumbs.php';?>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6 h-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <h2 class="text-center">Envianos tu consulta</h2>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nombre de contacto*</label>
                <input type="name" class="form-control" id="name" required="">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" required="">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Mensaje*</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>            
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar formulario</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</main>