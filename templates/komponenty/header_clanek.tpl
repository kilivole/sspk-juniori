    <header>
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
              {if $verify == 1}
                <a href="kalendar.php">Kalendář</a>
                {/if}
              <!-- Pouze pro přihlášené uživatele -->
            </div>

            <div class="column">
              <div class="loginbtn">
                {if $verify == 1}
                <form action="index.php" method="post">
                <button name="logout" value="logout"><img src="img/odhlasit.png" alt="login button"  /></button>
              </form>
                {elseif $verify == 0}
                <button onclick="document.getElementById('loginbutton').style.display='block'"><img src="img/loginbtn.png" alt="login button" /></button>
                {/if}
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
