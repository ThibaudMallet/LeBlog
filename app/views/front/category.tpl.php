<h1 style="background-color:#<?= $viewData['currentCategory']->getColor() ?>" class="text-center p-2 w-75 m-auto mb-4"><?= $viewData['currentCategory']->getName() ?></h1>
<?php
foreach($viewData['posts'] as $post) {
?>
<div class="card text-center w-75 m-auto mb-5">
  <div class="card-header" style="color:#<?= $post->color ?>">
    <?= $post->name ?>
  </div>
  <div class="card-body">
    <h2 class="card-title"><?= $post->getTitle() ?></h2>
    <p class="card-text text-muted"><?= $post->getResume() ?></p>
    <p class="card-text"><?= $post->getContent() ?></p>
    <p class="card-text">Ecrit par <?= $post->getAuthor() ?></p>
  </div>
  <div class="card-footer text-muted">
    <time datetime="<?= $post->getPublished_date() ?>"><?= $post->getPublished_date() ?></time>
  </div>
</div>
<?php } ?>