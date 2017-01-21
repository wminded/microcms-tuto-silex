<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 21/01/2017
 * Time: 22:12
 */

// Home page
$app->get('/', function () use ($app) {
    $articles = $app['dao.article']->findAll();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});