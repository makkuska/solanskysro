<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="UTF-8" />
      <?php include_once("head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Kontakty</title>
  </head>
  
  <body>
    <div id="box" class="container">
    <?php include_once("header.html") ?>

    <?php
      //seznam mailů, na které se zpráva odešle
      $email = 'marketa.solanska@gmail.com';
      //proměnné naplněné z formáře kontaktujte_nas.html
      $zprava = $_POST['zprava'];
      $predmet = $_POST['predmet'];
      $odesilatel = $_POST['odesilatel_mail'];

      $pr = "Dotaz z webu: $predmet";

      //hlavicka
        $hlavicka = "From:$odesilatel\n";
        $hlavicka .= "Subject:$pr\n";
        $hlavicka .= "MIME-Version: 1.0\n";
        $hlavicka .= "Content-Transfer-Encoding: QUOTED-PRINTABLE\n"; //způsob kódování
        $hlavicka .= "X-Mailer: PHP\n";
        $hlavicka .= "Content-Type: text/plain; charset=UTF-8\n"; // kódování
      
      //kopie emailu odesílatele
      $zp_prijemce = 'Vaše zpráva, kterou jste odeslali přes web solanskysro.cz:' . "\n" . $zprava;
      mail($odesilatel, 'Kopie Vaší zprávy z webu solanskysro.cz', $zp_prijemce, $hlavicka);

      //mail na 
      $vysledek = mail($email, $pr, $zprava, $hlavicka);

      if ($vysledek)
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">Váš mail byl úspěšně odeslán</h1><p> Děkujeme za vaši zprávu či dotaz.</><p> Po přečtení se Vám budeme snažit, co nejdříve odpovědět na mail, který jste zadali ' . '('.$odesilatel.').</p><p><a class="btn btn-info" href="kontakty.phtml">Zpět na kontakty</a></p></div>');
        else
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">Omlouváme se, někde nastala chyba. Váš e-mail nebyl odeslán. </<h2>><p>Zkuste zadat požadavek znovu, zkontrolujte, že jste vyplnili všechny kolonky. V případě, že to stále nepůjde, kontaktujte nám přímo na e-mailu solanskydoprava@quick.cz nebo na telefonním čísle +420 571 656 440. Děkujeme za pochopení.</p><p><a class="btn btn-info" href="kontakty.phtml">Zpět na kontakty</a></p></div></div>');
      
      include_once("footer.html");
?>
</body>
</html>
