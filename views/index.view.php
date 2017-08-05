<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/eaab872bf8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbqyNVMG_VP3REc24lfKNnlG3lpwugbIU&callback=initMap"></script>
    <meta charset="utf-8">
    <title>Liceo de Costa Rica</title>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
      function initMap() {
        var uluru = {lat: 9.9253301, lng: -84.0756873};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru,
          mapTypeControl: true,
          scrollwheel: false
        });
        var image = "images/icono.png";
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: image,
          animation: google.maps.Animation.BOUNCE
        });
      }

      $(document).ready(function(){
        $(window).scroll(function() {
          
          if ($(this).scrollTop() > 300) {
            $('#Menu').slideDown(300);
          }else {
            $('#Menu').slideUp(100);
          }
        });
      });
    </script>
  </head>
  <body>
    <div class="encabezado">
      <div id="top" class="">          
        <div class="container">
          <div class="row">
            <div id="logo" class="col-sm-8">
              <a href="index.php">
                <img src="images/icono.png" alt="Liceo de Costa Rica" class="">
                <span class="item_title_part0">Liceo de Costa Rica</span>
              </a>
            </div>
            <div class="moduletable col-sm-4">
              <!-- Logo MEP  -->
              <img src="images/logomep1.png" alt="Mep" style="width: 100px; float: right;">
            </div>
          </div>
        </div>
      </div> 
         <!-- NAV -->
      <div id="navigation" class="stuck_position stuck" style="z-index: 1000; top: auto; position: relative; width: 100%;">
        <div class="container" style="position: relative;">
            <div class="row">
              <nav class="moduletable col-sm-12 cl-effect-7" style="position: inherit;">
                <div class="module_container">
                  <div class="icemegamenu">
                    <ul id="icemegamenu">
                      <li id="" class="iceMenuLiLevel_1 active fullwidth">
                        <a href="#" title="" class="iceMenuTitle hover">
                          <span class="icemega_nosubtitle">Inicio</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1">
                        <a href="#" title="" class="iceMenuTitle">
                          <span class="icemega_nosubtitle">Instituci&oacute;n</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 mzr-drop parent" data-hover="false">
                        <a href="circulares.php" class="iceMenuTitle">
                          <span class="icemega_nosubtitle">Circulares</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 ">
                        <a href="#" title="" class="iceMenuTitle">
                          <span class="" icemega_nosubtitle">Personal</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 gallery">
                        <a href="#" title="" class="iceMenuTitle">
                          <span class="" icemega_nosubtitle">Noticias</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 ">
                        <a href="galeria.php" title="" class="iceMenuTitle">
                          <span class="" icemega_nosubtitle">Galeria</span>
                        </a>
                      </li>                 
                      <li id="" class="iceMenuLiLevel_1 ">
                        <a href="contacto.php" title="" class="iceMenuTitle">
                          <span class="" icemega_nosubtitle">Contacto</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      <nav class="menu icemegamenu" id="Menu">
      <ul id="icemegamenu">
        <li class="iceMenuLiLevel_1">  
          <a href="#">Inicio</a>
        </li>
        <li>  
        <a href="#">Institucion</a>
        <li>  
        <a href="circulares.php">Circulares</a>
        </li>
        <li>  
        <a href="#">Personal</a>
        </li>
        <li>  
        <a href="noticias.php">Noticias</a>
        </li>
        <li>  
        <a href="galeria.php">Galeria</a>
        </li>
        <li>  
        <a href="contacto.php">Contacto</a>
        </li>
      </ul>
      </nav>  
    </div> <!-- NAV -->
    <div class="slider">
      <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
<!--                   <h1 class="heading-style-1">Actos Civicos</h1>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">

                </div>
            </div>
        </div>
      </div>
    </div>
    </div> <!-- Encabezado -->
    <div class="content">
    <div class="row">
      <header class="page_header">
        <h1 class="heading-style-1">
          <span class="">Misión</span>
        </h1>
      </header>
     <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>  
      </div>
      <header class="page_header">
        <h1 class="heading-style-1">
          <span class="">Visión</span>
        </h1>
      </header>
      <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>  
    </div>
    <div class="contact content">
      <header class="page_header">
        <h1 class="heading-style-1">
          <span class="">Contactenos</span>
        </h1>
      </header>
<!--       <div class="col-md-5"></div>
      <div class="col-md-7"> -->
        <div id="map" style="width:100%; height: 600px;"></div>
      <!-- </div> -->
      <!-- GOOGLE MAPS dfdfdf-->
    </div>
    <footer>
      <p>Designed by <a href="">David Arias</a></p>
    </footer>
  </body>
</html>