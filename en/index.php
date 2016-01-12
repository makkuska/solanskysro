<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="UTF-8" />
      <?php include_once("head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Introduction</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
    <?php include_once("header.html") ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../files/img/img2.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>We are transporting from 1991</h1>
              <p>We changed tens of truck during over the years. <br /> See
              what technical equipment we have today.</p>
              <p><a class="btn btn-large btn-primary" href="equipment.php">More about technical equipment</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../files/img/img1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>We are offering a wide range <br /> of services</h1>
<!--              <p> Vnitrostátní a mezinárodní spedice a přeprava sypkých materiálů, opravy silničních vozidel, prodej kameniva, štěrku a písku a další.</p>-->
              <p><a class="btn btn-large btn-primary" href="services.php">More about services</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../files/img/img3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Please do not hesitate <br />and contact us</h1>
              <p></p>
              <p><a class="btn btn-large btn-primary" href="contacts.php">Move to Contacts</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <div id="onas" class="container container-padding">
      
      <h1 class="page-header">About company</h1>
      <p>
SOLANSKÝ s.r.o. is a Czech company specializing in intranational and international road transport of powdery materials which was founded in 1991. Now, the company owns about 35 tipper trucks that transport the powdery materials to all countries of the European Union as well as other countries, for example Croatia, Albania etc.
      </p>
    </div><!-- div onas -->
    <?php include_once("footer.html") ?>

      </div> <!-- div container -->
  </body> 
</html>
