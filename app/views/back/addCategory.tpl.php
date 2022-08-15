<div class="container my-4">
<?= isset($errors) ? dump($errors) : "" ?>
        <a href="<?= $router->generate('back-category') ?>" class="btn btn-success float-end">Retour</a>
        <h2>Ajouter une catégorie</h2>        
        <form action="" method="post" class="mt-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input require value="<?= isset($viewData['category']) ? ($viewData['category'])->getName() : "" ?>" name="name" type="text" class="form-control" id="name" placeholder="Nom de la catégorie">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Couleur</label>
                <input value="<?= isset($viewData['category']) ? ($viewData['category'])->getColor() : "" ?>" name="color" type="text" class="form-control" id="color" placeholder="Sous-titre" aria-describedby="colorHelpBlock">
                <small class="text-muted" >Entrez les 6 couleurs correspondantes au code hexa</small>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-5">Valider</button>
            </div>
        </form>
    </div>