<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
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

  if(!isset($_SESSION['UserName'])){
    echo "<script type='text/javascript'>
      window.location.href='Log/logueo.php';
    </script>'";
  }else{

$UsuarioAct = $_SESSION['UserName'];
$Oferta_id = $_GET["id_oferta"];
$TipoCuenta = $_SESSION['Tipo'];

$Ofertas_recientes = GetRecentOffers();

$EspecificOffer = mysqli_fetch_array(GetEspecificOffer($Oferta_id));

$HabilidadesReq = explode(",",$EspecificOffer['habilidades']);
$TareasReq = explode(",",$EspecificOffer['tareas']);
$ResponsReq = explode(",",$EspecificOffer['responsabilidades']);

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
                <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="100" src="assets/img/Logotipo-Meraki.png" alt="Img no disponible">
              </a>

            <!--<a href="" class="navbar-brand d-flex">
              <svg width="86px" height="32px" viewBox="0 0 86 32" version="1.1" xmlns="" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-78.000000, -19.000000)">
                    <g transform="translate(78.000000, 19.000000)">
                      <path class="g-fill-primary" d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z"></path>
                      <path class="g-fill-white" d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z"></path>
                      <path class="g-fill-main" d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </a>
            <!-- End Logo -->

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
                  <a href="Registro/Registro_Oferta.php" class="nav-link g-py-7 g-px-0">Agregar una nueva oferta</a>
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

    <!-- Jobs Description -->
    <section class="g-py-100">
      <div class="container">
        <div class="row">
          <!-- Content -->
          <div class="col-lg-8 g-mb-30 g-mb-0--lg">
            <article class="u-shadow-v11 rounded g-pa-30">
              <!-- Content Header -->
              <div class="row">
                <div class="col-md-9 g-mb-30 g-mb-0--md">
                  <div class="media">
                    <div class="d-flex align-self-center g-mt-3 g-mr-20">
                      <img class="g-width-40 g-height-40" src="<?php echo $EspecificOffer['Emp_url']?>" alt="Img">
                    </div>
                    <div class="media-body">
                      <span class="d-block g-mb-3">
                          <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href=""><?php echo $EspecificOffer['nombre_oferta']?></a>
                        </span>
                      <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                          <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> <?php echo $EspecificOffer['ubicacion_oferta']?>
                        </span>
                      <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                          <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> <?php echo $EspecificOffer['empresa']?>
                        </span>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 align-self-center text-md-right">
                  <a class="u-tags-v1 g-font-size-12 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-3 g-px-8" href="#"><?php echo $EspecificOffer['horario']?></a>
                </div>
              </div>
              <!-- End Content Header -->

              <hr class="g-brd-gray-light-v4">

              <!-- Jobs Description -->
              <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Description del trabajo</h3>
              <p><?php echo $EspecificOffer['descripcion_oferta']?></p>
              <!-- End Jobs Description -->

              <hr class="g-brd-gray-light-v4">

              <!-- Your Tasks -->
              <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Tareas</h3>

              <div class="row">
                <div class="col-lg">
                  <ul class="list-unstyled g-mb-12 g-mb-0--md">
<?php

$NumTar = 0;
$x = 0;

foreach($TareasReq as $tar){
  $NumTar = $NumTar +1;  
}

$MitadnumTar = intdiv($NumTar, 2);

foreach($TareasReq as $tar){  
  if($x<=$MitadnumTar){

?>
                    <li class="d-flex align-items-center g-mb-12">
                      <i class="icon-check d-block g-color-primary g-mr-8"></i>
                      <span class="d-block"><?php echo $tar;?></span>
                      
                    </li>

<?php
  }
  $x = $x + 1;
}


?>

                  </ul>
                </div>

                <div class="col-lg">
                  <ul class="list-unstyled mb-0">

<?php

$x = 0;

foreach($TareasReq as $tar){  
  if($x>$MitadnumTar){
  
?>
                    <li class="d-flex align-items-center g-mb-12">
                      <i class="icon-check d-block g-color-primary g-mr-8"></i>
                      <span class="d-block"><?php echo $tar;?></span>
                    </li>

<?php
  }
  $x = $x + 1;
}
?>

                  </ul>
                </div>
              </div>
              <!-- End Your Tasks -->

              <hr class="g-brd-gray-light-v4">

              <!-- Responsibilities -->
              <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Responsabilidades</h3>
           
              <div class="row">
                <div class="col-lg">
                  <ul class="list-unstyled g-mb-12 g-mb-0--md">
<?php

$NumResp = 0;
$y = 0;

foreach($ResponsReq as $resp){
  $NumResp = $NumResp +1;  
}

$MitadnumResp = intdiv($NumResp, 2);

foreach($ResponsReq as $resp){  
  if($y<=$MitadnumResp){

?>
                    <li class="d-flex align-items-center g-mb-12">
                      <i class="icon-check d-block g-color-primary g-mr-8"></i>
                      <span class="d-block"><?php echo $resp;?></span>
                    </li>
<?php
  }
  $y = $y + 1;
}
?>
                  </ul>
                </div>

                <div class="col-lg">
                  <ul class="list-unstyled mb-0">
<?php

$y = 0;

foreach($ResponsReq as $resp){ 

  if($y>$MitadnumResp){
  
?>
                    <li class="d-flex align-items-center g-mb-12">
                      <i class="icon-check d-block g-color-primary g-mr-8"></i>
                      <span class="d-block"><?php echo $resp;?></span>
                    </li>
<?php
  }
  $y = $y + 1;
}
?>
                  </ul>
                </div>
              </div>
              <!-- End Responsibilities -->

              <hr class="g-brd-gray-light-v4">

              <!-- Offer Details & Skills -->
              <div class="row">
                <!-- Offer Details -->
                <div class="col-lg g-mb-30 g-mb-0--lg">
                  <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Detalles de la oferta</h3>
                  <ul class="list-unstyled mb-0">
                    <li class="media g-mb-10">
                      <span class="d-block g-color-gray-dark-v5 g-width-110">
                          <i class="icon-wallet g-pos-rel g-top-1 g-mr-5"></i>Salario:
                        </span>
                      <span class="media-body"><?php echo $EspecificOffer['salario']?></span>
                    </li>
                    <li class="media g-mb-10">
                      <span class="d-block g-color-gray-dark-v5 g-width-110">
                          <i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> Date:
                        </span>
                      <span class="media-body"><?php $day=explode("-",$EspecificOffer['day']); echo $day[2]."/".$day[1]."/".$day[0]; ?></span>
                    </li>
                    <li class="media">
                      <span class="d-block g-color-gray-dark-v5 g-width-110">
                          <i class="icon-location-pin g-pos-rel g-top-1 g-mr-5"></i> Location:
                        </span>
                      <span class="media-body"><?php echo $EspecificOffer['ubicacion_oferta']?></span>
                    </li>
                  </ul>
                </div>
                <!-- End Offer Details -->

                <!-- Skills -->
                <div class="col-lg">
                  <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Habilidades</h3>
                  <ul class="list-inline mb-0">
<?php
foreach($HabilidadesReq as $habs){
?>
                  <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-font-size-13 g-color-main g-brd-around g-bg-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded g-py-5 g-px-15"><?php echo $habs;?></a>
                    </li>
<?php
}
?>
                  </ul>
                </div>
                <!-- End Skills -->
              </div>
              <!-- End Offer Details & Skills -->
            </article>
          </div>
          <!-- End Content -->

          <!-- Sidebar -->
          <div class="col-lg-4">
            <aside class="u-shadow-v11 rounded g-pa-30">
              <!-- Content Header -->
              <div class="media g-mb-20">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="<?php echo $EspecificOffer['Emp_url']?>" alt="Img no disponible">
                </div>
                <div class="media-body">
                  <span class="d-block">
                      <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href=""><?php echo $EspecificOffer['empresa']?></a>
                    </span>
                  <!--<span class="js-rating d-inline-block small g-color-primary g-mr-15" data-rating="4.5"></span>
                  <span class="g-color-gray-dark-v5">4713 Reviews</span>-->
                </div>
              </div>
              <!-- End Content Header -->

              <!-- Google Map -->
              <div id="gMap" class="js-g-map g-min-height-300" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Job Description" data-styles='[
                     ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                     ["", "labels", [{"visibility":"on"}]],
                     ["water", "", [{"color":"#bac6cb"}]]
                   ]' data-pin="true" data-pin-icon="assets/img/icons/pin/green.png">
              </div>
              <!-- End Google Map -->

              <hr class="g-brd-gray-light-v4">

              <!-- Contacts -->
              <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-baseline g-mb-12">
                  <i class="icon-location-pin g-color-gray-dark-v5 g-mr-10"></i>
                  <span><?php echo $EspecificOffer['ubicacion_empresa']?></span>
                </li>
                <li class="d-flex align-items-baseline g-mb-10">
                  <i class="icon-phone g-color-gray-dark-v5 g-mr-10"></i>
                  <span><?php echo $EspecificOffer['Telefono']?></span>
                </li>
                <li class="d-flex align-items-baseline g-mb-10">
                  <i class="icon-envelope g-color-gray-dark-v5 g-mr-10"></i>
                  <a class="u-link-v5 g-color-main g-color-primary--hover" href="mailto:info@htmlstream.com"><?php echo $EspecificOffer['USRS_EMAIL']?></a>
                </li>
                <li class="d-flex align-items-baseline g-mb-10">
                  <i class="icon-globe g-color-gray-dark-v5 g-mr-10"></i>
                  <a class="u-link-v5 g-color-main g-color-primary--hover" href="<?php echo $EspecificOffer['Web']?>"><?php echo $EspecificOffer['Web']?></a>
                </li>
              </ul>
              <!-- End Contacts -->

              <hr class="g-brd-gray-light-v4">

              <!-- Social Links -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                  <a href="#">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </li>
              </ul>
              <!-- End Social Links -->

              <hr class="g-brd-gray-light-v4">

              <!-- Prograss Bars -->
              <div>
                <!-- Team Work -->
                <!--<div class="g-mb-20">
                  <h6 class="g-mb-10">Team Work <span class="float-right g-ml-10">92%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar u-progress-bar--xs g-bg-cyan" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-color-gray-dark-v5 g-font-size-12">17% more than others</small>
                </div>-->
                <!-- End Team Work -->

                <!-- Holiday Offers -->
                <!--<div class="g-mb-20">
                  <h6 class="g-mb-10">Holiday Offers <span class="float-right g-ml-10">78%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar u-progress-bar--xs g-bg-darkpurple" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-color-gray-dark-v5 g-font-size-12">11% better than others</small>
                </div>-->
                <!-- End Holiday Offers -->

                <!-- Office Facilities -->
               <!-- <div class="g-mb-20">
                  <h6 class="g-mb-10">Office Facilities <span class="float-right g-ml-10">84%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar u-progress-bar--xs g-bg-pink" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-color-gray-dark-v5 g-font-size-12">15% better than others</small>
                </div>-->
                <!-- End Office Facilities -->
              </div>
              <!-- End Prograss Bars -->

              <hr class="g-brd-gray-light-v4">

              <!-- Save or Print  -->
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">
                    <i class="fa fa-bookmark-o g-color-gray-dark-v5 g-mr-5"></i> Guardar
                  </a>
                </li>
                <li>
                  <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">
                    <i class="icon-printer g-color-gray-dark-v5 g-pos-rel g-top-1 g-mr-5"></i> Imprimir
                  </a>
                </li>
              </ul>
              <!-- End Save or Print  -->

              <hr class="g-brd-gray-light-v4">

              <a class="btn btn-xl btn-block u-btn-primary text-uppercase g-font-weight-600 g-font-size-12" href="Registro/Registro_solicitante.php?id_oferta=<?php echo $Oferta_id; ?>">Postularme</a>
            </aside>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
    </section>
    <!-- End Jobs Description -->

    <hr class="g-brd-gray-light-v4 my-0">

    <!-- Recent Jobs -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Trabajos Recientes</h2>
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
          <a class="btn btn-xl u-btn-outline-primary text-uppercase g-font-weight-600 g-font-size-12" href="#">Ver Mas trabajo</a>
        </div>
      </div>
    </section>
    <!-- End Recent Jobs -->

    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Nosotros ofrecemos el mejor servicio que usted necesita</p>
        </div>
        <!--<div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
        </div>-->
      </div>
    </section>
    <!-- End Call To Action -->

    <!-- Footer -->
    <section class="u-shadow-v11 g-py-60">
      <div class="container">
        <div class="row">
          <!-- Footer Content -->
          <div class="col-lg-13 g-mb-60 g-mb-0--lg">
            <a class="d-block g-mb-20" href="index.html">
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

          <!-- Copyright Content -->
          <div class="col-md-6 align-self-center text-center text-md-right">
            <ul class="list-inline g-color-gray-light-v1 g-font-size-40 g-line-height-1 mb-0">
              <li class="list-inline-item">
                <i class="fa fa-cc-paypal"></i>
              </li>
              <li class="list-inline-item">
                <i class="fa fa-cc-visa"></i>
              </li>
              <li class="list-inline-item">
                <i class="fa fa-cc-mastercard"></i>
              </li>
              <li class="list-inline-item">
                <i class="fa fa-cc-discover"></i>
              </li>
            </ul>
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
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/appear.js"></script>
  <script src="assets/vendor/gmaps/gmaps.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.rating.js"></script>
  <script src="assets/js/components/gmap/hs.map.js"></script>
  <script src="assets/js/components/hs.progress-bar.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

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

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
          var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
            direction: 'horizontal',
            indicatorSelector: '.js-hr-progress-bar-indicator'
          });
        }, 1);
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
  
<?php
}
?>

</body>

</html>
