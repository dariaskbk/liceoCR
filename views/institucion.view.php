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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
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
            <div class="col-sm-1">
                <img src="images/escudo.png" alt="Liceo de Costa Rica" style="width: 80px; float: left;">
            </div>
            <div id="logo" class="col-sm-9">
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
            <span class="">Historia</span>
          </h1>
        </header>
        <div class="col-md-1"></div>
        <div class="col-md-10 col-xs-12">
          <p class="parrafo">El <strong>Liceo de Costa Rica</strong> es una institución educativa de enseñanza secundaria, fundada en 1887 por decreto presidencial. Fue declarada Benemérita e la Cultura Costarricense.</p>
          <h3>
            <span class="heading-style-2">Or&iacute;genes (1887-1902)</span>
          </h3>
          <p class="parrafo">El Liceo de Costa Rica es una institución pública de enseñanza secundaria, fundado por vía de decreto el día 6 de febrero de1887, en el periodo de presidencia del licenciado don Bernardo Soto Alfaro, como iniciativa del licenciado don Mauro Fernández Acuña, el cual estaba a cargo de la Secretaría de Instrucción Pública durante esa misma administración. El Liceo de Costa Rica es una Institución Benemérita de la Cultura Costarricense según Acuerdo 2510 del 6 de febrero de 1987 de la Asamblea Legislativa de Costa Rica y publicado en el Diario Oficial La Gaceta, edición 46 del 6 de marzo de 1987. Según el Libro del Centenario, en sus orígenes el Liceo era un establecimiento de enseñanza elemental y secundaria, y presentaba entonces dos niveles, el elemental, denominado Escuela Modelo con cuatro grados, a los que podían ingresar niños de seis o siete años, y el nivel colegial que a su vez estaba subdividido en la Sección Inferior (la cual comprendía tres años), y la Sección Superior, denominada también Gimnasio (la cual se explayaba a lo largo de un cuatrienio). Esta Sección Superior, presentaba cuatro diferentes ramas formativas: real o clásica, técnica, normal y comercial.</p>

          <p class="parrafo">Para dirigir al Liceo en sus inicios, el Gobierno contrató a tres educadores suizos: Luis Schönau, William Phillipin y Pablo Biolley. El señor Schönau fue nombrado director, y asumió también las cátedras de Filosofía y Pedagogía; él mismo fue el que importó desde el Liceo de Ginebra, el primer reglamento del Liceo de Costa Rica. Por su parte el profesor Phillipin tomó las clases deGeografía, Historia y Francés. Finalmente, don Pablo Biolley, quién poseía una vasta cultura humanística, se hizo cargo de las lecciones de Ciencias Naturales, latín y griego. Apoyándolos a ellos, el equipo docente se completaba con el cubano español Hildebrando Martí a cargo de Castellano, Literatura e Inglés; don Odilón Jiménez, prestigioso ingeniero civil de la época, se hizo cargo de la cátedra de Matemáticas; don José Astúa Aguilar fue profesor de Educación Cívica y Economía Política; don Tranquilino Chacón además de hacerse cargo de la Secretaría de la institución dirigió las clases de Contabilidad y Caligrafía, don Próspero Calderón impartía Dibujo, don Jesús Nuñez daba clases de Canto, mientras que don José Moreno adiestraba en el área de Gimnasia. Como maestros de las primeras secciones actuaron los señores Félix Pacheco, J. Marcelino Pacheco, Austregildo Bejarano, Ricardo Gómez, Emilio Ramírez, Guillermo Calderón y David Castro.</p>

          <p class="parrafo">El Liceo de Costa Rica se ubicó originalmente en el mismo local en donde venía funcionando la Escuela Normal de Costa Rica la cual quedó formando parte del nuevo centro de estudios. Este local estaba situado en la antiguamente llamada Calle de la Universidad, actual Avenida Segunda, exactamente en la cuadra donde hoy se ubica la Caja Costarricense del Seguro Social. En estos locales se mantuvo el Liceo hasta el año 1902, fecha en la cual adoptó como sede los edificios actuales ubicados en la parte sur de la capital, los cuales se habían construido originalmente para albergar casas de corrección.3 El inmueble que ocupa actualmente fue declarado Patrimonio Arquitectónico, Histórico y Cultural de la capital en 1981. Según Decreto Ejecutivo Nº 13129-C.
          A lo largo del primer lustro de existencia, la organización académica se mantuvo sin cambios, ms en enero de 1892 se realizó una modificación significativa, al establecerse una bifurcación en los estudios secundarios relativa a dos áreas: Ciencias y Letras.4 De esta forma, se continuaron dando cambios graduales en las siguientes cinco décadas, siempre enfocados a mantener la altísima calidad de la institución. </p>
          <h3>
            <span class="heading-style-2">Actualidad</span>
          </h3>
          <p class="parrafo">A partir de Octubre del 2007, el Liceo de Costa Rica inicia el proceso para dar paso a los cambios de este siglo, logrando la autorización por parte de la Organización del Bachillerato Internacional (OBI) para funcionar como un Colegio del Mundo. De esta manera, en 2008 inicia el primer grupo de estudiantes bajo el esquema de Bachillerato Internacional, los cuales se graduaron en Diciembre del 2009. Este mismo año se introduce, como opción alternativa al Bachillerato Internacional y al bachillerato convencional, el Bachillerato Nacional con énfasis en Ciencias y en Humanismo.</p>
          <p class="parrafo">Como en la mayor parte de su historia, el Liceo actualmente mantiene su carácter diferenciado, siendo el único centro costarricense de educación secundaria exclusivo para varones. En este sentido, el Colegio Superior de Señoritas, se erige como su contraparte de educación secundaria pública, dirigido exclusivamente a la población femenina. De esta forma, ambos centros educativos hermanos, representan la única opción pública para aquellos padres y madres de familia costarricenses que no desean matricular a sus hijos en la educación mixta.</p>
          <!-- deportes -->
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
      <div class="contact">
        <header class="page_header">
          <h1 class="heading-style-1">
            <span class="">Deportes</span>
          </h1>
        </header>

        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <h3>
              <span class="heading-style-2">Sociedad Atlética del Liceo de Costa Rica</span>
            </h3>
            <p class="parrafo">
              Desde su fundación el Liceo de Costa Rica ha establecido la práctica de adiestrar a sus estudiantes de manera integral, dando interés no solo al aspecto académico-intelectual, sino también a los menesteres de índole deportiva, con el fin de que todo alumno mantenga aceptables condiciones en su desenvolvimiento físico. Esta inclinación se formalizó aún más a partir de 1906, con la fundación de la Sociedad Atlética del Liceo de Costa Rica.
            </p>
            <p class="parrafo">
              En la década de los 20 con la llegada del profesor Eduardo Garnier Ugalde, el cual, con su destacada vision atlética fue el máximo impulsor de la identidad deportiva Liceísta.
            </p>
            <p class="parrafo">
              Fue de esta forma, que el profesor Garnier Ugalde (don Yayo, como cariñosamente le llamaban sus alumnos) fundó la práctica de múltiples disciplinas deportivas, la cual fue revolucionaria en la Costa Rica de los años 20. Según acotó el destacado atleta y egresado liceísta del año 1937, don Alfredo Cruz Bolaños, en la lecciones de don Eduardo "... los alumnos Liceístas practicaron el atletismo en pista y campo, deportes individuales como el levantamiento de pesas, el boxeo, así como la gimnasia con implementos y desde luego ... los tradicionales deportes de conjunto: fútbol, basquetbol y béisbol... (así como) la natación (la cual hizo de esta) un requisito fundamental por ser un recurso personal de sobrevivencia
            </p>
            <p class="parrafo">
              Gracias a esta semilla que sembró con fuerte raíz don Eduardo, el Liceo de Costa Rica ha mantenido dignas representaciones deportivas en múltiples disciplinas como Baloncesto, Béisbol, Balonmano, Natación, Waterpolo, Ajedrez, Atletismo, Artes Marciales y Fútbol; destacando en la década de los 40´s en la tercera división de Costa Rica. En la actualidad el Liceo mantiene representación en Baloncesto y Béisbol en campeonatos de primera división costarricense. De la misma manera, en apego a la tradición y al deber liceista de marcar la diferencia se cuenta desde el año 2009 con un equipo estudiantil de Rugby. Además en el año 2010 se reanuda el equipo de natación estudiantil, el cual ha sido una de las disciplinas deportivas en las que el Liceo se ha desenvuelto históricamente.
            </p>
          </div>
          <div class="col-md-1"></div>
        </div>  
      </div>
      <div class="content-reg">
        <header class="page_header">
          <h1 class="heading-style-1">
            <span class="">Himno del Liceo de Costa Rica</span>
          </h1>
        </header>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <h3 class="centro">
              <span class="heading-style-2">Letra: Juan Dávila. Música: Julio Osma</span>
            </h3>
            <p class="parrafo_himno">
              Nuestro lema el amor al trabajo;<br>
              nuestro culto la propia virtud;<br>
              el ideal acaricia nuestra alma<br>
              con el suave fulgor de su luz.
            </p>
            <p class="parrafo_himno">
              El aroma del arte perfuma<br>
              el sendero de nuestro deber;<br>
              nos alienta el vigor de la ciencia<br>
              de la vida en el duro vaivén.
            </p>
            <p class="parrafo_himno">
              Prometamos amar nuestra tierra,<br>
              por su bien con denuedo luchar;<br>
              y con fe inquebrantable en el triunfo<br>
              que corona el esfuerzo tenaz.
            </p>
            <p class="parrafo_himno">
              Emprender la misión redentora<br>
              que en el mundo nos toca cumplir,<br>
              realizando el magnífico ensueño<br>
              de una Patria más culta y feliz.<br>
            </p>
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