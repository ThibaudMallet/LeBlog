<h1 class="text-center p-2">Le blog</h1>
<p class="text-center m-auto w-50 text-muted p-4">Vous trouverez ici des articles concernant le sport. Il y a ci-dessous les 3 derniers postés. VOus pouvez trouver la totalité des articles dans la rubrique 'Les Articles' ou aller directement dans la catégorie qui vous intéresse via la barre de navigation.</p>
<?php
foreach($viewData['posts'] as $post) {
?>
<div class="card text-center w-75 m-auto mb-5">
  <div class="card-header" style="background-color:#<?= $post->color ?>">
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
