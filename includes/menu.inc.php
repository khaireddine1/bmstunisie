<ul class="navbar-nav ml-auto text-center">
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/index.php" ? "active" : ""; ?>">
    <a class="nav-link" href="./">Accueil</a>
  </li>
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/about.php" ? "active" : ""; ?>">
    <a class="nav-link" href="about.php">À propos de nous</a>
  </li>
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/our_services.php" ? "active" : ""; ?>">
    <a class="nav-link" href="our_services.php">Nos services</a>
  </li>
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/formations.php" ? "active" : ""; ?>">
    <a class="nav-link" href="formations.php">Nos formations</a>
  </li>
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/our_works.php" ? "active" : ""; ?>">
    <a class="nav-link" href="our_works.php">Nos Travaux</a>
  </li>
  <li class="nav-item <?= $_SERVER["PHP_SELF"] == "/contact.php" ? "active" : ""; ?>">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
</ul>

