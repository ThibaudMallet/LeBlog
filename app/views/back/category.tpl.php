<div class="container my-4">
        <a href="<?= $router->generate('back-categoryAdd') ?>" class="btn btn-success float-end">Ajouter</a>
        <h2>Liste des catégories</h2>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Sous-titre</th>
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
                    <td><?= $category->getColor() ?></td>
                    <td class="text-end">
                        <a href="<?= $router->generate('back-categoryModify', ['id' => $category->getId()]) ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="<?= $router->generate('back-categoryDelete', ['id' => $category->getId()]) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>