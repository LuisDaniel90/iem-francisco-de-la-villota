<!DOCTYPE html>
<html lang="es">
    <head>
        <title>I.E. Francisco de la Villota</title>
        <meta charset="UTF-8">
        <?php include "php/links.html" ?>
    </head>
        
    <body>
<!-- ************************************************************ -->
       <!--CABECERA PRINCIPAL - MENU GENERAL-->
       <div class="parallax-container">       
       <div class="parallax"><img src="img/pres3.jpg"> </div>
       <!--CABECERA PRINCIPAL - INCLUSION DE MENU-->
       <?php include "php/menu_principal.php" ?>
       
       </div>
<!-- ************************************************************ -->
      <!--PRIMERA SESION TEXTO ALTERNATIVO I.E-->
      <div class="superior aoi"></div>
       <div class="section beach storm">
          <div class="row container">
              
              La IEM Francisco de la Villota brinda educación en los niveles de pre-escolar desarrollando las dimensiones del ser humano, apoyándose en el descubrimiento del conocimiento a través de la exploración, la investigación, la experimentación y la confrontación permanente de sus realidades y el uso adecuado de las TIC; propendiendo por la formación de seres capaces de asumir y transformar responsablemente su entorno, respetuosos los derechos de los demás y capaces de convivir en armonía y promover el desarrollo de su territorio.
              <hr>
              <a class="waves-effect waves-light btn center" align="center" href="#modal1">¿Sabes cuántos niños y niñas están en preescolar?   </a>
          </div>
           <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Para el año 2016</h4>
      <p>35 niños y niñas compartieron con nosotros sus primeros pasos en nuestra Institución formándose para ser una grandes personas en el mañana. Estos niños trabajan en las sedes VillaMaría y Charguayaco. </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>   
       </div>
       <div class="superior aoi"></div>
<!-- ************************************************************ -->    
      <!--PARALLAX IMG--> 
       <div class="parallax-container">
        <div class="parallax"><img src="img/pres2.jpg"></div>
      </div>
<!-- ************************************************************ -->
      <!--SEGUNA SESION TARJETAS NOTICIAS--> 
      <div class="superior orange"></div>
      <div class="section unreal">  
          <div class="row imagenes_agrandadas">
              <H4>GALERIA DE IMÁGENES</H4>
              <img class="materialboxed " height="150" src="img/pres1.jpg">
              <img class="materialboxed " height="150" src="img/pres5.jpg">
              <img class="materialboxed " height="150" src="img/pres6.jpg">
              <img class="materialboxed " height="150" src="img/pres4.jpg">
              
          </div> 
        </div> 
    </div>
    <div class="superior orange"></div>
<!-- ************************************************************ -->
      <!--TERCERA SESION MULTIMEDIA SLIDER...?--> 
    

<!-- ************************************************************ -->    
    <!-- PIE DE PAGINA -->    
          
    <div class="superior orange"></div>
     <footer class="footer black">
       <?php include "php/pie-pagina.php" ?> 
    </footer>                       
<!-- ************************************************************ -->
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicializacion.js"></script>
      <script>
        //SLIDER
        $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
        //PARALLAX
        $(document).ready(function(){
      $('.parallax').parallax();
    });
        //CARROUSEL
        $(document).ready(function(){
        $('.carousel').carousel(); });
        $('.carousel.carousel-slider').carousel({full_width: true});

        $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      </script>
        <!-- Fin importacion de jQuery-->
<!-- ************************************************************ -->
    </body>   
</html>