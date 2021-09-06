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
              {if $verify == 1}
                <a href="kalendar.php">Kalendář</a>
                {/if}
              <!-- Pouze pro přihlášené uživatele -->
            </div>

            <div class="column">
              <div class="loginbtn">
                {if $verify == 1}
                <form action="index.php" method="post">
                <button name="logout" value="logout"><img src="img/odhlasit.png" alt="logout button"  /></button>
              </form>
                {elseif $verify == 0}
                <button onclick="document.getElementById('loginbutton').style.display='block'"><img src="img/loginbtn.png" alt="login button" /></button>
                {/if}
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

            <a href="o_nas.php?idc={$cl1->getId()}"><h2 class="ndpisbox">{$cl1->getNadpis()}</h2></a>
            <p>{$cl1->getText()|truncate:150}
            <a href="o_nas.php?idc={$cl1->getId()}">více</a></p>
          </div>
          <div class="hdrbox">
            <a href="o_nas.php?idc={$cl2->getId()}"><h2 class="ndpisbox">{$cl2->getNadpis()}</h2></a>
            <p>{$cl2->getText()|truncate:150}
            <a href="o_nas.php?idc={$cl2->getId()}">více</a></p>
          </div>
          <div class="hdrbox">
            <a href="o_nas.php?idc={$cl3->getId()}"><h2 class="ndpisbox">{$cl3->getNadpis()}</h2></a>
            <p>{$cl3->getText()|truncate:150}
            <a href="o_nas.php?idc={$cl3->getId()}">více</a></p>
          </div>
      </div>
      <!-- Swiper, který načítá obrázky z databáze -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="{$Tabor_nastup->getURL()}" alt="" /></div>
              <div class="swiper-slide"><img src="{$Fomei_Cup_Alblova->getURL()}" alt="" /></div>
              <div class="swiper-slide"><img src="{$Fomei_Cup_dopadiste->getURL()}" alt="" /></div>
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
