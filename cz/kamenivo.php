<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kamenivo" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>SOLANSKÝ s.r.o. Nákladní autodoprava | Prodej kameniva</title>
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
      <div id="kamenivo" class="container container-padding">
        <h1 class="page-header">Prodej kameniva</h1>
        <p>
        <span class="sestnact">Společnost nabízí dopravu a prodej drceného kameniva, těženého kameniva a písku.</span>
        </p>
        <div class="container">

        <?php include_once("{$czpath}provoznidoba.html") ?>

        <h2>Drcené kamenivo</h2>
        <div class="links container">
          <div class="col-lg-12">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/DK4-8.JPG" title="DK 4-8" data-gallery>
                <img src=../files/img/kamenivo/DK4-8.JPG alt="DK 4-8" /></a>
              <br />
              <h5><strong>DK 4-8</strong></h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/DK16-32.JPG" title="DK 16-32" data-gallery>
                <img src=../files/img/kamenivo/DK16-32.JPG alt="DK 16-32" /></a>
              <br />
              <h5><strong>DK 16-32</strong></h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/DK32-63.JPG" title="DK 32-63" data-gallery>
                <img src=../files/img/kamenivo/DK32-63.JPG alt="DK 32-63" /></a>
              <br />
              <h5><strong>DK 32-63</strong></h5>
            </div>
          </div>
        </div>
        <h2>Těžené kamenivo</h2>
        <div class="container">
          <div class="col-lg-12">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/TK0-4.JPG" title="TK 0-4" data-gallery>
              <img src=../files/img/kamenivo/TK0-4.JPG alt="TK 0-4" /></a>
              <br />
              <h5><strong>TK 0-4</strong></h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/TK16-22.JPG" title="TK 16-22" data-gallery>
              <img src=../files/img/kamenivo/TK16-22.JPG alt="TK 16-22" /></a>
              <br />
              <h5><strong>TK 16-22</strong></h5>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/HustopeceTK0-22.JPG" title="TK 0-22" data-gallery>
              <img src=../files/img/kamenivo/HustopeceTK0-22.JPG alt="TK 0-22" /></a>
              <h5><strong>TK 0-22</strong></h5>
            </div>
          </div>
        </div>
        <h2>Písek</h2>
        <div class="container">
          <div class="col-lg-12">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
              <a href="../files/img/kamenivo_zoom/Pisek.JPG" title="Písek" data-gallery>
              <img src=../files/img/kamenivo/Pisek.JPG alt="Písek" /></a>
              <h5><strong>Písek</strong></h5>
            </div>
          </div>
        </div>


      </div><!-- div sluzby -->
      <?php include_once("footer.html") ?>
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
