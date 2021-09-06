<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Žákovský oddíl</title>
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
  {* Tlačítko, které se zobrazí po odscrollování obrazovky a po kliknutí vyjede obrazovka na pozici id="top" *}
    <a id="myBtn" href="#top"><button title="Go to top">Top</button></a>

    {* Login panel *}
  {include file="templates/komponenty/loginpanel.tpl"}
    {* Konec login panelu *}

    {* Header/hlavička *}
  {include file="templates/komponenty/header.tpl"}
    {* Konec headeru *}

    <section class="column">
      <div class="info">
        <div class="container">
          <h1> {$o_nas->vypisNadpis()}</h1>
          {* Užití Smarty proměnných --> $o_nas *}
          <div class="imgtxt"><img src="{$Tabor_nastup->getURL()}" alt="" /></div>
          <p>
            {$o_nas->vypisText()}
          </p>
        </div>
      </div>
      <div class="nabor">
        <div class="container">
          <H1>{$Nabor->getNadpis()}</H1>
          {* Přidána Google mapa *}
          <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10312.728797892645!2d12.989212447403126!3d49.745015470147024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc119984b86429c1c!2zU3BvcnRvdm7DrSBzdMWZZWxlY2vDvSBrbHViIFN0xZnDrWJybw!5e0!3m2!1scs!2scz!4v1576682975411!5m2!1scs!2scz"
          frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <div class="text">
            <p>
            {$Nabor->getText()}
            </p>
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
    <script src="js/skripty.js"></script>
  </body>
</html>
