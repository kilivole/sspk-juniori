<div id="loginbutton" class="login">
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
