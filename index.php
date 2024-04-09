<?php
$title = 'Home';
$description = 'Description';
include($_SERVER["DOCUMENT_ROOT"] . '/header.php');
?>
<main class="flex-shrink-0">
  <section class="bg-color3">
    <div class="container">
      <div class="row flex-lg-row-reverse align-items-center">
        <div class="col-lg-6 py-5 py-lg-6 home-hero-bg">
          <img src="/img/home-hero.png" alt="SOWTGEN" title="SOWTGEN" class="img-fluid position-relative">
        </div>
        <div class="col-lg-6 py-5 py-lg-6 z-0">
          <h1 class="text-white mb-5">Líder en soluciones integrales de ingeniería, procesos y tecnologías para industrias, medio ambiente y servicios.</h1>
          <a href="#" type="button" class="btn btn-light">Conocer más</a>
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
            <img src="/img/home-ingenieria-y-obras.jpg" alt="Imagen SOWTGEN Ingeniería y Obras" title="SOWTGEN Ingeniería y Obras" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="/img/sowtgen-ingenieria-y-obras-logo.svg" alt="SOWTGEN Ingenieria y Obras" title="SOWTGEN Ingenieria y Obras Logo" class="img-fluid">
            </div>
            <p>Soluciones integrales de ingeniería para sectores industriales, infraestructura, medioambiente y servicios.</p>
            <a href="/ingenieria-y-obras" type="button" class="btn btn-primary">Conocer más</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="featured-box">
            <img src="/img/home-process-solutions.jpg" alt="Imagen SOWTGEN Process Solutions" title="SOWTGEN Process Solutions" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="/img/sowtgen-process-solutions-logo.svg" alt="SOWTGEN Process Solutions" title="SOWTGEN Process Solutions Logo" class="img-fluid">
            </div>
            <p>Desarrollo de procesos y tecnologías para la producción de alimentos, bebidas y productos de home & personal care.</p>
            <a href="/process-solutions" type="button" class="btn btn-primary">Conocer más</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="featured-box">
            <img src="/img/home-elements.jpg" alt="Imagen SOWTGEN Elements" title="SOWTGEN Elements" class="img-fluid rounded-1">
            <div class="featured-logo">
              <img src="/img/sowtgen-elements-logo.svg" alt="SOWTGEN Elements" title="SOWTGEN Elements Logo" class="img-fluid">
            </div>
            <p>Breve texto describiendo las soluciones que se le dan a los diferentes mercados en los que opera Sowtgen.</p>
            <a href="/elements" type="button" class="btn btn-primary">Conocer más</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h3>Confían en nosotros</h3>
          <div class="owl-brands owl-carousel owl-theme mb-5">
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="/item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
                <div class="item">
                  <img src="/img/manaos-logo.png" alt="Manaos" title="Manaos">
                </div>
              </div>
          <a href="#" type="button" class="btn btn-primary">Conocer más</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-dark py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3 class="text-white">Mirá todos nuestros proyectos</h3>
          <a href="#" type="button" class="btn btn-light"><i class="lab la-instagram"></i> Conocer más</a>
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
            <button type="submit" class="btn btn-primary">Enviar formulario</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>