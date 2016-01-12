<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="UTF-8" />
      <?php include_once("cz/head.html") ?>
      
    <!-- CSS -->  
    <link rel="stylesheet"      href="files/css/bootstrap.min.css"  type="text/css"   />
    <link rel="stylesheet"      href="files/css/carousel.css"       type="text/css"   />
    <link rel="stylesheet"      href="files/css/solanskysro.css"    type="text/css"   />

    <!-- JS -->  
    <script type="text/javascript" src="files/js/jquery.js"></script>
    <script type="text/javascript" src="files/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="files/js/docs.min.js"></script>
    <!-- Favicon -->  
    <link rel="shortcut icon"   href="files/img/favicon.ico"        type="image/x-icon" />
    <link rel="icon"            href="files/img/favicon.ico"        type="image/x-icon" />
    
    <title>SOLANSKÝ s.r.o. Nákladní autodoprava | O společnosti</title>
  </head>
  
  <body>
    
    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->
    
    <div id="box" class="container">

      <div id="navigator" class="navbar navbar-default" role="navigation">
        <div class="hidden-xs nav navbar-nav navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="img_nav" src="files/img/logo/novelogo_bile.png" /></a>
        </div> <!-- div navbar-header -->
        <div class="visible-xs smallmenu nav navbar-nav navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SOLANSKÝ s.r.o.</a>
        </div> <!-- div navbar-header -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <!--<li><a href="onas.php">O nás</a></li>-->
            <li class="hidden-xs"><a href="cz/onas.php">O společnosti</a></li>
            <li><a href="cz/vozovypark.php">Vozový park</a></li>
            <li><a href="cz/kamenivo.php">Prodej kameniva</a></li>
            <li><a href="cz/reference.php">Reference</a></li>
            <li><a href="cz/kontakty.php">Kontakty</a></li>
            <li class="visible-xs divider"></li>
            <li class="visible-xs"><a href="en/contacts.php">English</a></li>
            <li class="visible-xs"><a href="de/index.php">Deutsch</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs"><a href="/cz/index.php">cz</a></li> 
            <li class="hidden-xs navbar-text">|</li>
            <li class="hidden-xs"><a href="/en/index.php">en</a></li>
            <li class="hidden-xs navbar-text">|</li>
            <li class="hidden-xs"><a href="/de/index.php">de</a></li>
          </ul>
        </div><!-- div navbar-collapse -->
      </div>
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
                jakým technickým vybavením disponujeme dnes.</p>
                <p><a class="btn btn-large btn-primary" href="cz/vybaveni.php">Více o technickém vybavení</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="files/img/img1.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Nabízíme široký sortiment služeb</h1>
                <p> Vnitrostátní a mezinárodní spedice a přeprava sypkých
                materiálů, opravy silničních vozidel, prodej kameniva, 
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
 <!--
      <div class="jumbotron">
      </div> 
      -->

      <div id="onas" class="container container-padding">
        <h1 class="page-header">O společnosti</h1>
        <p><strong>SOLANSKÝ s.r.o.</strong> je česká společnost, specializující se na
        <strong>vnitrostátní a mezinárodní silniční přepravu sypkých materiálů</strong>, která
        byla založena v roce 1991. V současné době firma vlastní 35 sklápěcích
        nákladních vozidel, díky kterým provádí přepravu do všech státu
        Evropské unie i mimo ní (Chorvatsko, Černá Hora, Albánie, Bosna a
        Hercegovina atd.).</p>
<!--        <h2 class="page-header">Historie</h2>
        <p>Dopravní firma SOLANSKÝ s.r.o., jejíž hlavní specializací je
        přeprava sypkých hmot, jako jsou štěrky, písky, drcené kamenivo a
        podobně, byla založena panem Solanským v roce 1991 pod názvem Zdeněk
        Solanský – autodoprava.</p>
        <p>Firma začínala podnikat s jedním vozidlem značky LIAZ. V počátcích
        podnikání se vozidla této značky stala páteří vozového parku. Postupně
        s přibývajícím množstvím zakázek, začal majitel firmy rozšiřovat vozový
        park o nákladní automobily dalších značek, především Volvo a DAF.</p>
        <p>Další krok vpřed v podnikání pana Solanského znamenal rok 2003, kdy
        společně se svojí ženou Ivanou založil společnost SOLANSKÝ s.r.o.. Nově
        vzniklý subjekt převzal všechny aktivity a pole působnosti rozšířil o
        další služby jako je velkoobchod a maloobchod se sypkými hmotami,
        maloobchod s motorovými vozidly a jejich příslušenství, zasilatelství a
        opravy silničních vozidel a karoserií.</p>
        <p>V současnosti společnost SOLANSKÝ s.r.o. provozuje 35 nákladních
        vozidel značky Volvo, MAN, DAF a Mercedes-Benz.</p>
        <h2 class="page-header">Náš kolektiv</h2> 
        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12">
          <p>
          <a href="files/img/Koliba.jpg"><img src="files/img/Koliba.jpg" alt="Fotka zaměstnanců firmy Solanský s.r.o."></a>
          </p>
        </div>
      --> 
      </div><!-- div onas -->

      <?php include_once("footer.html") ?>

    </div>
     <!-- div container -->
  </body> 
</html>
