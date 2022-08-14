<div class="container my-4">
        <a href="<?= $router->generate('back-articleAdd') ?>" class="btn btn-success float-end">Ajouter</a>
        <h2>Liste des articles</h2>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col"># Cat</th>
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
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>