<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('');

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0">
<section class="py-5 py-lg-6">
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
            <button type="submit" class="btn btn-primary">Enviar formulario</button>
          </form>
        </div>
      </div>
    </div>
</section>
</main>