<h1 class="text-center p-2">Le back-office</h1>
<div class="row m-5">
            <div class="col-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-primary">Liste des articles</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Catégorie</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($viewData['posts'] as $post) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $post->getTitle() ?></th>
                                    <td><?= $post->name ?></td>
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
                        <div class="d-grid gap-2">
                            <a href="<?= $router->generate('back-article') ?>" class="btn btn-success">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-primary">Liste des catégories</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
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
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="<?= $router->generate('back-categoryDelete', ['id' => $category->getId()]) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2">
                            <a href="<?= $router->generate('back-category') ?>" class="btn btn-success">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>