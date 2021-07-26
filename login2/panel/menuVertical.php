
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="zmdi zmdi-car menu-icon"></i>
              <span class="menu-title">Nuevo Carro</span>
            </a>
          </li>
        <?php
        if ($privilegio >1) { ?>
          <li class="nav-item">
            <a class="nav-link" href="banner.php">
              <i class="zmdi zmdi-view-subtitles menu-icon"></i>
              <span class="menu-title">Banner </span>
            </a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a href="misCars.php" class="nav-link">
              <i class="mdi mdi-bulletin-board menu-icon"></i>
              <span class="menu-title">Mis Carros</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="misDatos.php" class="nav-link">
              <i class="zmdi zmdi-account-o menu-icon"></i>
              <span class="menu-title">Mi Perfil</span>
            </a>
          </li>
        <?php
        if ($privilegio >1) { ?>
          <li class="nav-item">
            <a href="terminos.php" class="nav-link">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Términos</span>
            </a>
          </li>
        <?php } ?>

          <li class="nav-item">
            <a href="cerrar.php" class="nav-link">
              <i class="zmdi zmdi-power menu-icon"></i>
              <span class="menu-title">Salir</span>
            </a>
          </li>
          
        </ul>
      </nav>