<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Žákovský oddíl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/kaskada.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
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
        <div class= "novinky">
          <div class="nhdr"><h1>Seznam všech článků</h1></div>
          {for $x= $num_cl to $p_n_STR}
          <div class="hdrbox">
            <a href="o_nas.php?idc={$id_cl[$x]}"><h2 class="ndpisbox">{$nadpis[$x]}</h2></a>
            <p>{$text[$x]|truncate:250}
            <a href="o_nas.php?idc={$id_cl[$x]}">více</a></p>
          </div>
         {/for}
             <div class="pagination">
         {for $i= 1 to $number_of_pages}
             {if $i==$page}
             <a class="active">{$i}</a>
                {elseif $i!=$page}
                 <a href="clanky.php?page={$i}"> {$i} </a>
                 {/if}
         {/for}
         </div>
        </div>
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
