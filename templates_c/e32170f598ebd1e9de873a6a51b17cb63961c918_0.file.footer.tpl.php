<?php
/* Smarty version 3.1.33, created on 2020-02-21 14:44:50
  from 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\Zakovsky_oddil_SSPK\templates\komponenty\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4fded2e17622_63181287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e32170f598ebd1e9de873a6a51b17cb63961c918' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Zakovsky_oddil_SSPK\\templates\\komponenty\\footer.tpl',
      1 => 1582230163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fded2e17622_63181287 (Smarty_Internal_Template $_smarty_tpl) {
?>    <footer>
      <div class="container stin">
        <div class="logoftr">
          <a href="index.php"
            ><img src="img/logo_bile.png" alt="logo footer"
          /></a>
        </div>
        <div class="footer-polozky">
          <a href="index.php">Domů</a>
          <a href="o_nas.php">O nás</a>
          <a href="gallery.php">Galerie</a>
          <a href="kontakt.php">Kontakty</a>
          <a href="clanky.php">Články</a>
          <?php if ($_smarty_tpl->tpl_vars['verify']->value == 1) {?>
          <a href="kalendar.php">Kalendář</a>
          <?php }?>
              <!-- Pouze pro přihlášené uživatele -->
        </div>
        <div class="socbtn">
          <a href="https://www.facebook.com/SSPK-St%C5%99%C3%ADbro-571261792908815/" target="_blank" >
          <img src="img/fbbtn.png" alt="facebook button"></a>
        </div>
        <p>Vytvořili: Max Hruška a Vít Kilián</p>
      </div>
    </footer>
<?php }
}
