<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido - Royal Prestige </title> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="js/animate-scroll demo page"/>
  <link rel="stylesheet" type="text/css" href="../css/main.css?v=1">
  <link rel="stylesheet" type="text/css" href="css/slider.css?v=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="../js/main1.js"></script>


</head>
<body>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">

    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Recetas</h1>        
            <h3>Visita las recetas caseras</h3>
        </hgroup>

<br>

 <a href="#newprod">Recetas</a>

      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Nuevos productos</h1>        
            <h3>Visita nuestra gamas premium de productos</h3>
        </hgroup>     
<br>
 <a href="#newprod">Nuevos productos</a>

      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Videos tutoriales</h1>        
            <h3>Tenemos tutoriales de de como sacarle el 100% a nuestros productos </h3>
        </hgroup>
<br>
 <a href="#newprod">tutoriales</a>

      </div>
    </div>
  </div> 
</div>



<style type="text/css">

  body{
    background: #0A1D37;
  }

  #newprod{
    height: 600px;
    width: 100%;
    display: flex;
    background-image: url(cocina5.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.6;
  }
  #newprod2{
    height: 600px;
    width: 100%;
    display: flex;
    background-image: url(cocina4.jpg);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.6;
  }
  .panel{
    height: 500px;
    width: 400px;
    border-radius: 5px;    
    margin-top: 25px;
    margin-left: 130px;
    background-color: #141b29a8;
    box-shadow: 3px 5px 2px 2px rgba(0, 0, 0, 0.7);
  }
  .panel2{
    height: 500px;
    width: 400px;
    border-radius:5px;    
    margin-top: 25px;
    position: relative;
    left: 300px;
    background-color: #141b29a8;
    box-shadow: 5px 2px 5px 3px rgba(0, 0, 0, 0.7);
  }
.panel3{
  height:500px;
  width:800px;
  margin-top: 50px;
  margin-left:270px; 
  background-color: #141b29a8;
  box-shadow: 5px 2px 5px 2px rgba(0, 0, 0, 0.7);
}
.logo1{
    width: 300px;
    height: 50px;
    position: absolute;
    left: 20px;
}
</style>

<header id="header" class="menus">
      <div class="container-fluid">
          <div class="logo1">
            <img src="https://rpprod.azureedge.net/media/1823/logoroyalprestige.png" alt="logo-royal-prestige" height="100%" width="100%">
          </div>
          <div class="menu">
            <ul>
              <li><a href="#inicio">Inicio</a></li>
              <li><a href="#recetas">Recetas</a></li>
              <li><a href="#productos">Nuevo productos</a></li>
              <li><a href="#tutoriales">Tutoriales</a></li>
            </ul>
          </div>
          <div class="redes">
            <a href="www.facebook.com" ><i class="fa fa-facebook-official"class="fa" aria-hidden="true"></i></a>
            <a href="www.gmail.com"><i class="fa fa-google-plus" aria-hidden="true"  class="gmail"></i></a>
            <a href="www.instagram.com" ><i class="fa fa-instagram" aria-hidden="true" class="ins"></i></a>
          </div>
          <div class="zona-client">
            <ul>
              <li><a href="../index.php">Volver a Inicio</a></li>||
              <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
            </ul>
          </div>
      </div>
    </header>

<section id=newprod>
<div class="row" style="display: flex;">
<div class="large-3 columns">
<div class="panel"data-animate-scroll='{"x": "-200",
                                      "y": "0", 
                                      "alpha": "0", 
                                      "duration": "1"}'>
<h5>Panel Title</h5>
<p>This is a three columns grid panel with an arbitrary height.</p>
</div>
</div>

<div class="large-3  columns">
<div class="panel2" data-animate-scroll='{"x": "100",
                    "y": "0", 
                    "alpha": "0", 
                    "duration": "1"}'>
<h5>Panel Title</h5>
<p>This is a three columns grid panel with an arbitrary height.</p>
</div>
</div>
</div>
</section>

<section id="newprod2">
  <div class="row">
<div class="large-6 columns">
<div class="panel3" data-animate-scroll='{"alpha": "0",
                    "y":"50", 
                    "duration": "1",
                    "scaleX": "0",
                    "scaleY": "0",
                    "ease": "Elastic.easeIn"}'>
<h5>Panel Title</h5>
<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
</div>
</div>
</div>
</section>

<style type="text/css">
  .galery{
    height: 500px;
    max-width: 1300px;
    padding-left: 35px;
  }
  .imgs{
    padding: 5px 5px 5px 5px;
    transition: 0.8s;
  }
  .imgs:hover{
    transition: 0.5s;
    opacity: 0.6;
  }
  .imgs h1{
    position: absolute;
    margin-top: 130px;
    margin-left: 80px;
    font-size: 21px;
    padding: 10px;
    background: #141E30;
    background: -webkit-linear-gradient(to top, #243B55, #141E30);  
    background: linear-gradient(to top, #243B55, #141E30);
    border: 1px solid #ffffff;
    border-radius: 35px 3px 35px 3px;
   transition: 0.8s;
  }
  .imgs h1:hover{
    transition: 0.8s;
    border-radius: 3px 35px 3px 35px;
  }
  .imgs a{
  color: white;
  text-decoration: none;
  transition: 0.8s;
  }

  .imgs a:hover{
  color: white;
  text-decoration: none;
  transition: 0.8s;
  }
  .imgs img{
   height:300px;
   width:315px;
   box-shadow: 5px 2px 5px 0px rgba(0, 0, 0, 0.808);
  }
  .textgalery{
    height: 200px
    width:100%;
    text-align: center;
  }
  .textgalery h1,p{
    text-align: center;
    color: white;
    font-family: serif;
    text-decoration:underline;
  }
</style>

<section class="galery">

  <div class="textgalery">
  <h1>Lorem est laborum.</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitam id est laborum.</p>
</div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

  <div class="col-sm-3 imgs">
  <a href="#">
  <h1><a href="">Receta de pizza</a></h1>
  <img src="cocina4.jpg">
  </a>
  </div>

</div>
</section>


<br><br>
<script src="../js/main1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/EaselPlugin.min.js"></script>
<script src="js/animate-scroll.js"></script>
<script>
      $(document).foundation();  
      $(document).animateScroll();
    

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>


</body>
</html>
