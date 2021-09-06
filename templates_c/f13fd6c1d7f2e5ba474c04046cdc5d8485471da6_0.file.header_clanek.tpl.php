<?php
/* Smarty version 3.1.33, created on 2020-02-18 17:57:40
  from 'C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\Zakovsky_oddil_SSPK\templates\komponenty\header_clanek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4c1784e1ac53_86528782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f13fd6c1d7f2e5ba474c04046cdc5d8485471da6' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-Devserver-17\\eds-www\\Zakovsky_oddil_SSPK\\templates\\komponenty\\header_clanek.tpl',
      1 => 1582043349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4c1784e1ac53_86528782 (Smarty_Internal_Template $_smarty_tpl) {
?>    <header>
      <div class="vycpi"></div><!-- Po odscrollování se  zde vytvoří div o výšce 101 pixelů -->
      <div class="container stickymenu ">
        <nav class="menu container">
          <div class="row">
            <div class="column">
              <div class="logomenu">
                <a href="index.php"
                  ><img src="img/logo_bile.png" alt="logo menu"
                /></a>
              </div>
            </div>

            <div class="menu-polozky">
              <a href="index.php">Domů</a>
              <a href="o_nas.php?idc=3">O nás</a>
              <a href="gallery.php">Galerie</a>
              <a href="kontakt.php">Kontakty</a>
              <a href="clanky.php">Články</a>
              <?php if ($_smarty_tpl->tpl_vars['verify']->value == 1) {?>
                <a href="kalendar.php">Kalendář</a>
                <?php }?>
              <!-- Pouze pro přihlášené uživatele -->
            </div>

            <div class="column">
              <div class="loginbtn">
                <?php if ($_smarty_tpl->tpl_vars['verify']->value == 1) {?>
                <form action="index.php" method="post">
                <button name="logout" value="logout"><img src="img/odhlasit.png" alt="login button"  /></button>
              </form>
                <?php } elseif ($_smarty_tpl->tpl_vars['verify']->value == 0) {?>
                <button onclick="document.getElementById('loginbutton').style.display='block'"><img src="img/loginbtn.png" alt="login button" /></button>
                <?php }?>
                  <!-- Tohle je button pro odhlášení-->

              </div>
            </div>

            <button class="fa-bars" onclick="hamburgerMenu()">
              <img
                class="hamburger"
                src="img/hamburger-512.png"
                alt="hamburger"
              />
            </button>
          </div>
        </nav>
        </div>
        <div class = "row stin"></div>
     </div>
    </header>
<?php }
}
