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
  <!-- Login form -->
    <div class="login">
      <a class="user" id="user"><i class="fa fa-user" aria-hidden="true"></i></a>
      <div class="frm">
        <h3 class="heading-style-2">Login</h3>
        <p>Llene el formulario para el iniciar sesi&oacute;n con su correo y contrase&ntilde;a</p>
        <form class="">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
              <input type="email" class="form-control" id="" placeholder="Correo">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
              <input type="Password" class="form-control" id="" placeholder="Password">
            </div>
          </div>
          <div class="botn-log">
            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar</button>
          </div>
        </form>
      </div>
    </div>
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
        <li class="iceMenuLiLevel_1"><a href="index.php">Inicio</a></li>
        <li><a href="#">Institucion</a></li>
        <li><a href="#">Circulares</a></li>
        <li><a href="#">Personal</a></li>
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
            <span class="">Circulares</span>
          </h1>
        </header>
        <div class="col-md-1"></div>
        <div class="col-md-10 col-xs-12">
          <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi obcaecati debitis qui veniam ad excepturi, perferendis velit laudantium eligendi quam facilis necessitatibus dicta consequuntur, nemo optio, beatae modi aut. Odio.</p></br></br>
          <div class="row">
      <?php if ($circulares != '') {?>
        <?php foreach ($circulares as $circular): ?>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="images/word-doc-icon.png" alt="<?php echo $circular['Nombre'];?>">
                <div class="caption">
                  <h3><?php echo $circular['Nombre'];?></h3>
                  <p class="desc_circular"><?php echo $circular['Descripcion'];?></p>
                  <p><a href="<?php echo "circulares/".$circular['Archivo'] ?>" class="btn btn-primary" role="button"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a></p>
                </div>
              </div>
            </div>
        <?php endforeach;?>
      <?php }?>

          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="row">
          <div class="col-md-1"></div>
          <!-- Paginacion -->
          <div class="col-md-10">
            <nav aria-label="Page navigation">
              <ul class="pagination">
          <?php if ($pagina == 1): ?>
                <li class="disabled" ><a class="disabled"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
          <?php else: ?>
                <li><a href="?p=<?php echo $pagina - 1?>"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
          <?php endif; ?>

          <?php
          for ($i=1; $i <= $numeroPagina ; $i++) {
            if ($pagina == $i) {
              echo "<li><a class='active' href='?p=$i'>$i</a></li>";
            }else {
              echo "<li><a href='?p=$i'>$i</a></li>";
            }
          }
          ?>
          <?php if ($pagina == $numeroPagina): ?>
             <li class="disabled" ><a class="disabled"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
          <?php else: ?>
            <li><a href="?p=<?php echo $pagina + 1?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
          <?php endif; ?>
              </ul>
            </nav>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
    <footer>
      <p>Designed by <a href="">David Arias</a></p>
    </footer>
  </body>
</html>