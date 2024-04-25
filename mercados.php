<?php
$title = 'Mercados';
$description = 'Description';
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
          <h1><?php echo $title; ?></h1>
          <p>Acá sería conveniente tener un breve texto introductorio que hable sobre que soluciones propone Sowtgen para los distintos tipos de mercados.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0 pe-none">
      <div class="row">
        <div class="col-xl-5 ms-auto" style="background-image: url(<?=BASE_PATH?>/img/ingenieria-y-obras-1200x800.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Alimentos y bebidas</h2>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/frutas-y-verduras" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Frutas y verduras" title="Frutas y verduras" class="img-fluid">
              <h6 class="m-3">Frutas y verduras</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/bebidas" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Bebidas" title="Bebidas" class="img-fluid">
              <h6 class="m-3">Bebidas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/salsas-y-dulces" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Salsas y dulces" title="Salsas y dulces" class="img-fluid">
              <h6 class="m-3">Salsas y dulces</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/alimentos-solidos-y-polvos" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Alimentos sólidos y polvos" title="Alimentos sólidos y polvos" class="img-fluid">
              <h6 class="m-3">Alimentos sólidos y polvos</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/ingredientes" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Ingredientes" title="Ingredientes" class="img-fluid">
              <h6 class="m-3">Ingredientes</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/lacteos" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Lácteos" title="Lácteos" class="img-fluid">
              <h6 class="m-3">Lácteos</h6>
            </a>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-5 pb-lg-6">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Personal & Home care</h2>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/personal-care" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Personal Care" title="Personal Care" class="img-fluid">
              <h6 class="m-3">Personal Care</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <a href="<?=BASE_PATH?>/mercados/home-care" class="white-box">
              <img src="<?=BASE_PATH?>/img/frutas-y-verduras-1200x400.jpg" alt="Home Care" title="Home Care" class="img-fluid">
              <h6 class="m-3">Home Care</h6>
            </a>
        </div>
      </div>
    </div>
  </section>
</main>