<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>MERAKI: Pasión & Entrega</title>
  <link rel="shortcut icon" href="assets/img/Ico.PNG">

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="assets/vendor/animate.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="assets/css/unify-core.css">
  <link rel="stylesheet" href="assets/css/unify-components.css">
  <link rel="stylesheet" href="assets/css/unify-globals.css">
  <link rel="stylesheet" href="assets/css/unify.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

  <main>

  <?php

  
  include('includes/bolsa_trabajo_logica.php');
  //include('includes/Buscar_oferta.php');

  $UsuarioAct = $_SESSION['UserName'];
  $TipoCuenta = $_SESSION['Tipo'];

  //GetOffers();

  if(!isset($_SESSION['UserName'])){    
          echo "<script type='text/javascript'>          
        window.location.href='Log/loqueo.php';
        </script>'";
  }else{

  $Ofertas_recientes = GetRecentOffers();
  $NumeroOferta = mysqli_fetch_array(GetNumberOffers());

  ?>

    <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->

            <a href="#" class="js-go-to navbar-brand u-header__logo"
                 data-type="static">
                <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="100" src="assets/img/Logotipo-Meraki.png" alt="Image Description">
              </a>

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Intro -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="index.php" class="nav-link g-py-7 g-px-0">Home</a>
                </li>                
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="Bolsa_trabajo.php" class="nav-link g-py-7 g-px-0">Bolsa de trabajo</a>
                </li>
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="" class="nav-link g-py-7 g-px-0">PAGES</a>
                </li>
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="" class="nav-link g-py-7 g-px-0">BLOG</a>
                </li>              
<?php
if($TipoCuenta == "Empresa"){

?>
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="Oferta_Empresa.php" class="nav-link g-py-7 g-px-0">Ver ofertas</a>
                </li>  
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="Registro/Registro_Oferta.php" class="nav-link g-py-7 g-px-0">Agregar una nueva oferta</a>
                  <!--<a href="Registro/Registro_Empresa.php" class="nav-link g-py-7 g-px-0">Agregar una nueva oferta</a>-->
                </li>
<?php
}
?>
              </ul>
            </div>
            <!-- End Navigation -->

            <div class="d-inline-block g-hidden-md-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="Log/cerrar_sesion.php" target="_blank">Cerrar sesion</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->


    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-white-opacity-0_8--after" style="height: 100%; background-image: url(assets/img/imgw11.jpg);"></div>
      <!-- End Parallax Image -->

      <div class="container u-bg-overlay__inner text-center g-py-100 g-py-160--md">
        <h2 class="h1 g-color-gray-dark-v1 text-uppercase g-font-weight-600 g-width-60x--md mx-auto g-mb-30">Descubre el trabajo de tus sueños</h2>

        <!-- Search Form -->
        
          <div class="row justify-content-center g-mb-20 g-mb-0--lg">
            <div class="col-lg-4">
              <div id="form-icon-magnifier" class="input-group u-shadow-v21 g-bg-white rounded g-mb-15">
                <div class="input-group-append">
                  <span class="input-group-text rounded-0 border-0 g-font-size-16 g-color-gray-light-v1"><i class="icon-magnifier g-pos-rel g-top-1 g-px-1"></i></span>
                </div>
                <input class="form-control form-control-md g-font-size-16 border-0 g-pl-2 g-py-15" type="text" placeholder="Puesto" name="Puesto" id="Puesto">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="input-group u-shadow-v21 g-bg-white rounded g-mb-15">
                <div id="form-icon-location-pin" class="input-group-append">
                  <span class="input-group-text rounded-0 border-0 g-font-size-16 g-color-gray-light-v1"><i class="icon-location-pin g-pos-rel g-top-1 g-px-1"></i></span>
                </div>
                <input class="form-control form-control-md g-font-size-16 border-0 g-pl-2 g-py-15" type="text" placeholder="Ciudad" name="Ciudad" id="Ciudad" aria-describedby="form-icon-location-pin">
              </div>
            </div>

            <div class="col-lg-2">
              <button class="btn btn-md btn-block u-btn-primary u-shadow-v21 text-uppercase g-py-14" onclick="button()" type="button" >Buscar</button>
            </div>
          </div>

          <small class="form-text g-font-size-default">Busca cualquier tipo de trabajo y mucho más</small>
        
        <!-- End Search Form -->
      </div>
    </section>

<section id="g-py-100">
<div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50"  id="Head">
        </header>
      <br>    
      <div class="row g-mb-30" id="Searched_offers">
  <!-- Card Start -->

 
 <br>
<br>

</div>
</div>

</section>

    <!-- Counters -->
    <section class="g-brd-bottom g-brd-gray-light-v4 g-pt-50">
      <div class="container">
        <div class="row text-center text-uppercase">
          <div class="col-lg-3 col-sm-6 g-brd-right g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v1 g-font-size-35 g-font-weight-300 g-mb-7">52147</div>
            <h4 class="h6 g-color-gray-dark-v5">Code Lines</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-brd-right--lg g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v1 g-font-size-35 g-font-weight-300 g-mb-7">24583</div>
            <h4 class="h6 g-color-gray-dark-v5">Projects</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-brd-right g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v1 g-font-size-35 g-font-weight-300 g-mb-7">7348</div>
            <h4 class="h6 g-color-gray-dark-v5">Working Hours</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-50">
            <div class="js-counter g-color-gray-dark-v1 g-font-size-35 g-font-weight-300 g-mb-7"><?php echo $NumeroOferta['ofertas_empleo']?></div>
            <h4 class="h6 g-color-gray-dark-v5">Job Offers</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counters -->

    <!-- Recent Jobs -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Ultimas ofertas de trabajo</h2>
          <p class="lead">Puestos recientemente disponibles</p>
        </header>

        <div class="row g-mb-30">

<?php   
   while ($oferta = $Ofertas_recientes->fetch_assoc()) {
?>

          <div class="col-lg-4 g-mb-30 g-mb-0--lg">
            <!-- Recent Jobs -->
            <article class="u-shadow-v11 rounded g-pa-25">
              <h2 class="h4 g-mb-15">
                  <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="Oferta_Empleo.php?id_oferta=<?php echo $oferta['id_oferta']?>"><?php echo $oferta['nombre_oferta']?></a>
                </h2>

              <ul class="list-inline d-flex justify-content-between g-mb-15">
                <li class="list-inline-item g-mr-20">
                  <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="<?php echo $oferta['Emp_url']?>" alt="Image Description"> <a class="u-link-v5 g-color-main g-color-primary--hover" href="#"><?php echo $oferta['empresa']; ?></a>
                </li>
                <!--<li class="list-inline-item">
                  <span class="js-rating d-block g-color-primary" data-rating="5"></span>
                </li>-->
              </ul>

              <p class="g-mb-15"><?php echo $oferta['descripcion_oferta'];?></p>
              <ul class="list-unstyled">
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-wallet g-pos-rel g-top-1 g-mr-5"></i> Salario:
                    </span>
                  <span class="media-body"><?php echo $oferta['salario']; ?></span>
                </li>
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> Día:
                    </span>
                  <span class="media-body"><?php $day=explode("-",$oferta['day']); echo $day[2]."/".$day[1]."/".$day[0]; ?></span>
                </li>
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-user g-pos-rel g-top-1 g-mr-5"></i> habilidades:
                    </span>
                  <span class="media-body"><?php echo $oferta['habilidades']; ?></span>
                </li>
                <li class="media">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-location-pin g-pos-rel g-top-1 g-mr-5"></i> Ubicacion:
                    </span>
                  <span class="media-body"><?php echo $oferta['ubicacion_oferta']; ?></span>
                </li>
              </ul>

              <hr class="g-brd-gray-light-v4">

              <ul class="list-inline d-flex justify-content-between mb-0">
                <li class="list-inline-item">
                  <a class="u-tags-v1 g-font-size-12 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-3 g-px-8"><?php echo $oferta['horario']; ?></a>
                </li>
                <li class="list-inline-item">
                  <a href="Oferta_Empleo.php?id_oferta=<?php echo $oferta['id_oferta']?>">Más detalles</a>
                </li>
              </ul>
            </article>
            <br>
            <!-- End Recent Jobs -->
          </div>
          
<?php
  }   
?>                        

</div>

        <div class="text-center">
          <a class="btn btn-xl u-btn-outline-primary text-uppercase g-font-weight-600 g-font-size-12" href="#">Ver más vacantes</a>
        </div>
      </div>
    </section>
    <!-- End Recent Jobs -->

    <hr class="g-brd-gray-light-v4 my-0">

    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Nosotros ofrecemos el mejor servicio que usted necesita</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    <!-- Footer -->
    <section class="u-shadow-v11 g-py-60">
      <div class="container">
        <div class="row">
          <!-- Footer Content -->
          <div class="col-lg-13 g-mb-60 g-mb-0--lg">
            <a class="d-block g-mb-20" href="index.php">
            <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="100" src="assets/img/Logotipo-Meraki.png" alt="Meraki">
            </a>

            <div class="g-mb-30">
              <p>En meraki nos aseguramos que el personal seleccionado cuente con las competencias y habilidades suficientes y su grado de ética, honestidad, disposicion y actitud, sean los mas apegados al perfil requerido</p>
            </div>

            <address class="g-line-height-2 g-mt-minus-4">
                <ul class="list-group list-group-horizontal">
                  <li class="d-flex align-items-baseline g-mb-10">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                    <span>FACEBOOK: MerakiConsultoriaRH&nbsp;</span>
                  </li>
                  <li class="d-flex align-items-baseline g-mb-13">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                    <span>Phone: 753-120-0323&nbsp;</span>
                  </li>
                  <li class="d-flex align-items-baseline g-mb-10">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                    <span>INSTAGRAM: themeraki2020&nbsp;</span>
                  </li>
                  <li class="d-flex align-items-baseline g-mb-10">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                    <span>Email: <a class="g-color-black-opacity-0_8" href="mailto:corina@themeraki.com.mx" class="">corina@themeraki.com.mx&nbsp;</a></span>
                  </li>
                </ul>
              </address>

            <ul class="list-inline mb-0">
              <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 u-icon-size--xs g-bg-gray-light-v5 g-bg-primary--hover g-color-black-opacity-0_5 g-color-white--hover rounded" href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 u-icon-size--xs g-bg-gray-light-v5 g-bg-primary--hover g-color-black-opacity-0_5 g-color-white--hover rounded" href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 u-icon-size--xs g-bg-gray-light-v5 g-bg-primary--hover g-color-black-opacity-0_5 g-color-white--hover rounded" href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 u-icon-size--xs g-bg-gray-light-v5 g-bg-primary--hover g-color-black-opacity-0_5 g-color-white--hover rounded" href="#">
                  <i class="fa fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Footer Content -->

    </section>
    <!-- End Footer -->

    <!-- Copyright Footer -->
    <footer class="g-py-20">
      <div class="container">
        <div class="row">
          <!-- Copyright Content -->
          <div class="col-md-6 align-self-center text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2021 &copy; All Rights Reserved.</small>
              <ul class="u-list-inline">  
                <li class="list-inline-item">
                  <span>|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-main" href="#">Meraki developed by Tekne&Praxis</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Copyright Content -->

        </div>
      </div>
    </footer>
    <!-- End Copyright Footer -->

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/appear.js"></script>
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/circles/circles.min.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.counter.js"></script>
  <script src="assets/js/components/hs.rating.js"></script>
  <script src="assets/js/components/hs.popup.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
          transitionEffect: false
        });

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 2
        });
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>


<script>

var Cid = "";
var pues = "";

  function button(){    
    Cid = $("#Ciudad").val();
    pues = $("#Puesto").val();
    var cual = "";

    console.log(Cid,pues);

    $.ajax({url: "GetResults.php?Ciudad="+Cid+"&Puesto="+pues+"&function=GetOffers", success: function(result){            

      console.log(result)

      var res = JSON.parse(result);
      //console.log(res[2]['id_oferta'],res);
      var num = res.length;

      head = '<h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Ultimas ofertas encontradas</h2>'
      $("#Head").html(head);

      for(i=0;i<num;i++){
      console.log(res[i]['nombre_oferta'],i);

      var day= res[i]['day'].split("-");      
      var fecha = day[2]+"/"+day[1]+"/"+day[0];   

        //cual = cual+"<h3>"+res[i]['nombre_empresa']+"</h3>";
        cual = cual +'<div class="col-lg-4 g-mb-30 g-mb-0--lg" >'+
            '<article class="u-shadow-v11 rounded g-pa-25">'+
              '<h2 class="h4 g-mb-15">'+
                  '<a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="Oferta_Empleo.php?id_oferta='+res[i]['id_oferta']+'">'+res[i]['nombre_oferta']+'</a>'+
                '</h2>'+
              '<ul class="list-inline d-flex justify-content-between g-mb-15">'+
                '<li class="list-inline-item g-mr-20">'+
                  '<img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="'+res[i]['Emp_url']+'" alt="Img no disponible"> <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">'+res[i]['empresa']+'</a>'+
                '</li>'+                
              '</ul>'+

              '<p class="g-mb-15">'+res[i]['descripcion_oferta']+'</p>'+
              '<ul class="list-unstyled">'+
                '<li class="media g-mb-10">'+
                  '<span class="d-block g-color-gray-dark-v5 g-width-110">'+
                      '<i class="icon-wallet g-pos-rel g-top-1 g-mr-5"></i> Salario:'+
                    '</span>'+
                  '<span class="media-body">'+res[i]['salario']+'</span>'+
                '</li>'+
                '<li class="media g-mb-10">'+
                  '<span class="d-block g-color-gray-dark-v5 g-width-110">'+
                      '<i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> Día:'+
                    '</span>'+
                  '<span class="media-body">'+fecha+'</span>'+
                '</li>'+
                '<li class="media g-mb-10">'+
                  '<span class="d-block g-color-gray-dark-v5 g-width-110">'+
                      '<i class="icon-user g-pos-rel g-top-1 g-mr-5"></i> habilidades:'+
                    '</span>'+
                  '<span class="media-body">'+res[i]['habilidades']+'</span>'+
                '</li>'+
                '<li class="media">'+
                  '<span class="d-block g-color-gray-dark-v5 g-width-110">'+
                      '<i class="icon-location-pin g-pos-rel g-top-1 g-mr-5"></i> Ubicacion:'+
                    '</span>'+
                  '<span class="media-body">'+res[i]['ubicacion_oferta']+'</span>'+
                '</li>'+
              '</ul>'+

              '<hr class="g-brd-gray-light-v4">'+

              '<ul class="list-inline d-flex justify-content-between mb-0">'+
                '<li class="list-inline-item">'+
                  '<a class="u-tags-v1 g-font-size-12 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-3 g-px-8">'+res[i]['horario']+'</a>'+
                '</li>'+
                '<li class="list-inline-item">'+
                  '<a href="Oferta_Empleo.php?id_oferta='+res[i]['id_oferta']+'">Más detalles</a>'+
                '</li>'+
              '</ul>'+
            '</article>'+
            '<br>"'+
            '</div>';

            
      }
      $("#Searched_offers").html(cual);
     

    }});

  }
</script> 


  <?php
  }
  ?>

</body>

</html>
