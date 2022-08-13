<nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="<?= $router->generate('back-home') ?>" class="navbar-brand">Le Blog</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $router->generate('back-home') ?>" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="<?= $router->generate('back-article') ?>" class="nav-link">Liste des articles</a>
            </li>
            <li class="nav-item">
              <a href="<?= $router->generate('back-category') ?>" class="nav-link">Liste des catégories</a>
            </li>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


