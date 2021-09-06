<?php
/* Smarty version 3.1.33, created on 2020-02-18 09:27:45
  from 'C:\Users\zak\www\Zakovsky_oddil_SSPK\templates\kalendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ba001964386_64432109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26935cbc25bae08aa59fcff5ad9902c9c1bb808c' => 
    array (
      0 => 'C:\\Users\\zak\\www\\Zakovsky_oddil_SSPK\\templates\\kalendar.tpl',
      1 => 1582012562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/komponenty/loginpanel.tpl' => 1,
    'file:templates/komponenty/header_clanek.tpl' => 1,
    'file:templates/komponenty/footer.tpl' => 1,
  ),
),false)) {
function content_5e4ba001964386_64432109 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
  </head>

  <body id="top">
    <a id="myBtn" href="#top"><button title="Go to top">Top</button></a>

      <?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/loginpanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
      <?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/header_clanek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="clanek">
      <div class="container">
        <h1>Kalendář pro členy</h1>
      <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%2355f759&amp;ctz=Europe%2FPrague&amp;src=c3Nway5qdW5pb3JAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y3MuY3plY2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%2322AA99&amp;color=%23329262&amp;color=%231F753C"
      style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

    </section>

<?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="js/swiper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/skripty.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
