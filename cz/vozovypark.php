<!DOCTYPE html>
  <?php $name_page = "vozovypark" ?>
  <?php $name_page_en = "equipment" ?>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <?php include_once("head.html") ?>
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
          <p>
          <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body next"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                      <i class="glyphicon glyphicon-chevron-left"></i>
                      Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                      Next
                      <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="links container">
            <div class="col-lg-5 col-md-5 col-sm-5">
              <img src=../files/img/kamiony/sro004.jpg alt="Nákladní vozidla firmy Solanský s.r.o." /><br />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <a href="../files/img/kamiony/sro003.jpg" title="Nákladní vozidla firmy Solanský s.r.o." data-gallery>
                <img src=../files/img/kamiony/sro003.jpg alt="Nákladní vozidla firmy Solanský s.r.o." /></a>
            </div>
          </div>
        </p>
      </div><!-- div vybaveni -->
      <?php include_once("footer.html") ?>
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
