<?php
$title = 'Gaseosas';
$description = 'Description';
include($_SERVER["DOCUMENT_ROOT"] . '/header.php');
?>
<main class="flex-shrink-0">
  <section id="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col my-2">
        <?php include($_SERVER["DOCUMENT_ROOT"] . '/breadcrumbs.php');?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-color5 fullheight">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 ms-auto">
          <img src="/img/gaseosas-1200x1000.jpg" alt="Pasteurizadores" title="Pasteurizadores" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-xl-6 py-xl-5 mt-n5 mt-xl-0">
            <div class="bg-white min-height-450px d-flex flex-column p-5">
                <h1><?php echo $title; ?></h1>
                <p>En SOWTGEN contamos con la experiencia para el desarrollo de equipos y líneas para acondicionamiento de frutas y verduras. Diseñamos y fabricamos líneas de transportes, silos de almacenamiento, transportes hidráulicos, separadores de piedras, lavadoras.</p>
                <p>Implementamos líneas completas automatizadas mediante control por Scada.</p>
                <p>Contamos con equipos sedimentadores de barros automatizados para la optimización de las plantas de efluentes.</p>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Equipos</h2>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Pasteurizadores</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Carbonatadores continuos</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Tanques y reactores</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Disolutores / Mixers</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Cluster de válvulas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Generadores de agua caliente</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Unidades CIP</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="#" class="white-box">
              <h6 class="d-inline-block m-3">Process automations</h6>
            </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>