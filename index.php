<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $rootpath = "" ?>
  <?php $czpath = "cz/" ?>
  <?php $enpath = "en/" ?>
  <?php $depath = "de/" ?>
  <?php $filespath = "" ?>
  <head>
    <meta charset="UTF-8" />
      <?php include_once("head.html") ?>
      
    <title>SOLANSKÝ s.r.o. Nákladní autodoprava</title>
  </head>
  
  <body>
    
    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->
    
    <div id="box" class="container">

      <?php include_once("cz/header.html") ?>

      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="files/img/img2.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Převážíme již od roku 1991</h1>
                <p>Letos slavíme 25. let. Za ta léta jsme vyměnili desítky vozů. Podívejte se,
                jakým technickým vybavením <br />disponujeme dnes.</p>
                <p><a class="btn btn-large btn-primary" href="cz/vozovypark.php">Více o technickém vybavení</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="files/img/img1.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Nabízíme široký sortiment služeb</h1>
                <p> Vnitrostátní a mezinárodní spedice a přeprava sypkých
                materiálů, opravy silničních vozidel, prodej kameniva,<br /> 
                štěrku a písku a další.</p>
                <p><a class="btn btn-large btn-primary" href="cz/sluzby.php">Více o službách</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="files/img/img3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Neváhejte a kontaktujte nás</h1>
                <p></p>
                <p><a class="btn btn-large btn-primary" href="cz/kontakty.php">Přejít na kontakty</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>

      <div id="onas" class="container container-padding">
        <h1 class="page-header">O společnosti</h1>
        <?php include_once("cz/ospolecnosti.html") ?>
      </div><!-- div onas -->
      <div id="onas" class="container container-padding">
        <h2 class="page-header">Prodej štěrku</h2>
        <p>
        </p>
        <p>
        <span>Provozní doba: <strong>PO-PÁ: 7 – 15</strong></span><br />
        <span>Kontakt: <strong>+420 777 017 324</strong></span><br />
        <a href="cz/kamenivo.php">Více info</a>
        </p>
      </div><!-- div onas -->

      <?php include_once("cz/footer.html") ?>

    </div>
     <!-- div container -->
  </body> 
</html>
