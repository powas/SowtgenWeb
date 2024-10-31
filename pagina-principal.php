<?php
$pagina = cargarPagina('');

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>
<main class="flex-shrink-0">
  <section class="bg-color3" style="background-image: url(<?=BASE_PATH?>/img/home-bg.jpg);background-size: cover;background-position: center;">
    <div class="container">
      <div class="row flex-lg-row-reverse align-items-center">
        <div class="col-lg-6 py-5 py-lg-6 home-hero-bg">
          <img src="<?=BASE_PATH?>/img/home-hero.png" alt="SOWTGEN" title="SOWTGEN" class="img-fluid position-relative">
        </div>
        <div class="col-lg-6 py-5 py-lg-6 z-0">
          <div id="carouselExampleAutoplaying" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1 class="text-white lh-base">Líder en soluciones integrales de ingeniería, procesos y tecnologías para industrias, medio ambiente y servicios.</h1>
              </div>
              <div class="carousel-item">
                <span class="text-white lh-base h1">Comercialización de equipos GEA, válvulas, bombas y repuestos. Servicio de mantenimiento de equipos GEA.</span>
              </div>
            </div>
          </div>
          <a href="<?=BASE_PATH?>/contacto" type="button" class="btn btn-light">Contactanos</a>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row mb-5 mb-lg-6">
        <div class="col-md-7 mx-auto text-center">
          <h2>¿Qué hacemos?</h2>
          <p class="lead">Nuestra estructura está compuesta por 3 unidades de negocio especializadas que pueden trabajar en conjunto o por separado con el fin de brindar <strong>soluciones desde su planificación</strong>, así como también acoplarse en el <strong>desarrollo de soluciones preexistentes</strong>.</p>
        </div>
      </div>
      <div class="row ">
        <div class="col text-center">
          <h3>Nuestras divisiones</h3>
        </div>
      </div>
      <div class="row mb-5 mb-lg-6 gy-5">
        <div class="col-lg-4">
          <div class="featured-box">
            <img src="<?=BASE_PATH?>/img/divisiones/divisiones-ingenieria-y-obras.jpg" alt="Imagen SOWTGEN Ingeniería y Obras" title="SOWTGEN Ingeniería y Obras" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="<?=BASE_PATH?>/img/divisiones/sowtgen-ingenieria-y-obras-logo.svg" alt="SOWTGEN Ingenieria y Obras" title="SOWTGEN Ingenieria y Obras Logo" class="img-fluid">
            </div>
            <p>Soluciones integrales de ingeniería para sectores industriales, infraestructura, medioambiente y servicios.</p>
            <a href="<?=BASE_PATH?>/ingenieria-y-obras" type="button" class="btn btn-primary">Conocer más</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="featured-box">
            <img src="<?=BASE_PATH?>/img/divisiones/divisiones-process-solutions.jpg" alt="Imagen SOWTGEN Process Solutions" title="SOWTGEN Process Solutions" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="<?=BASE_PATH?>/img/divisiones/sowtgen-process-solutions-logo.svg" alt="SOWTGEN Process Solutions" title="SOWTGEN Process Solutions Logo" class="img-fluid">
            </div>
            <p>Desarrollo de procesos y tecnologías para la producción de alimentos, bebidas y productos de home & personal care.</p>
            <a href="<?=BASE_PATH?>/process-solutions" type="button" class="btn btn-primary">Conocer más</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="featured-box">
            <img src="<?=BASE_PATH?>/img/divisiones/divisiones-elements.jpg" alt="Imagen SOWTGEN Elements" title="SOWTGEN Elements" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="<?=BASE_PATH?>/img/divisiones/sowtgen-elements-logo.svg" alt="SOWTGEN Elements" title="SOWTGEN Elements Logo" class="img-fluid">
            </div>
            <p>Comercialización de equipos GEA, válvulas, bombas y repuestos. Servicio de mantenimiento de equipos GEA. <strong>Catálogo próximamente.</strong></p>
            <a href="<?=BASE_PATH?>/contacto" type="button" class="btn btn-primary">Consultar</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h3>Confían en nosotros</h3>
          <div class="owl-brands owl-carousel owl-theme mb-5">
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/arcor-logo.jpg" alt="Arcor" title="Arcor">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/branca-logo.jpg" alt="Branca" title="Branca">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/cartocor-logo.jpg" alt="Cartocor" title="Cartocor">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/coca-cola-andina-logo.jpg" alt="Coca Cola Andina" title="Coca Cola Andina">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/dioxitek-logo.jpg" alt="Dioxitek" title="Dioxitek">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/general-electric-logo.jpg" alt="General Electric" title="General Electric">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/givaudan-logo.jpg" alt="Givaudan" title="Givaudan">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/grupo-riquelme-logo.jpg" alt="Grupo Riquelme" title="Grupo Riquelme">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/isover-logo.jpg" alt="Isover" title="Isover">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/lamb-weston-logo.jpg" alt="Lamb Weston" title="Lamb Weston">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/megaflex-logo.jpg" alt="Megaflex" title="Megaflex">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/molinos-logo.jpg" alt="Molinos" title="Molinos">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/nestle-logo.jpg" alt="Nestle" title="Nestle">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/total-energies-logo.jpg" alt="Total Energies" title="Total Energies">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/tregar-logo.jpg" alt="Tregar" title="Tregar">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/tuyango-logo.jpg" alt="Tuyango" title="Tuyango">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/unilever-logo.jpg" alt="Unilever" title="Unilever">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/weber-logo.jpg" alt="Weber" title="Weber">
                </div>
                <div class="item">
                  <img src="<?=BASE_PATH?>/img/empresas/ypf-logo.jpg" alt="YPF" title="YPF">
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6" style="background-image: url(<?=BASE_PATH?>/img/home-banner-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3 class="text-white">Mirá todos nuestros proyectos</h3>
          <a href="<?=BASE_PATH?>/proyectos" type="button" class="btn btn-light">Conocer más</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-color3 py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h2 class="text-center">Envianos tu consulta</h2>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre de contacto*</label>
              <input type="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" id="email" required>
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