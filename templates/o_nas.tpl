<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{$clanek_dle_id->vypisNadpis()}</title>
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

    <!-- {* Login panel *} -->
  {include file="templates/komponenty/loginpanel.tpl"}
    <!-- {* Konec login panelu *} -->

    <!-- {* Header/hlavička *} -->
  {include file="templates/komponenty/header_clanek.tpl"}
    {* Konec headeru *}
    <section class="container">
      <div class="clanek">
      <!-- Výpis článků podle id -->
        <h1> {$clanek_dle_id->vypisNadpis()}</h1>
          <div class="imgtxt"><img src="{$obrazek_id->getURL()}" alt="" /></div>
          <p>
            {$clanek_dle_id->vypisText()}
          </p>
      </div>
    </section>

<!-- {* Footer/patička *} -->
{include file="templates/komponenty/footer.tpl"}
<!-- {* Konec footeru *} -->

    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/skripty.js"></script>
  </body>
</html>
