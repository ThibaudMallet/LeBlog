<?php

namespace App\Controllers;

class BackCoreController
{
    /**
     * Méthode permettant d'afficher du code HTML en se basant sur les views
     *
     * @param string $viewName Nom du fichier de vue
     * @param array $viewData Tableau des données à transmettre aux vues
     * @return void
     */
    protected function show(string $viewName, $viewData = [])
    {
        // globa $router pour pouvoir faire les liens sur chaque page
        global $router;

        // $viewData est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/back/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/back/layout/footer.tpl.php';
    }
}
