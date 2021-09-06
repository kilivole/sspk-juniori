<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kalendar</title>
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
    <section class="clanek">
      <div class="container">
        <h1>Kalendář pro členy</h1>
      <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23a7f6aa&amp;ctz=Europe%2FPrague&amp;src=c3Nway5qdW5pb3JAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y3MuY3plY2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%2322AA99&amp;color=%23329262&amp;color=%231F753C"
      style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

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
