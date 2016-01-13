<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "vozovypark" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>SOLANSKÝ s.r.o. Nákladní autodoprava | Vozový park</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>


      <div class="jumbotron">
      </div> <!-- class="jumbotron" -->
    
      <div id="vozovypark" class="container container-padding">
        <h1 class="page-header">Vozový park</h1>
        <p>
          <strong>SOLANSKÝ s.r.o.</strong> disponuje vozovým parkem čítajícím <strong>35 tahačů</strong> značky
          Volvo, MAN, DAF, Mercedes-Benz a sklápěcích návěsů značky Stas,
          Schmitz, Benalu a Panav. Vozidla jsou vybavena dopravním informačním
          systémem <strong>Dynafleet</strong>, který umožňuje v reálném čase sledovat polohu
          vozidel, spotřebu paliva, jízdní doby, styl jízdy řidičů s vozidlem a
          celou řadu dalších funkcí. <br />
        </p>
        <?php include_once("fotogalerie.html") ?>
      </div><!-- div vybaveni -->
      <?php include_once("footer.html") ?>
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
