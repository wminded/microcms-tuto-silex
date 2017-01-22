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
    return $app['twig']->render('index.html.twig', array('articles' => $articles));
});
