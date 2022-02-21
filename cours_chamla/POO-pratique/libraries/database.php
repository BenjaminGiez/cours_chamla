<?php
/**
 * Retourne une connexion à la base de données
 * 
 * @return PDO
 */
function getPdo() : PDO
{
    $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,                // ATTR_ERRMODE = reste silencieux en cas d'erreurs -> ERRMODE_EXCEPTION = si il y a une                     //
                                                                                                                    //  erreur, elle est signalée                                                                                                                                        //
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC     //    ATTR_DEFAULT_FETCH_MODE = Mode d'exploitation par defaults, comment vas t on exploiter les        //
                                                                                                                //     données qui viennent d'une requête; FETCH_ASSOC = j'aimerais bien avoir des tableaux associatifs     //
    ]);

    return $pdo;
}

/**
 * Retourne la liste des articles classés par date de création
 * 
 * @return array
 */
function findAllArticles() : array
{
    $pdo = getPdo();
    $resultats = $pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
    // On fouille le résultat pour en extraire les données réelles
    $article = $resultats->fetchAll();

    return $article;
}

function findArticle(int $id)
{
    $pdo = getPdo();
    $query = $pdo->prepare("SELECT * FROM articles WHERE id = :article_id");

    // On exécute la requête en précisant le paramètre :article_id 
    $query->execute(['article_id' => $id]);
    
    // On fouille le résultat pour en extraire les données réelles de l'article
    $article = $query->fetch();
    return $article;
}

function findAllComments(int $article_id) : array
{
    $pdo = getPdo();
    $query = $pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id");
    $query->execute(['article_id' => $article_id]);
    $commentaires = $query->fetchAll();

    return $commentaires;
}

function deleteArticle(int $id) : void
{
    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM articles WHERE id = :id');
    $query->execute(['id' => $id]);
}

function findComment(int $id)
{
    $pdo = getPdo();
    $query = $pdo->prepare('SELECT * FROM comments WHERE id = :id');
    $query->execute(['id' => $id]);
    $comment = $query->fetch();
    return $comment;
}

function deleteComment(int $id) : void 
{
    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM comments WHERE id = :id');
    $query->execute(['id' => $id]);
}