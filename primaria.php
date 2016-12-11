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
       <div class="parallax"><img src="img/prim1.jpg"> </div>
       <!--CABECERA PRINCIPAL - INCLUSION DE MENU-->
       <?php include "php/menu_principal.php" ?>
       </div>
<!-- ************************************************************ -->
      <!--PRIMERA SESION TEXTO ALTERNATIVO I.E-->
      <div class="superior blue"></div>
       <div class="section aoi">
          <div class="row container">
              <hr>
             <p align="justify" class="white-text">La IEM Francisco de la Villota brinda educación en básica primaria desarrollando las dimensiones del ser humano, apoyándose en el descubrimiento del conocimiento a través de la exploración, la investigación, la experimentación y la confrontación permanente de sus realidades y el uso adecuado de las TIC; propendiendo por la formación de seres capaces de asumir y transformar responsablemente su entorno, respetuosos los derechos de los demás y capaces de convivir en armonía y promover el desarrollo de su territorio. </p> <hr>
             <a class="btn" align="center" onclick="Materialize.toast('¡Somos 450 en Primaria!', 3000)">¿Sabes cuántos estudiantes somos?</a>

          </div>   
       </div>

       <div class="superior blue"></div>
<!-- ************************************************************ -->    
      <!--PARALLAX IMG--> 
       <div class="parallax-container">
        <div class="parallax"><img src="img/prim7.jpg"></div>
      </div>
<!-- ************************************************************ -->

<div class="row aoi" >             
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">¿En qué sedes estamos?</span>
                    <p>Los estudiantes de primaria trabajamos en las sedes Villa María, Charguayaco, Pullitopamba y Escuela Integrada de Genoy. <br><br>
                    La Institución Educativa Francisco de la Villota, nos brinda herramientas que nos ayudan a aprender a: <br><br>
                    Pensar<br>
                    Saber<br>
                    Saber hacer<br>
                    Saber ser<br>
                    Saber convivir<br><br>
                    Nos ayuda a identificarnos como estudiantes con capacidades convivenciales, cognitivas y afectivas que nos permiten convivir, destacarnos y ser exitosos en diversos contextos.
 
                    </p><br>
                    </div>
                  
                </div>
              </div>

              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                   <div class="card-content white-text">
                  <img class="responsive-img" src="img/prim2.jpg">
                    </div>                
                </div>
              </div>
            </div>
      <!--SEGUNA SESION TARJETAS NOTICIAS--> 
      <div class="superior orange"></div>
     <div class="section unreal">
         <div class="row ">
             <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/prim3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Formamos líderes<br> para el futuro</h3>
          <h5 class="light grey-text text-lighten-3">Desde el trabajo colaborativo</h5>
        </div>
      </li>
      <li>
        <img src="img/prim4.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>¡Somos amigos!</h3>
          <h5 class="light grey-text text-lighten-3">Crecemos cada día juntos</h5>
        </div>
      </li>
      <li>
        <img src="img/prim5.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Armonía y hermandad</h3>
          <h5 class="light grey-text text-lighten-3">Somos una gran familia</h5>
        </div>
      </li>
      <li>
        <img src="img/prim6.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>¡Aprendemos y crecemos!</h3>
          <h6 class="light grey-text text-lighten-3"></h6>
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

        //Materialize.toast('I am a toast!', 4000)

      </script>
        <!-- Fin importacion de jQuery-->
<!-- ************************************************************ -->
    </body>   
</html>