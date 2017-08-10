<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet"> 
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
    <div class="encabezado_reg">
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
                        <a href="index.php" title="" class="iceMenuTitle hover">
                          <span class="icemega_nosubtitle">Inicio</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1">
                        <a href="#" title="" class="iceMenuTitle">
                          <span class="icemega_nosubtitle">Instituci&oacute;n</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 mzr-drop parent" data-hover="false">
                        <a class="iceMenuTitle">
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
                        <a href="#" title="" class="iceMenuTitle">
                          <span class="" icemega_nosubtitle">Galeria</span>
                        </a>
                      </li>                 
                      <li id="" class="iceMenuLiLevel_1 ">
                        <a href="#" title="" class="iceMenuTitle">
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
          <a href="index.php">Inicio</a>
        </li>
        <li>  
        <a href="#">Institucion</a>
        <li>  
        <a href="#">Circulares</a>
        </li>
        <li>  
        <a href="#">Personal</a>
        </li>
        <li>  
        <a href="#">Noticias</a>
        </li>
        <li>  
        <a href="#">Galeria</a>
        </li>
        <li>  
        <a href="#">Contacto</a>
        </li>
      </ul>
      </nav>  
    </div> <!-- NAV -->
    <div class="bg-nav">
      
    </div>
    </div> <!-- Encabezado -->
    <div class="content_reg">
      <div class="row">
        <header class="page_header">
          <h1 class="heading-style-1">
            <span class="">Contactenos</span>
          </h1>
        </header>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-4">
                <input type="text" class="form-control frm" id="inputEmail3" placeholder="Nombre  ">
              </div>
              <div class="col-sm-4">
                <input type="email" class="form-control frm" id="inputEmail3" placeholder="Email">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control frm" id="inputEmail3" placeholder="Tel&eacute;fono" data-constraints="@JustNumbers">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <textarea class="form-control" placeholder="Mensaje"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 sep">
          <div class="col-sm-12 ">
            <span class="dir"><i class="fa fa-phone" aria-hidden="true"></i>  (506) 2222-2222 / 2333-3333</span>
          </div>
          <div class="col-sm-12 "><br>
            <span class="dir"><i class="fa fa-map-marker" aria-hidden="true"></i>   Nos econtramos al costado norte del platel principal del MOPT, en Plaza Gonzales Viquez</span>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div id="map" style="width:100%; height: 400px;"></div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <div class="content">
        <div class="row">
          <dic class="col-md-1"></dic>
          <dic class="col-md-10">
            <header class="page_header">
              <h1 class="heading-style-1">
                <span class="">Directorio telefónico</span>
              </h1>
            </header>
          </dic>
          <dic class="col-md-1"></dic>
        </div>
        <div class="row">
          <dic class="col-md-2"></dic>
          <dic class="col-md-8">
            <table class="table table-bordered">
              <tr>
                <th><i class="fa fa-address-book-o" aria-hidden="true"></i>  Nombre</th>
                <th><i class="fa fa-phone" aria-hidden="true"></i> Número telefónico</th>
              </tr>
              <tr>
                <td><i class="fa fa-map-marker" aria-hidden="true"></i>  Hospital San Juan de Dios</td>
                <td><i class="fa fa-mobile" aria-hidden="true"></i>  (506) 2257-6282</td>
              </tr>
            </table>
          </dic>
          <dic class="col-md-2"></dic>
        </div>  
      </div>  
    </div>
    <footer>
      <p>Designed by <a href="">David Arias</a></p>
    </footer>
  </body>
</html>