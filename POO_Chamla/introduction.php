<?php

class Employe{

    public $nom;
    public $prenom;
    public $age;

    function presentation($prenom, $nom, $age){
        var_dump("Bonjour, je suis $prenom $nom et j'ai $age ans");
    }
}

$employe1 = new Employe();
$employe1->prenom = "Joseph";

presentation($nom, $prenom, $age);
presentation($nom2, $prenom, $age2); // ici, une erreur d'inatention peu foutre la merde ($prenom2 !)