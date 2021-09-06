<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Galerie</title>
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
  {include file="templates/komponenty/header_clanek.tpl"}
    {* Konec headeru *}

    <section class="column">
      <div class="info">
        <div class="container">
        <H1> Galerie</H1>
        {* Lightbox galerie upravená podle přestav a obrázky zobrazené smarty proměnnými z databáze *}
          <div class="galerka">
            {for $x= 0 to $pocet}
              
            <a class="example-image-link" href="{$obrazky[$x]}" data-lightbox="example-set" data-title="{$popis[$x]}"><img class="example-image" src="{$obrazky[$x]}" alt=""/></a>

            {/for}
               </div>
        </div>
    </div>
    </section>

{* Footer/patička *}
{include file="templates/komponenty/footer.tpl"}
{* Konec footeru *}
    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/skripty.js"></script>
  </body>
</html>
