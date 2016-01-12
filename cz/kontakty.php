<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $name_page_en = "contacts" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Kontakty</title>
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

      <div id="kontakty" class="container container-padding">
        <h1 class="page-header">Kontakty</h1>
        <div id="sidlo" class="container">
          <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-offset-1 col-xs-10">
            <address>
              <span>Vedení firmy a prodej materiálu</span>
              <dl class="dl-horizontal">
                <dt>adresa</dt>
                <dd>Vigantice 278</dd>
                <dt></dt>
                <dd>756 61</dd>
                <dt>tel.</dt>
                <dd>571 656 440</dd>
              </dl>
              <span>Sídlo společnosti</span>
              <dl class="dl-horizontal">
                <dt>adresa</dt>
                <dd>Tylovice 2050</dd>
                <dt></dt>
                <dd>Rožnov pod Radhoštěm</dd>
                <dt></dt>
                <dd>756 61</dd>
              </dl>
            </address>
          </div><!-- class="container col-md-4">-->
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-offset-1 col-xs-10">
            <?php include_once("mapa.html") ?>
          </div><!-- class="container col-md-6">-->
        </div><!-- div sidlo  class="container"-->

        <h2 class="page-header">Kontakty na jednotlivé osoby</h2>

        <div id="osoby" class="container">
          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Zdeněk Solanský</strong></dd>
                <dt></dt>
                <dd><i>jednatel společnosti</i></dd>
                <dt>mobil</dt>
                <dd>602 728 613</dd>
                <dt>e-mail</dt>
                <dd>solanskyzdenek@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Martin Solanský</strong></dd>
                <dt></dt>
                <dd><i>vedoucí servisu</i></dd>
                <dt>mobil</dt>
                <dd>602 575 025</dd>
                <dt>e-mail</dt>
                <dd>martin.solansky@gmail.com</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->

          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Zdeněk Krhut</strong></dd>
                <dt></dt>
                <dd><i>vedoucí dispečer mezinárodní a vnitrostátní přepravy</i></dd>
                <dt>mobil</dt>
                <dd>724 178 909</dd>
                <dt>tel.</dt>
                <dd>571 656 440</dd>
                <dt>e-mail</dt>
                <dd>solanskydoprava@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>David Zářický</strong></dd>
                <dt></dt>
                <dd><i>dispečer mezinárodní přepravy</i></dd>
                <dt>mobil</dt>
                <dd>602 281 463</dd>
                <dt>tel.</dt>
                <dd>571 656 440</dd>
                <dt>e-mail</dt>
                <dd>solanskydoprava@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->

          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Rudolf Vajgl</strong></dd>
                <dt></dt>
                <dd><i>dispečer vnitrostátní přepravy, fakturace</i></dd>
                <dt>mobil</dt>
                <dd>724 124 705</dd>
                <dt>e-mail</dt>
                <dd>rudavajgl@gmail.com</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Ivana Solanská</strong></dd>
                <dt></dt>
                <dd><i>vedení účetnictví, fakturace</i></dd>
                <dt>mobil</dt>
                <dd>724 178 910</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->
        </div><!-- div osoby class="container"-->
      </div><!-- div kontakty -->

      <?php include_once("kontakt_nas.html") ?>
      <?php include_once("footer.html") ?>

    </div> <!-- id="box" class="container" -->
  </body> 
</html>
