<?php
/* Smarty version 3.1.33, created on 2020-02-17 23:32:10
  from 'D:\Zakovsky_oddil_SSPK\templates\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4b146ad6c802_92356012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90a4b5eb1ded40702f5dd5423cc01897d5e828a' => 
    array (
      0 => 'D:\\Zakovsky_oddil_SSPK\\templates\\gallery.tpl',
      1 => 1581967845,
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
function content_5e4b146ad6c802_92356012 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    
    <section class="column">
      <div class="info">
        <div class="container">
        <H1> Galerie</H1>
                  <div class="galerka">
            <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pocet']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['pocet']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
              
            <a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['obrazky']->value[$_smarty_tpl->tpl_vars['x']->value];?>
" data-lightbox="example-set" data-title="<?php echo $_smarty_tpl->tpl_vars['popis']->value[$_smarty_tpl->tpl_vars['x']->value];?>
"><img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['obrazky']->value[$_smarty_tpl->tpl_vars['x']->value];?>
" alt=""/></a>

            <?php }
}
?>
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
 src="js/lightbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/skripty.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
