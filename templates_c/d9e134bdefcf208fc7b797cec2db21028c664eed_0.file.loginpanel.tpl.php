<?php
/* Smarty version 3.1.33, created on 2020-02-18 09:27:26
  from 'C:\Users\zak\www\Zakovsky_oddil_SSPK\templates\komponenty\loginpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4b9feee7ef46_86374398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e134bdefcf208fc7b797cec2db21028c664eed' => 
    array (
      0 => 'C:\\Users\\zak\\www\\Zakovsky_oddil_SSPK\\templates\\komponenty\\loginpanel.tpl',
      1 => 1582012562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4b9feee7ef46_86374398 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loginbutton" class="login">
  <form class="login-content animate" action="index.php" method="post">
    <span onclick="document.getElementById('loginbutton').style.display='none'" class="close" title="Close login">&times;</span>
    <div class="imgcontainer">
      <h2>Přihlašovací okno</h2>
    </div>

    <div class="container-log">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Zadej email" name="email" required>

      <label for="psw"><b>Heslo</b></label>
      <input type="password" placeholder="Zadej heslo" name="psw" required>

      <button class="submit" type="submit">Přihlásit se</button>
      <label>
        <!-- <input type="checkbox" checked="checked" name="remember"> Zapamatovat si mě
      </label> -->
    </div>

    <div class="container-log">
      <button type="button" onclick="document.getElementById('loginbutton').style.display='none'" class="cancelbtn">Zavřít</button>
      <!-- <span class="psw">Zapomněl jsi <a href="#">heslo?</a></span> -->
    </div>
  </form>
</div>
<?php }
}
