<?php dump($viewData) ?>
<div class="container my-4">
        <a href="<?= $router->generate('back-article') ?>" class="btn btn-success float-end">Retour</a>
        <h2>Ajouter une catégorie</h2>        
        <form action="" method="post" class="mt-5">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input require value="" name="title" type="text" class="form-control" id="title" placeholder="Nom de la catégorie">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Couleur</label>
                <input value="" name="color" type="text" class="form-control" id="color" placeholder="Sous-titre" aria-describedby="colorHelpBlock">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-5">Valider</button>
            </div>
        </form>
    </div>