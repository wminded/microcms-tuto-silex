<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 21/01/2017
 * Time: 20:48
 */

// Return all articles
function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'root', '');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}