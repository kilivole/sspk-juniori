<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Konkakty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/swiper.css" />
    <link rel="stylesheet" href="css/kaskada.css" />
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

  <body id="top">
    <a id="myBtn" href="#top"><button title="Go to top">Top</button></a>

    {* Login panel *}
  {include file="templates/komponenty/loginpanel.tpl"}
    {* Konec login panelu *}

    {* Header/hlavička *}
  {include file="templates/komponenty/header.tpl"}
    {* Konec headeru *}
    <section>
      <div class="container">
        <h1>{$Strelnice_DDM->vypisNadpis()}</h1>
          <div class="imgtxt"><img src="{$Fomei_Cup_dopadiste->getURL()}" alt="" /></div>
          <p>
            {$Strelnice_DDM->vypisText()}
          </p>
      </div>
    </section>
    <section>
      <div class="container">
        <h1>{$Strelnice_SSPK->vypisNadpis()}</h1>
          <div class="imgtxt"><img src="{$Tabor_nastup->getURL()}" alt="" /></div>
          <p>
            {$Strelnice_SSPK->vypisText()}
          </p>
      </div>
    </section>

{* Footer/patička *}
{include file="templates/komponenty/footer.tpl"}
{* Konec footeru *}

    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/skripty.js"></script>
  </body>
</html>
