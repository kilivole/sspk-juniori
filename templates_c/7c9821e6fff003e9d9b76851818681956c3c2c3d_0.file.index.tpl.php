<?php
/* Smarty version 3.1.33, created on 2020-02-18 17:51:57
  from 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\Zakovsky_oddil_SSPK\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4c162d67da65_47123353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9821e6fff003e9d9b76851818681956c3c2c3d' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Zakovsky_oddil_SSPK\\templates\\index.tpl',
      1 => 1581612689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/komponenty/loginpanel.tpl' => 1,
    'file:templates/komponenty/header.tpl' => 1,
    'file:templates/komponenty/footer.tpl' => 1,
  ),
),false)) {
function content_5e4c162d67da65_47123353 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    
      <?php $_smarty_tpl->_subTemplateRender("file:templates/komponenty/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <section class="column">
      <div class="info">
        <div class="container">
          <h1> <?php echo $_smarty_tpl->tpl_vars['o_nas']->value->vypisNadpis();?>
</h1>
                    <div class="imgtxt"><img src="<?php echo $_smarty_tpl->tpl_vars['Tabor_nastup']->value->getURL();?>
" alt="" /></div>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['o_nas']->value->vypisText();?>

          </p>
        </div>
      </div>
      <div class="nabor">
        <div class="container">
          <H1><?php echo $_smarty_tpl->tpl_vars['Nabor']->value->getNadpis();?>
</H1>
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10312.728797892645!2d12.989212447403126!3d49.745015470147024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc119984b86429c1c!2zU3BvcnRvdm7DrSBzdMWZZWxlY2vDvSBrbHViIFN0xZnDrWJybw!5e0!3m2!1scs!2scz!4v1576682975411!5m2!1scs!2scz"
          frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <div class="text">
            <p>
            <?php echo $_smarty_tpl->tpl_vars['Nabor']->value->getText();?>

            </p>
          </div>
          </div>
        </div>
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
