<h1 class="text-center p-2">Le back-office</h1>
<div class="row m-5">
    <div class="col-12">
        <div class="card text-white mb-3">
            <div class="card-header bg-primary">Liste des catégories</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom de la catégorie</th>
                            <th scope="col">Couleur</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($viewData['categories'] as $category) {
                        ?>
                        <tr>
                            <th scope="row"><?= $category->getId() ?></th>
                            <td><?= $category->getName() ?></td>
                            <td style="color:#<?= $category->getColor() ?>"><?= $category->getColor() ?></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                        <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-success">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>