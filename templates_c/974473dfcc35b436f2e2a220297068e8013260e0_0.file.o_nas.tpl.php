<?php
/* Smarty version 3.1.33, created on 2020-02-24 17:39:34
  from 'D:\Zakovsky_oddil_SSPK\templates\o_nas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53fc460b2a53_29239593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '974473dfcc35b436f2e2a220297068e8013260e0' => 
    array (
      0 => 'D:\\Zakovsky_oddil_SSPK\\templates\\o_nas.tpl',
      1 => 1582562359,
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
function content_5e53fc460b2a53_29239593 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $_smarty_tpl->tpl_vars['clanek_dle_id']->value->vypisNadpis();?>
</title>
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

    <!--  -->
  <?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/loginpanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--  -->

    <!--  -->
  <?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/header_clanek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="container">
      <div class="clanek">
      <!-- Výpis článků podle id -->
        <h1> <?php echo $_smarty_tpl->tpl_vars['clanek_dle_id']->value->vypisNadpis();?>
</h1>
          <div class="imgtxt"><img src="<?php echo $_smarty_tpl->tpl_vars['obrazek_id']->value->getURL();?>
" alt="" /></div>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['clanek_dle_id']->value->vypisText();?>

          </p>
      </div>
    </section>

<!--  -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--  -->

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
