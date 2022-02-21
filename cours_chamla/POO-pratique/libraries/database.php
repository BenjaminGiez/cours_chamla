<?php
/**
 * Retourne une connexion à la base de données
 * 
 * @return PDO
 */
function getPdo() : PDO
{
    $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,                // ATTR_ERRMODE = reste silencieux en cas d'erreurs -> ERRMODE_EXCEPTION = si il y a une
                                                                                                                    //erreur, elle est signalée
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC     //ATTR_DEFAULT_FETCH_MODE = Mode d'exploitation par defaults, comment vas t on exploiter les 
                                                                                                                //données qui viennent d'une requête; FETCH_ASSOC = j'aimerais bien avoir des tableaux associatifs
    ]);

    return $pdo;
}