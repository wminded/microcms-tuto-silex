<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 22/01/2017
 * Time: 00:02
 */


// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'microcms',
    'user'     => 'root',
    'password' => '',
);