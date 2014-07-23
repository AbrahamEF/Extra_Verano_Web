<?php 
  session_start();
  include ('../layouts/header.php');
?>

	 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="../img/mapa.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Mapa Mudial</h1>
                  
                  
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../img/mapa3.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>CONTINENTES</h1>
                  <p>(FONDOS GEOGRÁFICAMENTE DISTRIBUIBLES)</p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../img/mapa2.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>PAISES</h1>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->


          
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Continente</h>
        <p class="lead">
        Un continente es una gran extensión de tierra que se diferencia de otras menores o sumergidas por conceptos geográficos y culturales como océanos y etnografía..</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Seguir leyendo ...</a></p>

        <h1>Pais</h1>
        <p class="lead">
        Comunidad social con una organización política común y un territorio y órganos de gobierno propios que es soberana e independiente políticamente de otras comunidades...</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Seguir leyendo ...</a></p>
      

        <h1>Estado</h1>
        <p class="lead">
        Comunidad social con una organización política común y un territorio y órganos de gobierno propios que es soberana e independiente políticamente de otras comunidades....</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Seguir leyendo ...</a></p>
      </div>
      
      <div class="jumbotron" align="center">
      <h2>Mejores Lugares Para Viajar</h2>
      	<!-- Example row of columns -->
          <div class="row">
            <div class="col-lg-4">
              <h4>Roma - Italia</h4>
              <p><img src="../img/Italia.jpg" height="100%" width="100%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Palawan - Filipinas</h4>
              <p><img src="../img/palawan filipina.jpg" height="100%" width="100%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Brasil</h4>
              <p><img src="../img/Brasil.jpg" height="100%" width="100%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
          </div>

          <div class="row">
             <div class="col-lg-4">
              <h4>Huatulco - México</h4>
              <p><img src="../img/huatulco.jpg" height="100%" width="100%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Venecia - Italia</h4>
              <p><img src="../img/venecia.jpg" height="95%" width="90%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Fiyi - islas del pacífico</h4>
              <p><img src="../img/islas.jpg" height="100%" width="100%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
          </div>
      
      </div>


     
<?php include ('../layouts/footer.php'); ?>
