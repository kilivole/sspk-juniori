<?php
/* Smarty version 3.1.33, created on 2020-02-18 17:01:34
  from 'D:\Zakovsky_oddil_SSPK\templates\komponenty\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4c0a5ee43557_76920615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c472cc2d93801f07397c3bc5b1910bcc4814f44' => 
    array (
      0 => 'D:\\Zakovsky_oddil_SSPK\\templates\\komponenty\\header.tpl',
      1 => 1582041685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4c0a5ee43557_76920615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Zakovsky_oddil_SSPK\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
    <header >
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
                <button name="logout" value="logout"><img src="img/odhlasit.png" alt="logout button"  /></button>
              </form>
                <?php } elseif ($_smarty_tpl->tpl_vars['verify']->value == 0) {?>
                <button onclick="document.getElementById('loginbutton').style.display='block'"><img src="img/loginbtn.png" alt="login button" /></button>
                <?php }?>
                  <!-- Tohle je button pro odhlášení-->

              </div>
            </div>
                <!-- Tlačítko na otevření menu se zobrazí na mobilních zařízeních -->
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
        <!-- Úryvky nových článků -->
        <div class="container">
      <div class = "row stin">
        <div class="column novinky ">
          <div class="nhdr"><h1>Novinky</h1></div>
          <div class="hdrbox">

            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl1']->value->getId();?>
"><h2 class="ndpisbox"><?php echo $_smarty_tpl->tpl_vars['cl1']->value->getNadpis();?>
</h2></a>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cl1']->value->getText(),150);?>

            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl1']->value->getId();?>
">více</a></p>
          </div>
          <div class="hdrbox">
            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl2']->value->getId();?>
"><h2 class="ndpisbox"><?php echo $_smarty_tpl->tpl_vars['cl2']->value->getNadpis();?>
</h2></a>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cl2']->value->getText(),150);?>

            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl2']->value->getId();?>
">více</a></p>
          </div>
          <div class="hdrbox">
            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl3']->value->getId();?>
"><h2 class="ndpisbox"><?php echo $_smarty_tpl->tpl_vars['cl3']->value->getNadpis();?>
</h2></a>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cl3']->value->getText(),150);?>

            <a href="o_nas.php?idc=<?php echo $_smarty_tpl->tpl_vars['cl3']->value->getId();?>
">více</a></p>
          </div>
      </div>
      <!-- Swiper, který načítá obrázky z databáze -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['Tabor_nastup']->value->getURL();?>
" alt="" /></div>
              <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['Fomei_Cup_Alblova']->value->getURL();?>
" alt="" /></div>
              <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['Fomei_Cup_dopadiste']->value->getURL();?>
" alt="" /></div>
            </div>
            <!-- Přidá stránkování -->
            <div class="swiper-pagination"></div>
            <!-- Přidá šipky -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
      </div>
    </div>
    </header>
<?php }
}
