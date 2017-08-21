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
            <div class="col-sm-2">
                <img src="images/escudo.png" alt="Liceo de Costa Rica" style="width: 80px; float: left;">
            </div>
            <div id="logo" class="col-sm-8">
              <a href="index.php">
                <span class="item_title_part0">Liceo de Costa Rica Bilingüe</span>
              </a>
            </div>
            <div class="moduletable col-sm-2">
              <!-- Logo MEP  -->
              <img src="images/logomep1.png" alt="Mep" style="width: 150px; float: right;">
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
                        <a href="institucion.php" title="" class="iceMenuTitle">
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
                          <span class="" icemega_nosubtitle">Departamentos</span>
                        </a>
                      </li>
                      <li id="" class="iceMenuLiLevel_1 gallery">
                        <a href="noticias.php" title="" class="iceMenuTitle">
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
          <a href="index.php">Inicio</a>
        </li>
        <li>  
        <a href="institucion.php">Institucion</a>
        <li>  
        <a href="circulares.php">Circulares</a>
        </li>
        <li>  
        <a href="#">Departamentos</a>
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
    <div class="bg-nav">
      
    </div>
    </div> <!-- Encabezado -->
    <div class="content_reg">
      <div class="row">
        <header class="page_header">
          <h1 class="heading-style-1">
            <span>Noticias</span>
          </h1>
        </header>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="image" src="images/slid-1.jpg" alt="...">
                <div class="caption">
                  <h3>
                    <span class="heading-style-2">Titulo de la Noticia</span>
                  </h3>
                  <p class="dir">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptates maxime accusantium, ullam rem, facere culpa beatae odit cumque recusandae qui incidunt tempore accusamus, nesciunt officiis laboriosam fugit...</p>
                  <p><a href="#" class="btn btn-primary" role="button">Leer M&aacute;s</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="image"  src="images/slid-2.jpeg" alt="...">
                <div class="caption">
                  <h3>
                    <span class="heading-style-2">Titulo de la Noticia</span>
                  </h3>
                  <p class="dir">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptates maxime accusantium, ullam rem, facere culpa beatae odit cumque recusandae qui incidunt tempore accusamus, nesciunt officiis laboriosam fugit...</p>
                  <p><a href="#" class="btn btn-primary" role="button">Leer M&aacute;s</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="image" src="images/slid-3.jpg" alt="...">
                <div class="caption">
                  <h3>
                    <span class="heading-style-2">Titulo de la Noticia</span>
                  </h3>
                  <p class="dir">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptates maxime accusantium, ullam rem, facere culpa beatae odit cumque recusandae qui incidunt tempore accusamus, nesciunt officiis laboriosam fugit...</p>
                  <p><a href="#" class="btn btn-primary" role="button">Leer M&aacute;s</a></p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <footer>
      <p>Designed by <a href="">David Arias</a></p>
    </footer>
  </body>
</html>