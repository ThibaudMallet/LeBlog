<nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
  <div class="container-fluid">
    <!-- Navbar Header  -->
    <a href="<?= $router->generate('main-home') ?>" class="navbar-brand">Le Blog</a>
    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
      aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
    <!-- Navbar Collapse -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a href="<?= $router->generate('main-home') ?>" class="nav-link">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="<?= $router->generate('main-article') ?>" class="nav-link">Les articles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Les catégories
          </a>
          <ul class="dropdown-menu">
            <?php
            foreach ($viewData['categories'] as $category) {
            ?>
            <li class="nav-item">
            <a class="nav-link" href="<?= $router->generate('main-category', ['id' => $category->getId()]) ?>"><?= $category->getName() ?></a>
            </li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


