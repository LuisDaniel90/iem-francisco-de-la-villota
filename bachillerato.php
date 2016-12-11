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
       <div class="parallax"><img src="img/sec1.jpg"> </div>
       <!--CABECERA PRINCIPAL - INCLUSION DE MENU-->
       <?php include "php/menu_principal.php" ?>
       
       

       </div>
<!-- ************************************************************ -->
      <!--PRIMERA SESION TEXTO ALTERNATIVO I.E-->
      <div class="superior orange"></div>
       <div class="section unreal">
          <div class="row container">
           <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header" align="center" width="200px">Click aquí para visualizar Video Institucional</div>
              <div class="collapsible-body">
                <div class="contenedor_video" >
                     <video class="video" src="video/video1.mp4" controls="controls">
                      
                   </div>
                </div>
            </li>
            
          </ul>
              
             <p align="justify" class="white-text"> </p>
          </div>   
       </div>
       <div class="superior orange"></div>
<!-- ************************************************************ -->    
      <!--PARALLAX IMG--> 
       <div class="parallax-container">
        <div class="parallax"><img src="img/sec2.jpg"></div>
      </div>
<!-- ************************************************************ -->

      <div class="superior orange"></div>
       <div class="section unreal">
          <div class="row container">
              <hr>
             <p align="justify" class="white-text">El estudiante de la IEM Francisco de la Villota será capaz de integrar asertivamente su ser, su saber y el saber hacer en sus contextos, destacándose por tener un alto nivel de desempeño académico y compromiso social; propendiendo permanentemente por transformar de manera positiva los mundos que lo rodean </p> <hr>
             <a href="index.php" class="waves-effect waves-light btn">Volver a Inicio</a>

          </div>   
       </div>
       <div class="superior orange"></div>



      <!--SEGUNA SESION TARJETAS NOTICIAS--> 
      <div class="superior orange"></div>
     <div class="section unreal">
         <div class="row ">
             <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/sec3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>!Este es nuestro <br> segundo hogar!</h3>
          <h5 class="light grey-text text-lighten-3">Tenemos una gran infraestructura</h5>
        </div>
      </li>
      <li>
        <img src="img/sec4.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>¡Todos somos <br> valiosos!</h3>
          <h5 class="light grey-text text-lighten-3">Potenciamos nuestras capacidades</h5>
        </div>
      </li>
      <li>
        <img src="img/sec5.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>El trabajo en equipo</h3>
          <h5 class="light grey-text text-lighten-3">Nos convierte en futuros líderes.</h5>
        </div>
      </li>
      <li>
        <img src="img/sec6.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>!En armonía con la naturaleza!</h3>
          <h5 class="light grey-text text-lighten-3">Vivimos nuestra etapa escolar.</h5>
        </div>
      </li>
    </ul>
  </div>
              
              <!-- FIN -->
             
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
      </script>
        <!-- Fin importacion de jQuery-->
<!-- ************************************************************ -->
    </body>   
</html>