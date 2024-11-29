<nav>
    <?php
      $lightmode = isset($_COOKIE['lightmode']) ? $_COOKIE['lightmode'] : 'false';
    ?>
    <div class="nav">
      <img src="/photos/logo2.png" alt="logo" style="width: 70px; height: 70px; margin-bottom: 20px;">
      <a class="nav-link" href="/#team"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Team</button></a>
      <a class="nav-link" href="/#python"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Python</button></a>
      <a class="nav-link" href="/#java"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Java</button></a>
      <a class="nav-link" href="/#js"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">JS</button></a>
      <a class="nav-link" href="/#php"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">PHP</button></a>
      <div class="nightmode-toggle">
          <label class="switch-label">
            <input type="checkbox" class="checkbox" id="lightmode" onchange="checkLightmodeBox()" <?php echo ($lightmode == 'true') ? 'checked' : ''; ?>>
            <span class="slider"></span>
          </label>
      </div>
      <a class="nav-link" href="/login/"><button class="button-nav" role="button" style="text-decoration: none; color: inherit;">Account</button></a>
    </div>
</nav>