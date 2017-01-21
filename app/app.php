<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 21/01/2017
 * Time: 23:57
 */


use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Register services.
$app['dao.article'] = function ($app) {
    return new MicroCMS\DAO\ArticleDAO($app['db']);
};