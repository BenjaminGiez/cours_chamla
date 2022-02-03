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
$employe1->nom = "Darymacie";
$employe1->age= 35;

$employe2 = new Employe();
$employe2->prenom = "Uther";
$employe2->nom = "Pendragon";
$employe2->age = 48;

$employe1->presentation($employe1->prenom, $employe1->nom, $employe1->age);