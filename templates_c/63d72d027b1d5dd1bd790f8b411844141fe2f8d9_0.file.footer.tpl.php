<?php
/* Smarty version 3.1.33, created on 2020-02-19 17:53:17
  from 'D:\Zakovsky_oddil_SSPK\templates\komponenty\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d67fdcd0aa3_73697553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d72d027b1d5dd1bd790f8b411844141fe2f8d9' => 
    array (
      0 => 'D:\\Zakovsky_oddil_SSPK\\templates\\komponenty\\footer.tpl',
      1 => 1582130773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d67fdcd0aa3_73697553 (Smarty_Internal_Template $_smarty_tpl) {
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
