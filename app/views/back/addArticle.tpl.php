<div class="container my-4">
<?= isset($errors) ? dump($errors) : "" ?>
    <a href="<?= $router->generate('back-article') ?>" class="btn btn-success float-end">Retour</a>
    <h2>Ajouter un article</h2>        
    <form action="" method="post" class="mt-5">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input require value="" name="title" type="text" class="form-control" id="title" placeholder="Titre de l'article">
        </div>
        <div class="mb-3">
            <label for="resume" class="form-label">Resumé</label>
            <input value="" name="resume" type="text" class="form-control" id="resume" placeholder="Résumé de l'article">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <input value="" name="content" type="text" class="form-control" id="content" placeholder="Contenu de l'article">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input value="" name="author" type="text" class="form-control" id="author" placeholder="Nom de l'auteur">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie Id</label>
            <input value="" name="category_id" type="number" class="form-control" id="category_id" placeholder="Id de la catégorie">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary mt-5">Valider</button>
        </div>
    </form>
</div>