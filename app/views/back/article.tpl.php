<div class="container my-4">
        <a href="<?= $router->generate('back-articleAdd') ?>" class="btn btn-success float-end">Ajouter</a>
        <h2>Liste des catégories</h2>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Auteur</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($viewData['posts'] as $post) {
                ?>
                <tr>
                    <th scope="row"><?= $post->getId() ?></th>
                    <td><?= $post->getTitle() ?></td>
                    <td><?= $post->getResume() ?></td>
                    <td><?= $post->getAuthor() ?></td>
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div>